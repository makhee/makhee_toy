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

Route::get('/', function () {
    return view('welcome');
});


Route::get('botmsg/{msg}', function ($msg) {
    return '<p>' . $msg . '</p>';
});

Route::get('wellcome', function () {
    return view('welcome');
});