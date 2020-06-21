<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


// Route::get('/test', 'FirebaseController@index');
Route::post('register_device','CustomerController@registerDevice');


// Route::get('/test', 'FirebaseController@index');

Route::get('/', function () {
	    return view('welcome');
	});

//using middleware
Route::middleware(['auth'])->group(function(){

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/usermap','MapController@map');

	Route::get('/logistics','LogisticsController@details');

	Route::get('/resource_used', function () {
	    return view('admin.resource_used');
	});


	Route::get('fire_alert_info','FireAlertController@fireInfo');

	Route::get('logdetails','LogisticsController@logistics');

	Route::get('/map/{lng}/{lat}/{loc}','FireAlertController@map');

});

Route::get('fire','CustomerController@fireInfo');
Route::get('check','Controller@data');

