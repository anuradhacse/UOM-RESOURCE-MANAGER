<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('demo', function () {
    return view('test');
});

Route::get('users', function () {
    $users=\App\User::All();//select * from users
    return view('userhome')->with('blogger',$users);
});

Route::get('profile/{id}', function ($uid) {
$user=\App\User::find($uid);
    return view('profile')->with('user',$user);
});

Route::get('blogdetail/{id}', function ($blogid) {
    $blog=\App\Blog::find($blogid);
    return view('blogdetails')->with('blogs',$blog);
});

Route::post('/signup',array('as'=>'signup','before'=>'csrf','uses'=>'AuthController@userSignup'));
Route::post('/signin',array('as'=>'signin','before'=>'csrf','uses'=>'AuthController@userSignin'));
Route::get('home',array('as'=>'home','before'=>'auth','uses'=>'HomeController@getHome'));

Route::get('vehicle','Front@vehicle');
Route::get('freeVehicle','Front@freeVehicle');
Route::get('bookingSuccess','Front@reservation');

Route::get('viewRoom','Front@viewRoom');
Route::get('viewLab','Front@viewLab');
Route::get('viewVehicle','Front@viewVehicle');


