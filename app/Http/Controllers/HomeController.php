<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistic;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $database = $this->initDB();

        $firecount = count($database->getReference('fireinfo')->getSnapshot()->getValue());

        $customercount = count($database->getReference('customer')->getSnapshot()->getValue());

        $usercount = User::latest()->count();

        $user = auth()->user()->id;

        $logistics = Logistic::where('firestationid',$user)->orderBy('created_at','DESC')->first();  

        return view('admin.dashboard', compact('firecount','customercount','usercount','logistics'));  
    }
}
