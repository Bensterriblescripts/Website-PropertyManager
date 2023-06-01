<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Open
Route::get('/', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});


// Authenticated User
Route::get('/home', function () {
    return view('home');
});
Route::get('/listings', function () {
    return view('listings');
});
Route::get('/properties', function () {
    return view('properties');
});