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

Route::group(['middleware' => ['web']], function () {
    Route::get('/','HomeController@landing');
    Route::get('dashboard','HomeController@dashboard');

    Route::get('login/{id}', 'HomeController@sociallogin');
	Route::get('login/{id}/callback', 'HomeController@socialcallback');
	Route::get('logout', 'HomeController@logout');
	
    Route::post('login', 'HomeController@login');
    Route::post('register', 'HomeController@register');

    Route::get('/rules', 'HomeController@rules');
    Route::get('/leaderboard', 'HomeController@lboard');


    Route::get('/round_overview', 'MainController@roundoverview');
    Route::post('/verifyroundans', 'MainController@verifyroundans');
    Route::post('/verifyans', 'MainController@verifyans');

    Route::get('/myprofile', 'HomeController@myprofile');
    Route::post('/updatepassword', 'HomeController@updatepassword');

/*    Route::get('start','HomeController@start');
    Route::get('/round/{id}','MainController@round');
    Route::get('/round/{rid}/{qid}', 'MainController@showquestion');
    Route::post('/check/{qid}','MainController@quesvalidate');
    Route::post('/round/{id}','MainController@nextround');*/

});
