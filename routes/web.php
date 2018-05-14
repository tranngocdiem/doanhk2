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
    return view('Home.home');
});
Route::get('/sp', function () {
    return view('Sanpham.sanpham');
});
Route::get('/login', function () {
    return view('Taikhoan.login');
});

Route::get('/re', function () {
    return view('Taikhoan.register');
});

Route::get('/ad', function () {
    return view('Admin._layoutadmin');
});

Route::get('/ctsp', function () {
    return view('Sanpham.chitietsp');
});

Route::get('/giohang', function () {
    return view('Sanpham.giohang');
});