<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
	//Lấy loại sản phẩm theo mã
	public function Getloaisanpham()
	{
		$maloai=$_GET['maloai']
		$sqlquery = 'SELECT DISTINCT loaisanpham.*,hinhanh.url
				FROM banggia join loaisanpham on loaisanpham.maloai = banggia.maloai join hinhanh on hinhanh.maloai = loaisanpham.maloai
				WHERE loaisanpham.maloai ='.$maloai.' and hinhanh.isDeleted = 0';
				$results = DB::SELECT($sqlquery);
		return view('Sanpham.giohang',['results'=>$results]);         
    }            
}
?>