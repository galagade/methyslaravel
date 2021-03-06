<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

$api = app('Dingo\Api\Routing\Router');

Route::group(['middleware' => 'web'], function () {
    Route::auth(); 
    Route::resource('vehicle', 'VehicleController');
    Route::resource('print', 'PrintController');
    Route::get('/', 'HomeController@index');
    
});

$api->version('v1', function($api){
	
	$api->post('auth', '\App\Http\Controllers\ApiController@authenticate');
});
$api->version('v1',['middleware'=> 'api.auth'], function($api){
	$api->get('user', '\App\Http\Controllers\ApiController@index');
	$api->get('users', '\App\Http\Controllers\ApiController@show');
	$api->get('token', '\App\Http\Controllers\ApiController@getToken');
});


