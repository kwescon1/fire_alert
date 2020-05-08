<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //old method
    // public function initDB() {
    // 	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FireguardKey.json');
    //     $firebase = (new Factory)
    //     ->withServiceAccount($serviceAccount)->withDatabaseUri('https://fireguard-6b234.firebaseio.com/')
    //     ->create();

    //     $database = $firebase->getDatabase();

    //     return $database;
    // }

    public function initDB(){
    	//new method
    	$firebase = (new Factory)->withServiceAccount(__DIR__.'/FireguardKey.json');
    	$database = $firebase->createDatabase();

    	return $database;
    }
}
