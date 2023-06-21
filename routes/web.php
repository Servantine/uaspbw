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

Route::get('/', 'pagecontroller@sapaan');
Route::get('/simpanuser', 'pagecontroller@simpanuser');
Route::get('/x', 'pagecontroller@form');
Route::get('/tampil', 'pagecontroller@tampil');
Route::get('/sapaan', 'pagecontroller@sapaan');
;
