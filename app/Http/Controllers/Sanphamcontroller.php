<?php

namespace App\Http\Controllers;
use App\chude as chude;
use App\loaisanpham as loaisanpham;
use App\sanpham as sanpham;
use App\mausanpham as mausanpham;
use App\chude_loaisanpham as chude_loaisanpham;

use Illuminate\Http\Request;

class Sanphamcontroller extends Controller
{
	//Lấy loại sản phẩm theo sản phẩm của từng chủ đề
	public function Getsanphamtheoloai($macd,$masp)
	{

		
               
			    $sqlquery = 'SELECT DISTINCT loaisanpham.*,hinhanh.url
				FROM chude_loaisanpham join loaisanpham on loaisanpham.maloai = chude_loaisanpham.maloai join hinhanh on hinhanh.maloai = loaisanpham.maloai
				WHERE chude_loaisanpham.macd ='.$macd.' AND loaisanpham.masp ='.$masp.' and hinhanh.isDeleted = 0';
				$results = DB::SELECT($sqlquery);
                if($results!=null)
                {
                    return view('sanpham.viewsanpham',['results'=>$results]);
                }
            }
            return false;
	}
	
}
