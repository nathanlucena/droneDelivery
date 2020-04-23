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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/sobre', function () {
    return view('sobre_nos');
})->name('sobre_nos');

Route::get('/restaurantes', function () {
    return view('restaurantes');
})->name('restaurantes');

Route::get('/duvidas', function () {
    return view('duvidas');
})->name('duvidas');

Route::get('/registro', function (){
	return view ('registro');
});