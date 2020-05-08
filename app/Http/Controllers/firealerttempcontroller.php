<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FireAlertController extends Controller
{
    //
    public function fireInfo(){
    	$database = $this->initDB() ;

        $fire = $database->getReference('fireinfo')->getSnapshot()->getValue();

        $customer = $database->getReference('customer')->getSnapshot()->getValue();

        if(!$fire)
    		return "No Fire";

    	$data = [];

    	foreach ($fire as $burn) {

    		$temp = [];

    		foreach ($customer as $person) {
    			if($burn['device_id'] == $person['device_id'] && $burn['status'] == 'Fire') {
    				$temp['customer_name'] = $person['customer_name'];
    				$temp['location'] = $person['location'];
    				$temp['lat'] = $burn['latitude'];
    				$temp['lng'] = $burn['longitude'];
    				$temp['intensity'] = $burn['intensity'];
    				$temp['status'] = $burn['status'];

    				array_push($data, $temp);

    				break;
    			}
    		}
    	}

    	return view('admin.fire_location')->with('data',$data);

    }
    
}
