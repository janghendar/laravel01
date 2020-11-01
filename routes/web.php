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


// Belajar Route Dasae
Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Selamat Datang di laravel';
});

Route::get('/belajar', function() {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel </p>';

});

Route::get('/mahasiswa/fasilkom/anto', function() {
    echo '<h2 Style = "text-align: center"><u>Welcome Anto</u></h2>';

});

// Route Parameter
Route::get( '/mahasiswa/{nama}', function($nama) {
    return "Tampilkan mahasiswa bernama $nama";

});

// Router dengan beberapa parameter
Route::get( '/stok_barang/{jenis}/{merek}', function($jenis, $merek){
    return "Cetak sisa stok untuk $jenis $merek";

});