<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengunjung', 'HomeController@daftar_pengunjung');
<<<<<<< HEAD
Route::get('ruangan','HomeController@tampil_ruangan');
=======

Route::get('update_pendaftaran', 'HomeController@update_pendaftaran');
>>>>>>> 3467b1db61122f09d4f86bda285c4daefd2fde1b
