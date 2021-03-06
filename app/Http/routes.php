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
    return view('home');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/tweet', function()
{
    return view('tweet.form');
   // return Twitter::postTweet(array('status' => 'Tweet sent using Laravel and the Twitter API!', 'format' => 'json'));
});

Route::post('/tweet/post', array('uses'=>'TweetController@postTweet'));