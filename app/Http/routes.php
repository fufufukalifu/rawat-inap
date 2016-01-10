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

Route::get('ruangan','RuanganController@tampil_ruangan');

Route::get('update_pendaftaran', 'HomeController@update_pendaftaran');

Route::get('pendaftaran','HomeController@daftar_pasien');

Route::get('jenisRuangan', 'HomeController@tampil_jenis_ruangan');

// Route::get('aziz2', 'HomeController@update_pendaftaran');

Route::get('obat', 'HomeController@tampil_obat');

// Route::get('opik2', 'HomeController@update_pendaftaran');

// Route::get('auth/login', 'Auth\AuthController@getLogin');

// Route::get('Enur', 'HomeController@update_pendaftaran');

// Route::get('anggi', 'HomeController@update_pendaftaran');

// Route::get('anggi', 'HomeController@update_pendaftaran');

// Route::get('didik', 'HomeController@update_pendaftaran');

// Route::get('didik2', 'HomeController@update_pendaftaran');

Route::get('form', 'PendaftaranController@form');

Route::post('tambah', 'PendaftaranController@tambah');

Route::post('update', 'PendaftaranController@updates');

Route::get('DeletePasien/{id}', 'PendaftaranController@delete');

Route::get('EditPasien/{id}', 'PendaftaranController@edits');
 
Route::get('ruangan1','PendaftaranController@tampil_ruangan');

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');





