<?php

use App\Http\Resources\UserCollection;
use App\User;
use App\Profile;
use App\Follow;
use App\Activities;
use App\Kudos;


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


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return new UserCollection(User::all());
// });

// Route::get('/profiles', function () {
//     return new UserCollection(Profile::all());
// });

// Route::get('/follows', function () {
//     return new UserCollection(Follow::all());
// });

// Route::get('/activities', function () {
//     return new UserCollection(Activities::all());
// });

// Route::get('/kudos', function () {
//     return new UserCollection(Kudos::all());
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
