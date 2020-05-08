<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistic;
use App\User;
use JavaScript;


class FireAlertController extends Controller
{
    //
    protected $client;


    public function __construct() {
        $this->middleware('auth');

        $this->client = new \GuzzleHttp\Client();
    }

    public function fireInfo(){
    	$logistics = Logistic::where('firestationid',auth()->user()->id)->orderBy('created_at','DESC')->first();

    	if(isset($logistics) && $logistics->water_volume >= 3000 && $logistics->fire_extinguisher >= 3 && $logistics->fire_trucks >1 && $logistics->number_of_persons > 3){

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
    	return "No Available Incident";  		
    }


    public function final($stations,$data){

    	$temp = [];
    	foreach($stations as $station) {
    		foreach($data as $d) {
    			$res = json_decode($this->client->request("POST","https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$station['latitude'].",".$station['longitude']."&destinations=".$d['lat'].",".$d['lng']."&key=AIzaSyB7kMDqCrPcVv4uCROO1GOev9XCDqUEAAo")->getBody()->getContents(), true);

    			$distance = str_replace("mi", "", $res['rows'][0]['elements'][0]["distance"]['text']);;

    			 
    			$d['distance'] = $distance;
    			$d['station'] = $station;
    			array_push($temp, $d);
    			

    		}
    	}
        
    	return $this->check($temp);

    }

    public function check($temp){
        // return $temp;
        //the problem is from here..
            // foreach ($temp as $data) {
                // $dis = [];
        $database = $this->initDB();
        $customer = $database->getReference('customer')->getSnapshot()->getValue();
        for ($i=0; $i < sizeof($temp) ; $i++) { 
            $min['dis'] = floatval($temp[$i]['distance']);
            $num[] = min($min);
        }
        // return $num;

        // for ($i=0; $i < sizeof($num) ; $i++) { 
        //     if($num[$i] == floatval($temp[$i]['distance'])){
        //         // $min[] = min($num[$i]);
        //         print "me";
        //     }
        // }
        // return $min;

        // $data = [];
        //     for ($i=0; $i < sizeof($temp); $i++) {
                
        //         foreach ($customer as $person) {
        //             if($person['device_id'] == $temp[$i]['device_id']) {
        //                 $min['dis'] = floatval($temp[$i]['distance']);
        //                 // $num[] = $min;
        //                 array_push($data,$min);

        //             }
                    
        //         } 
        //         // array_push($dis,$num);
        //     }
        //     // }
        //     return $data;
        //     return $num;
           // return sizeof($num);

        
            $final = [];
            for ($i=0; $i < sizeof($num); $i++) { 
                foreach ($temp as $data) {
                    if($num[$i] == floatval($data['distance'])){
                        array_push($final,$data);
                    }
                }
            }
            // return $final;
    
        // print_r($final);

        return view('admin.fire_location')->with('final',$final);
            

    }

    public function map(Request $request){
    
        $data = [];

        $d['lat'] = $request->lat;
        $d['lng'] = $request->lng;
        $d['loc'] = $request->loc;
        $d['user_lat'] = auth()->user()->latitude;
        $d['user_lng'] = auth()->user()->longitude;
        $d['user_name'] = auth()->user()->name;
        
        array_push($data, $d);

        // return $data;

        foreach ($data as $key) {
            JavaScript::put([
            'client_lat' => $key['lat'],
            'client_lng' => $key['lng'],
            'client_loc' => $key['loc'],
            'user_lat' => $key['user_lat'],
            'user_lng' => $key['user_lng'],
            'user_name' => $key['user_name']
            ]);
        }

        


        return view('admin.map');


    }
}

