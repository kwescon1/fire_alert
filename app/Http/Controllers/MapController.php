<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;

class MapController extends Controller
{
    //
    public function map(){
    
        $data = [];
        $d['user_lat'] = auth()->user()->latitude;
        $d['user_lng'] = auth()->user()->longitude;
        $d['user_name'] = auth()->user()->name;
        
        array_push($data, $d);

        // return $data;

        foreach ($data as $key) {
            JavaScript::put([
            'user_lat' => $key['user_lat'],
            'user_lng' => $key['user_lng'],
            'user_name' => $key['user_name']
            ]);
        }

        return view('admin.usermap');
    }
}
