<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datetime;

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

    public function Indexthongkesp()
    {
        $sanpham = DB::table('mausanpham')->where('mausanpham.isDeleted',0)->get();
        return view('Admin.thongkesanpham',['sanpham'=>$sanpham]);
    }

    public function Thongkesoluongsanpham()
    {
        $Param = array_merge($_POST,$_GET);
        if(isset($Param['info']))
        {
            $info = $Param['info'];
            $mamau = $info['mamau'];
            $datefrom = $info['datefrom'];
            $dateto = $info['dateto'];
            /*$sqlquery = 'SELECT  l.maloai , SUM(c.soluong) as tong
                        from mausanpham m join sanpham s on m.mamau = s.mamau join loaisanpham l on l.masp = s.masp join chitietdonhang c on c.maloai = l.maloai join dondathang d on d.maddh = c.maddh
                        WHERE m.mamau = '.$mamau.' and MONTH(d.ngaydat) >= MONTH("'.$datefrom.'") and MONTH(d.ngaydat) <= MONTH("'.$dateto.'")
                        GROUP BY  l.maloai order by SUM(c.soluong) desc';
            $loaisanpham = DB::SELECT(DB::raw($sqlquery));*/
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


            return view('Admin.thongkesanpham_table',['loaisanpham'=>$loaisanpham]);
        }
        
    }
}
