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
    return "<h1>Hello World</h1> aggiungi la parola giorgio nella url";
});

Route::get('/giorgio', function () {
    return "<h1>Ciao sono Giorgio Monne</h1>";
});

