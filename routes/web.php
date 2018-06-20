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

Route::group(['prefix'=>'admin'],function(){
    Route::any('/','Quanlysanphamcontroller@Index');
    Route::any('/qlsp','Quanlysanphamcontroller@Gettatcathongtinsanpham');
    Route::any('/themsp','Quanlysanphamcontroller@Themsanpham');
    Route::any('/themkm','Quanlysanphamcontroller@Themkhuyenmai');
    Route::any('/themcd','Quanlysanphamcontroller@Themchude');
    Route::any('/themthongtinloai','Quanlysanphamcontroller@Themthongtinloaisanpham');
    Route::get('/qlsp/ajax',function(){
        $loaisanpham = DB::table('loaisanpham')
                                     ->join('sanpham','sanpham.masp','=','loaisanpham.masp')
                                     ->join('chude_loaisanpham','chude_loaisanpham.maloai','=','loaisanpham.maloai')
                                     ->join('chude','chude.macd','=','chude_loaisanpham.macd')
                                     ->join('hinhanh','hinhanh.maloai','=','loaisanpham.maloai')
                                     ->join('banggia','banggia.maloai','=','loaisanpham.maloai')
                                     ->join('chuongtrinhkhuyenmai','chuongtrinhkhuyenmai.makm','=','banggia.makm')
                                     ->where('hinhanh.isDeleted',0)
                                     ->where('banggia.isDeleted',0)
                                     ->orderBy('loaisanpham.maloai','asc')
                                     ->paginate(10);
        return View::make('Admin.phantrang')->with('loaisanpham',$loaisanpham)->render();
    });


  /*  Route::any('/qlsp',)*/

});



Route::group(['prefix'=>'account'],function(){
	Route::any('/checkusername','AccountController@Checkusername');
	Route::any('/register','AccountController@Register');
    Route::any('/login','AccountController@Login');
    Route::any('/logout','AccountController@Logout');
    Route::any('/info','AccountController@Getinformationacc');
	Route::any('/demgiohang','Cartcontroller@Demsoluonggiohang');
    Route::any('/thongtingiohang','Cartcontroller@Thongtingiohang');
    Route::any('/themsoluong','Cartcontroller@Themsoluongmotsanphamvaogio');
    Route::any('/giamsoluong','Cartcontroller@Giamsoluongmotsanphamvaogio');
    Route::any('/xoasp','Cartcontroller@Xoamotsp');
    Route::any('/dathang', function () {
    return view('Sanpham.dathang');

});
    Route::any('/dathang/xacnhan','Cartcontroller@Xacnhandonhang');
    Route::any('/donhangcuatoi','Cartcontroller@Thongtindonhang');
});

Route::group(['prefix' => 'sanpham'], function(){
    Route::any('/','Sanphamcontroller@Index');
    Route::any('/getloaisp/{macd}/{masp}', 'Sanphamcontroller@Getsanphamtheoloai');
    Route::any('/chitietsanpham/{maloai}','Sanphamcontroller@Getthongtinsanpham');
    Route::any('/themvaogiohang','Cartcontroller@Themvaogiohang');
}

);