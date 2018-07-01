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


Route::get('/getListsanpham',array('as'=>'getListsanpham','uses'=>'Sanphamcontroller@getListsanpham'));

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
    Route::any('/xoaloaisanpham','Quanlysanphamcontroller@Xoaloaisanpham');
    Route::any('/qlddh','Quanlydonhangcontroller@Thongtindondathang');
    Route::get('/qlddh/ajax',function(){
        $dondathang = DB::table('dondathang')
                      ->join('taikhoan', 'taikhoan.matk','=', 'dondathang.matk')
                      ->join('thongtincanhan','thongtincanhan.mattcn','=','taikhoan.mattcn')
                      ->orderBy('dondathang.ngaydat','desc')
                      ->paginate(10);
        return View::make('Admin.phantrang')->with('dondathang',$dondathang)->render();
    });
     Route::any('/qlddh/thaydoi','Quanlydonhangcontroller@Thaydoitrangthaidonhang');
     Route::any('/quanlytaikhoan','Quanlytaikhoancontroller@Thongtintaikhoan');
     Route::get('/quanlytaikhoan/ajax',function(){
        $taikhoan = DB::table('taikhoan')
                    ->join('thongtincanhan','thongtincanhan.mattcn','taikhoan.mattcn')
                    ->paginate(10);
        return View::make('Admin.phantrang')->with('taikhoan',$taikhoan)->render();
    });
     Route::any('/themtaikhoan','Quanlytaikhoancontroller@Register');

     Route::any('/thongkedoanhthu','Thongkecontroller@Thongkedoanhthutheothang');
     Route::any('/thongkedonhang','Thongkecontroller@Thongketinhtrangdonhang');
     Route::any('/thongkesanpham','Thongkecontroller@Thongkesoluongsanpham');
     Route::any('/tkdt', function () {
    return view('Admin.thongkedoanhthu');   
    });
     Route::any('/tkdh', function () {
    return view('Admin.thongkedondathang');
    });
     Route::any('/tksp','Thongkecontroller@Indexthongkesp');
     Route::get('/tksp/ajax',function(){
        $mamau = $_GET['mamau'];
        $datefrom = $_GET['datefrom'];
        $dateto = $_GET['dateto'];
        $loaisanpham = DB::table('loaisanpham')
                           ->select('loaisanpham.maloai', DB::raw('SUM(chitietdonhang.soluong) as tong'))
                           ->join('sanpham','sanpham.masp','=','loaisanpham.masp')
                           ->join('mausanpham','mausanpham.mamau','=','sanpham.mamau')
                           ->join('chitietdonhang','chitietdonhang.maloai','loaisanpham.maloai')
                           ->join('dondathang','dondathang.maddh','chitietdonhang.maddh')
                           ->where('mausanpham.mamau',$mamau)
                           ->whereRaw('MONTH(dondathang.ngaydat) >= MONTH(?)',$datefrom)
                           ->whereRaw('MONTH(dondathang.ngaydat) <= MONTH(?)',$dateto)
                           ->groupBy('loaisanpham.maloai')
                           ->orderByRaw('SUM(chitietdonhang.soluong) desc')
                           ->paginate(20);
        return View::make('Admin.phantrangthongke')->with('loaisanpham',$loaisanpham)->render();
    });


});
Route::any('/tkdt','Thongkecontroller@Thongkedoanhthutheothang');


Route::group(['prefix'=>'account'],function(){

	Route::any('/checkusername','AccountController@Checkusername');
	Route::any('/register','AccountController@Register');
    Route::any('/login','AccountController@Login');
    Route::any('/logout','AccountController@Logout');
    Route::any('/checkpassold','AccountController@Checkpasswordold');
    Route::any('/checkuniqueusername','AccountController@Getusername');
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
    Route::any('/sanphambanchay','Sanphamcontroller@Getsanphambanchay');
}

);