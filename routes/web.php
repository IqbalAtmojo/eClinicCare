<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landingpage')->name('landingpage');
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/dokter', 'dokter')->name('dokter');
Route::view('/artikel', 'artikel')->name('artikel');
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/daftar', 'daftar')->name('daftar');
Route::view('/masuk', 'masuk')->name('masuk');


