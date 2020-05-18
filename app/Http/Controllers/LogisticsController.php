<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistic;

class LogisticsController extends Controller
{
    //
    

    public function logistic(){
    	//using helper
    	
    	$user = auth()->user()->id;

   
    		$logistic = new Logistic;

	    	$logistic->firestationid = $user;
	    	$logistic->water_volume = rand(2700,3785);
	    	$logistic->fire_extinguisher = rand(5,15);
	    	$logistic->fire_trucks = "5";
	    	$logistic->number_of_persons = rand(0,10);

	    	$logistic->save();

	    	$str = "Logistics updated successfully";
	    	return $str;
    	}

    public function details(){
    	$user = auth()->user()->id;
    	$logistic = Logistic::where('firestationid',$user)->get();
		
    	if(isset($logistic)){
    		return view('admin.logistics')->with('logistic',$logistic);
    	}
    }

    //in writing a query always take the last tuple (row)
}