<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistic;
use App\User;
use App\Traits\FireAlertControllerTrait;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    use FireAlertControllerTrait;
    public function index()
    {   

        $finalcount = $this->alert();


        $database = $this->initDB();



        $fire = $database->getReference('fireinfo')->getSnapshot()->getValue();


        // $firecount = count($fire);

        $solution = [];
        foreach ($fire as $solve) {
            if ($solve['status'] != "Fire") {
                array_push($solution,$solve);
            }
        }
        // $solved_fire = count($solution);

        $customercount = $database->getReference('customer')->getSnapshot()->getValue();

        $usercount = User::latest()->get();

        $user = auth()->user()->id;

        $logistics = Logistic::where('firestationid',$user)->orderBy('created_at','DESC')->first(); 

        return view('admin.dashboard', compact('fire','customercount','usercount','logistics','finalcount','solution'));  
    }
}
