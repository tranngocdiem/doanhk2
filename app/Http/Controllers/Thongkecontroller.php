<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Thongkecontroller extends Controller
{
	public function Thongkedoanhthutheothang()
	{
		$Param = array_merge($_POST,$_GET);
    	if(isset($Param['date']))
    	{

    		$day = $Param['date'];
    		$datefrom = $day['datefrom'];
    		$dateto = $day['dateto'];
    		$sqlquery = 'SELECT MONTH(d.ngaydat) as thang , SUM(c.gia*c.soluong) as doanhthu
						from dondathang d JOIN chitietdonhang c on d.maddh = c.maddh
						WHERE d.trangthai = 2 and MONTH(d.ngaydat) >= MONTH("'.$datefrom.'") and MONTH(d.ngaydat) <= MONTH("'.$dateto.'")
						GROUP BY  MONTH(d.ngaydat)';
    		$doanhthu = DB::SELECT(DB::raw($sqlquery));
    		return view('Admin.thongkedoanhthu_script',['doanhthu'=>$doanhthu]);
    		
    	}
	}
    
    public function Thongketinhtrangdonhang()
	{
		$Param = array_merge($_POST,$_GET);
    	if(isset($Param['date']))
    	{

    		$day = $Param['date'];
    		$datefrom = $day['datefrom'];
    		$dateto = $day['dateto'];
    		$sqlquery = 'SELECT trangthai, count(*) as soluong
						from dondathang d 
						WHERE MONTH(d.ngaydat) >= MONTH("'.$datefrom.'") and MONTH(d.ngaydat) <= MONTH("'.$dateto.'")
						GROUP BY  trangthai';
    		$donhang = DB::SELECT(DB::raw($sqlquery));
    		return view('Admin.thongkedondathang_script',['donhang'=>$donhang]);
    		
    	}
	}
}
