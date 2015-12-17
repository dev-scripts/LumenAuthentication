<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Hash;

$app->get('/','AuthController@index');
$app->post('login','AuthController@postLogin');
$app->get('logOut','AuthController@getLogout');


$app->get('dashboard','DashboardController@index');



$app->get('test', function () use ($app) {
    //return env('APP_KEY');
    return Hash::make('prakash');
});