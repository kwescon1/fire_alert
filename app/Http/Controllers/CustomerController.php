<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function registerDevice(Request $request){
    	// return $request->device_id;
    	$database = $this->initDB() ;

        $data = $database->getReference('customer')->getSnapshot()->getValue(); 

        if(!$data){//checking if $data is empty
            $data = $database->getReference('customer')->push([
                'device_id' => $request->device_id,
                'customer_name' => $request->customer_name,
                'mobile_number' => $request->mobile_number,
                'location' => $request->location,
            ]);

            return redirect()->back()->with('success', 'Device Registered Successfully. Thank you');
        }else{
                foreach($data as $item){
                if($item['device_id'] == $request->device_id){
                    return redirect()->back()->with('failure','Registration Unsuccessful. ID already exists');
                }else{

                    $data = $database->getReference('customer')->push([
                    'device_id' => $request->device_id,
                    'customer_name' => $request->customer_name,
                    'mobile_number' => $request->mobile_number,
                    'location' => $request->location,
                ]);
            
                return redirect()->back()->with('success', 'Device Registered Successfully. Thank you'); 
                }    
            } 
        }
    }

    public function fireInfo(){
        $database = $this->initDB();

        $data = $database->getReference('fireinfo')->push([
            'device_id' => "2",
            'intensity' => "15",
            'longitude' => "-0.0305",
            'latitude' => "5.7748",
            'status' => "Fire"

        ]);

        return "data entered successfully";
    }
}
