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

Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/about', function () {
    return view('site.about');
})->name('site.about');

Route::get('/contacts', function () {
    return view('site.contacts');
})->name('site.contacts');

