<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FireBaseController extends Controller
{
    //
    public function index()
    {
       
        $database = $this->initDB() ;

        $data = $database->getReference('test')->getSnapshot()->getValue();

        foreach($data as $item){
            echo $item['cat']. " ".$item['title']."<br>";
        }
    }
}
