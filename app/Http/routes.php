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

Route::get('ruangan','HomeController@tampil_ruangan');

Route::get('update_pendaftaran', 'HomeController@update_pendaftaran');

// Route::get('aziz', 'HomeController@update_pendaftaran');

// Route::get('aziz2', 'HomeController@update_pendaftaran');

// Route::get('opik', 'HomeController@update_pendaftaran');

// Route::get('opik2', 'HomeController@update_pendaftaran');

// Route::get('Enur', 'HomeController@update_pendaftaran');

// Route::get('Enur', 'HomeController@update_pendaftaran');

// Route::get('anggi', 'HomeController@update_pendaftaran');

// Route::get('anggi', 'HomeController@update_pendaftaran');

// Route::get('didik', 'HomeController@update_pendaftaran');

// Route::get('didik2', 'HomeController@update_pendaftaran');








