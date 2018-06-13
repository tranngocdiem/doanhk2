<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham as sanpham;
use App\loaisanpham as loaisanpham;
use App\banggia as banggia;
use App\hinhanh as hinhanh;
use App\chuongtrinhkhuyenmai as chuongtrinhkhuyenmai;
use App\chude as chude;
use App\chude_loaisanpham as chude_loaisanpham;
class Quanlysanphamcontroller extends Controller
{
    public function Index()
    {
    	return view('Admin._layoutadmin');
    }
    public function Gettatcathongtinsanpham()
    {
    	$sanpham = DB::table('sanpham')->where('isDeleted','0')->orderBy('tensp', 'asc')->get();
    	$chude = DB::table('chude')->where('isDeleted','0')->orderBy('tencd', 'asc')->get();
    	$khuyenmai = DB::table('chuongtrinhkhuyenmai')->where('isDeleted','0')->orderBy('tenkm', 'asc')->get();
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
        
        
    	return view('Admin.quanlysanpham',['sanpham'=>$sanpham,'chude'=>$chude,'khuyenmai'=>$khuyenmai,'loaisanpham'=>$loaisanpham]);
    }
    public function Themsanpham()
    {
        
    	$Param = array_merge($_POST,$_GET);
    	if(isset($Param['info']))
    	{
    		$info = $Param['info'];

    		$id = DB::table('sanpham')->insertGetId(
    			['tensp' => $info['tensp'], 'mamau' => $info['mamau']]
			);
            if($id!=null)
            {
               $listsanpham = DB::table('sanpham')->where('isDeleted','0')->orderBy('tensp', 'asc')->get();
               return json_encode($listsanpham);
            }
            else return '0';
	
    	}

    	else return '0';
    }

    public function Themkhuyenmai()
    {
        $Param = array_merge($_POST,$_GET);
        if(isset($Param['infokhuyenmai']))
        {
            $khuyenmai = $Param['infokhuyenmai'];

            $id = DB::table('chuongtrinhkhuyenmai')->insertGetId(
                ['tenkm' => $khuyenmai['tenkm'], 'ngaybatdau' => $khuyenmai['ngaybatdau'], 'ngayketthuc' => $khuyenmai['ngayketthuc'], 'discount' => $khuyenmai['discount']]
            );
            if($id!=null)
            {
               $listkhuyenmai = DB::table('chuongtrinhkhuyenmai')->where('isDeleted','0')->orderBy('tenkm', 'asc')->get();
               return json_encode($listkhuyenmai);
            }
            else return '0';
    
        }

        else return '0';
    }
    public function Themchude()
    {
        $tenchude = $_POST['tenchude']; 
        if(isset($tenchude))
        {
            $id = DB::table('chude')->insertGetId(['tencd'=>$tenchude]);
            if($id!=null)
            {
                $listchude = DB::table('chude')->where('isDeleted','0')->orderBy('tencd', 'asc')->get();
                return json_encode($listchude);
            }
            else return '0';
        }
        return '0';

    }

    public function Themthongtinloaisanpham()
    {
        $Param = array_merge($_POST,$_GET);
        if(isset($Param['info']))
        {
            $info = $Param['info'];
            $loaisanpham = new loaisanpham();
            $loaisanpham->tenloai = $info['tenloai'];
            $loaisanpham->mota = $info['mota'];
            $loaisanpham->masp = $info['masp'];
            if($loaisanpham->save())
               {
                    $maloai = loaisanpham::orderBy('maloai', 'desc')->first()->maloai;
                    //thêm hình ảnh
                    $hinhanh = new hinhanh();
                    $hinhanh->maloai = $maloai;
                    $hinhanh->url = $info['url'];
                    /*thêm bảng giá*/
                    $banggia = new banggia();
                    $banggia->gia = $info['gia'];
                    $banggia->maloai = $maloai;
                    $banggia->makm = $info['makm'];
                    //thêm vào bảng chude_loaisanpham
                    $chude_loaisanpham = new chude_loaisanpham();
                    $chude_loaisanpham->macd = $info['macd'];
                    $chude_loaisanpham->maloai = $maloai;

                    if($hinhanh->save() and $banggia->save() and $chude_loaisanpham->save())
                        return '1';
                    else return '0';
               }
            else return '0';
            

        }
        else return '0';
    }

}




