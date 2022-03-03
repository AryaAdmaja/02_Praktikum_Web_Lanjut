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

Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('about', function () {
    return "2041720104 <br> Arya Admaja <br> TI-2C";
});
Route::get('articles/{id}', function ($id) {
    return "Ini Merupakan Halaman Artikel Dengan  $id";
});
