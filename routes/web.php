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


// Route::get('/hello', function () {
//     return 'Selamat Datang di laravel';
// });

Route::get('/belajar', function() {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel </p>';

});

Route::get('/mahasiswa/fasilkom/anto', function() {
    echo '<h2 Style = "text-align: center"><u>Welcome Anto</u></h2>';

});

# Route Parameter
Route::get( '/mahasiswa/{nama}', function($nama) {
    return "Tampilkan mahasiswa bernama $nama";

});

# Router dengan beberapa parameter
Route::get( '/stok_barang/{jenis}/{merek}', function($jenis, $merek){
    return "Cetak sisa stok untuk $jenis $merek";

});

Route::get( '/jumlah/{jenis_hewan}/{nama_hewan}', function($a, $b){
    return "Cetak sisa stok untuk $a $b";

});

# Rute dengann optional parameter

Route::get( '/stok_barang/{jenis?}/{merek?}', 
    function($x = 'smartphone', $y = 'samsung'){
    return "Cetak sisa stok untuk $x $y";

});

# Route parameter dengan regular expression

Route::get('user/{id}', function($id) {
    return "Tampilkan user dengan id = $id";

}) -> where('id', '[0-9]+');

Route::get('user/{id}', function($id) {
    return "Tampilkan user dengan id = $id";

}) -> where('id', '[A-Z]{2}[0-9]+');

# Route Redirect

Route::get( '/hubungi-kami', function() {
    return "<h1>Hubungi Kami</h1>";
});

Route::redirect('/contact-us', '/hubungi-kami');

#Route Group

Route::prefix ('/admin') -> group(function() {

    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa </h1>";
    });

    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen </h1>";
    });

    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan </h1>";
    });

});

# Route Fallback

Route::fallback(function () {
    return "Maaf alamat yang anda cari tidak ditemukan";
});

# Route priority

Route::get('/buku/{a}', function ($a) {
    return "Buku ke $a";
});

Route::get('/buku/{b}', function ($b) {
    return "Buku ke $b";
});

Route::get('/buku/{c}', function ($c) {
    return "Buku ke $c";
});

# Proses Debugging dan Error Display

Route::get('/hello', function () {

    $hello = "Hello World";
    var_dump($hello);
    die();
    return 'Selamat Datang di laravel';
});

Route::get('/hello', function () {

    $hello = "Hello World";
    dd($hello);
    return 'Selamat Datang di laravel';
});

Route::get('/hello', function () {

    $hello = ['Hello World', 2 => ['Hello jakarta', 'Hello Medan']];
    dd($hello);

    return 'Selamat Datang di laravel';
});

Route::get('/hello', function () {

    $hello = ['Hello World', 2 => ['Hello jakarta', 'Hello Medan']];
    dump($hello);

    return $hello;
});

// Route::get('/hello', function () {

//     $hello = ['Hello World', 2 => ['Hello jakarta', 'Hello Medan']];
//     echo '<pre>';
//     print_r($hello);
//     echo '</pre>';
//     die();

//     return $hello;
// });

# Konsep View dan Route

# 1. Menggunakan Return 

Route::get('/mahasiswa', function() {

    $arrMahasiswa = ["Suhendar Aryadi","Muhammad","Annisa","Abdul"];
    return view('universitas.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});

# 2. Menggunakan With

// Route::get('/mahasiswa', function() {

//     $arrMahasiswa = ["Suhendar Aryadi","Muhammad","Annisa","Abdul"];
    
//     return view('universitas.mahasiswa')->with('mahasiswa', $arrMahasiswa);
    
// });

# 3. With dengan chaining (di sambung)

// Route::get('mahasiswa2', function() {
//     return view('universitas.mahasiswa2')
//     ->with('mahasiswa01', 'Risa Lestari')
//     ->with('mahasiswa02', 'Rudi Hermawan')
//     ->with('mahasiswa03','Bambang Kusumo'); 

// });

Route::get('mahasiswa2', function() {
    return view('universitas.mahasiswa2')
    ->withmahasiswa01('Risa Lestari')
    ->withmahasiswa02('Rudi hermawan')
    ->withmahasiswa03('Bambang Kusumo');

});

# Fungsi Compact

// Route::get('/mahasiswa', function() {

//     $mahasiswa01 = 'Risa Lestari';
//     $mahasiswa02 = 'Rudi Hermawan';
//     $mahasiswa03 = 'Bambang Kusumo';
//     $mahasiswa04 = 'Lisa Permata';

//     return view ('universitas.mahasiswa', compact("mahsiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
// });

// Route::get('/mahasiswa', function() {

//     $mahasiswa01 = 'Risa Lestari';
//     $mahasiswa02 = 'Rudi Hermawan';
//     $mahasiswa03 = 'Bambang Kusumo';
//     $mahasiswa04 = 'Lisa Permata';

//     return view ('universitas.mahasiswa')->with(compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
// });


# Latihan Membuat View

// Route::get('mahasiswa/{nama}/{umur}/{kotaAsal}', function($nama, $umur, $kotaAsal) {
//     return view ('universitas.mahasiswa')
//     ->with('nama', $nama)
//     ->with('umur', $umur)
//     ->with('kotaAsal', $kotaAsal);

// });

