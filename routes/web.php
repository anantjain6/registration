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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('workshop');
});


Route::post('/register', 'RegisterController@register');
Route::post('/verify', 'RegisterController@verify');
Route::get('{any?}', function() {
    return Redirect::to('http://hackncs.com');
});
