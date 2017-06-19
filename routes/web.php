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

Route::get('/','Pages@index');

Route::get('/about', 'Pages@about');
Route::get('/calendar', 'Pages@calendar');
Route::get('/records', 'Pages@records');
Route::get('/contact', 'Pages@contact');
