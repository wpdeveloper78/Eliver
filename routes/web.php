<?php

use App\Models\Album;
use App\Models\Photo;
use App\User;
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

Route::get('/albums', function(){
    return Album::all();
});

Route::get('/photos', function(){
    return Photo::all();
});

Route::get('/users', function(){
    return User::all();
});
