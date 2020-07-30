<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Logistic;
use App\User;
use Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;


    public function __construct() {
        // $this->middleware('auth');

        $this->client = new \GuzzleHttp\Client();
    }

    public function initDB(){
        //new method
        $firebase = (new Factory)->withServiceAccount(__DIR__.'/FireguardKey.json');
        $database = $firebase->createDatabase();

        return $database;
    }

    public function logistics(){
        $logistics = Logistic::where('firestationid',auth()->user()->id)->orderBy('created_at','DESC')->first();

        if($logistics)
            return $logistics;
    }

    public function data(){
        
        $logistics = $this->logistics();

        if($logistics){

            $database = $this->initDB();

            $fire = $database->getReference('fireinfo')->getSnapshot()->getValue();

            if($fire){
                $customer = $database->getReference('customer')->getSnapshot()->getValue();

                $data = [];

                foreach ($fire as $event) {
                    $temp = [];

                    foreach ($customer as $person) {
                        if($event['device_id'] == $person['device_id'] && $event['status'] == 'Fire') {

                            $temp['device_id'] = $person['device_id'];
                            $temp['customer_name'] = $person['customer_name'];
                            $temp['location'] = $person['location'];
                            $temp['lat'] = $event['latitude'];
                            $temp['lng'] = $event['longitude'];
                            $temp['intensity'] = $event['intensity'];
                            $temp['status'] = $event['status'];

                            array_push($data, $temp);

                            break;
                        }
                    }
                }

                $fire_station = User::get();

                

                return $this->final($fire_station,$data);
            }
            return "No fire";
        }
        return "Logistics not enough. Please top up to access page. Thank you";         
    }


    public function final($stations,$data){
        
        $temp = [];
        foreach($data as $d) {
            $temp_stations = [];
            foreach($stations as $station) {
                $res = json_decode($this->client->request("POST","https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$station['latitude'].",".$station['longitude']."&destinations=".$d['lat'].",".$d['lng']."&key=AIzaSyB7kMDqCrPcVv4uCROO1GOev9XCDqUEAAo")->getBody()->getContents(), true);

                $distance = str_replace("mi", "", $res['rows'][0]['elements'][0]["distance"]['text']);;

                array_push($temp_stations, [
                    'id' => $station->id, 
                    'name' => $station->name,
                    'email' => $station->email,
                    'distance' => $distance
                ]);

            }

            array_push($temp, [
                'device_id' => $d['device_id'], 
                'customer_name' => $d['customer_name'],
                'location' => $d['location'],
                'intensity' => $d['intensity'],
                'status' => $d['status'],
                'lat' => $d['lat'],
                'lng' => $d['lng'],
                'stations' => $temp_stations
            ]);
        }

        // return $temp;
        
        return $this->check($temp);

    }

    public function check($temps){
        // return $temps;
            
        $final = [];

        foreach($temps as $t) {
            $stations = $t['stations'];

            $min = $stations[0]['distance'];
            $index = 0;

            for($i=0; $i<count($stations); $i++){
                if($stations[$i]['distance'] < $min) {
                    $min = $stations[$i]['distance'];
                    $index = $i;
                }
            }

            if($stations[$index]['email'] == Auth::user()->email){
                array_push($final, [
                    'device_id' => $t['device_id'], 
                    'customer_name' => $t['customer_name'],
                    'location' => $t['location'],
                    'status' => $t['status'],
                    'intensity' => $t['intensity'],
                    'lat' => $t['lat'],
                    'lng' => $t['lng'],
                    'station' => $stations[$index]
                ]);
            }
        }

        return $final;        
    }
}
