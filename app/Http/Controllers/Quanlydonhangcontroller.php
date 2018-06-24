<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	

class Quanlydonhangcontroller extends Controller
{
    public function Thongtindondathang()
    {
    	$dondathang = DB::table('dondathang')
    				  ->join('taikhoan', 'taikhoan.matk','=', 'dondathang.matk')
    				  ->join('thongtincanhan','thongtincanhan.mattcn','=','taikhoan.mattcn')
    				  ->orderBy('dondathang.ngaydat','desc')
    				  ->paginate(10);
    	return view('Admin.quanlydondathang',['dondathang'=>$dondathang]);
    } 

    public function Thaydoitrangthaidonhang()
    {
    	$Param = array_merge($_POST,$_GET);
    	if(isset($Param['info']))
    	{
    		$info = $Param['info'];
    		DB::table('dondathang')
    			->where('dondathang.maddh',$info['madonhang'])
    			->update(['trangthai'=>$info['trangthai']]);
    		$check = DB::table('dondathang')
    			     ->where('dondathang.maddh',$info['madonhang'])
    			     ->where('dondathang.trangthai',$info['trangthai'])
    			     ->get();
    	    if(count($check) > 0)
    	    {
    	    	return $info['trangthai'];
    	    }
    	    else return 'false';

    	}

    	return 'false';

    }
}
