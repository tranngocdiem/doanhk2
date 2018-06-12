<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham as sanpham;
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
    	return view('Admin.quanlysanpham',['sanpham'=>$sanpham,'chude'=>$chude,'khuyenmai'=>$khuyenmai]);
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
            /*thêm vào bảng loại sản phẩm*/
            $id = DB::table('loaisanpham')->insertGetId(
                ['tenloai' => $info['tenloai'], 'mota' => $info['mota'], 'masp' => $info['masp']]
            );
            //thêm vào bảng chude_loaisanpham
            DB::table('chude_loaisanpham')->insert(['macd'=>$info['macd'],'maloai'=>$id]);
            /*thêm vào bảng bảng giá*/
            $idprice = DB::table('banggia')->insertGetId(['gia'=>$info['gia'], 'maloai'=>$id, 'makm' => $info['makm']]);
            if($idprice!=null)
            {
                return '1';
            }

            else return '0';
            

        }
        else return '0';
    }
}




