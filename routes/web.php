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
    return view('welcome');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/detail-layanan', function () {
    return view('detail-layanan');
});

Route::get('/download-persyaratan', function () {
    return view('download-persyaratan');
}); 

Route::get('/footercoba', function () {
    return view('footercoba');
}); 