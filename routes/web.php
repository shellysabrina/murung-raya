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


//publik

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/pajak-perdesaan', function () {
    return view('pajak-perdesaan');
});

Route::get('/objek', function () {
    return view('objek');
});



//admin

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});
