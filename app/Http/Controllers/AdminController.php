<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Logistic;

// class AdminController extends Controller
// {

//     protected $client;


//     public function __construct() {
//         $this->middleware('auth');
//     }

//     public function dashboard(){

//         $user = auth()->user()->id;

//         $logistics = Logistic::where('firestationid',$user)->orderBy('created_at','DESC')->first();

        
//             return view('admin.dashboard')->with('logistics',$logistics);
        
        
//     }
// }
