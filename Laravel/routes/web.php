<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hi! Selamat Datang di Website Laravel";
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/world', [WelcomeController::class, 'hello']);

Route::get('/siswa', function () {});
Route::post('/siswa', function () {});
Route::put('/siswa', function () {});
Route::delete('/siswa', function () {});

Route::get('/siswa/{id}', function ($id) {});
Route::put('/siswa/{id}', function ($id) {});
Route::delete('/siswa/{id}', function ($id) {});

Route::get('/a', function (){
    echo "Hi! Selamat datang di Website Laravel";
});
Route::get('/about', function () {
    echo "NIM: 25982<br>";
    echo "Nama: Diana Pramudita<br>";
    echo "Kelas: XI-RPB<br><br>";

    echo "NIM: 26006<br>";
    echo "Nama: Mutia Izza M.<br>";
    echo "Kelas: XI-RPB";

    echo "Nim: ";
});

Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID: " . $id;
});

Route::get('/hellow', [WelcomeController::class, 'hello']); 

Route::get('/profil', function(){
    return view('child');
});
Route::get('/profile', function(){
    return view('child');
});
Route::get('/home', function () {
    return view('home');
});