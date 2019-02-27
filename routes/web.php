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


// $aaa=App::bind('HelpSpot\API', function ($app) {
//     return new HelpSpot\API($app->make('HttpClient'));
// });

 

 //$val = app()->make('payment2');print_r($val::getFacadeAccessor());
  //$ss=app()->make('App\Http\Controllers\payment')->abc();

$ss=app()->make('App\Http\Controllers\payment')::$ab;
 
//print_r($ss)  ;

// Route::get('/', function () {
//     return view('welcome');
// });



  route::get('/','Payment@abc');
  route::get('redirect/{twitter}','Payment@redirectToProvider');



 route::get('callback','Payment@handleProviderCallback');

 

Route::get('twitter-login','TwitterController@twitterlogin');
Route::get('twitter','TwitterController@twitter');
Route::get('twitter/callback','TwitterController@twittercallback');
route::get('twitter-dashbord','TwitterController@twittertweet');
Route::get('twitter-index','TwitterController@twitterlogin');
//Route::get('twitter-tweet','TwitterController@twittertweet');
route::post('twitter-post','TwitterController@twittertweetpost');
