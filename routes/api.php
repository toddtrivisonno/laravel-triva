<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', 'UserController@index');

Route::get('/profiles', 'ProfileController@index');

Route::get('/follows', 'FollowController@index');

Route::get('/activities', 'ActivitiesController@index');

Route::get('/kudos', 'KudosController@index');
