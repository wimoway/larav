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
    return view('welcome');
})->name('welcome');

Route::get('/main', function() {
    return view('main');
})->name('main');

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');

Route::get('/requests', function() {
    return view('requests');
})->name('requests');

Route::post('/requests/submit', function() {
    return redirect()->route('welcome');
})->name('request-form');
