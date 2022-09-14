<?php

use Illuminate\Support\Facades\Route;

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
    $data =['hello' => 'Hello world']; // IL SECONDO PARAMERTO DEVE ESSERE UN ARRAY ASSOCIATIVO 
    return view('home', $data );
});
Route::get('/contatti', function () {
    return view('/contatti.contatti');
});
Route::get('/cose', function () {
    return view('/cose.cose');
});
Route::get('/info', function () {
    return view('/info.info');
});
