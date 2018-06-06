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
Route::get('/ctsp', function () {
    return view('Sanpham.chitietsp');
});

Route::get('/giohang', function () {
    return view('Sanpham.giohang');
});

Route::group(['prefix'=>'account'],function(){
	Route::any('/checkusername','AccountController@Checkusername');
	Route::any('/register','AccountController@Register');
    Route::any('/login','AccountController@Login');
    Route::any('/logout','AccountController@Logout');
	
});

Route::group(['prefix' => 'sanpham'], function(){
    Route::any('/','Sanphamcontroller@Index');
    Route::any('/getloaisp/{macd}/{masp}', 'Sanphamcontroller@Getsanphamtheoloai');
    Route::any('/chitietsanpham/{maloai}','Sanphamcontroller@Getthongtinsanpham');
}

);