<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;

class FireAlertController extends Controller
{
    
    
    public function fireInfo(){
        $final = $this->data();
        $logistics = $this->logistics();

     return view('admin.fire_location', compact('final','logistics'));
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

