<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\chude as chude;
use App\loaisanpham as loaisanpham;
use App\sanpham as sanpham;
use App\mausanpham as mausanpham;
use App\chude_loaisanpham as chude_loaisanpham;
use App\hinhanh as hinhanh;
use Cookies;


class Sanphamcontroller extends Controller
{

	 public function Index()
      {
      		$results = DB::table('loaisanpham')
      		->join('hinhanh','loaisanpham.maloai','=','hinhanh.maloai')
      		->where('hinhanh.isDeleted','=',0)
      		->orderBy('loaisanpham.maloai','desc')->take(9)->get();
      		return view('Sanpham.sanpham',['newProduct'=>$results]);

      }
	//Lấy loại sản phẩm theo sản phẩm của từng chủ đề
	public function Getsanphamtheoloai($macd, $masp)
	{
				
				
				$results = DB::table('loaisanpham')
						   ->join('chude_loaisanpham','chude_loaisanpham.maloai','loaisanpham.maloai')
						   ->join('hinhanh','loaisanpham.maloai','=','hinhanh.maloai')
						   ->where('masp','=',$masp)
						   ->where('chude_loaisanpham.macd','=',$macd)
						   ->where('hinhanh.isDeleted','=',0)
						   ->select('loaisanpham.*','hinhanh.url')->distinct()->paginate(9);
				
                 return view('Sanpham.sanpham',['results'=>$results]);
                 
                
     }
     public function Getthongtinsanpham($maloai)
     {

      //lấy loại sản phẩm với hình ảnh có trường isdeleted = 0
     	     $results = DB::table('loaisanpham')
      		->join('hinhanh','loaisanpham.maloai','=','hinhanh.maloai')
      		->where('loaisanpham.maloai',$maloai)
      		->where('hinhanh.isDeleted',0)->get();
      // lấy thông tin loại sản phẩm với tất cả hình ảnh của loại sản phẩm đó
      		$results_all = DB::table('loaisanpham')
      		->join('hinhanh','loaisanpham.maloai','=','hinhanh.maloai')
      		->where('loaisanpham.maloai',$maloai)->get();
      //lấy tên sản phẩm của loại sản phẩm đó
          $sanpham = DB::table('sanpham')
           ->where('masp',$results[0]->masp)
           ->get();
      //lấy thông tin sản phẩm liên quan
           $relatedproduct = DB::table('loaisanpham')
          ->join('hinhanh','loaisanpham.maloai','=','hinhanh.maloai')
          ->where('masp',$results[0]->masp)
          ->where('hinhanh.isDeleted',0)->take(8)->get();
      //
      		return view('Sanpham.chitietsp',['results'=>$results,'results_all'=>$results_all,'sanpham'=>$sanpham,'relatedproduct'=>$relatedproduct]);
		
     }


     


     


            
}
	

