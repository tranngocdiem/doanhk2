<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Illuminate\Notifications\Messages\MailMessage;
use App\chitietdonhang as chitietdonhang;

class Cartcontroller extends Controller
{
	function Themvaogiohang()
	{
		 /*kiểm tra đăng nhập hay chưa*/
        if($this->Checklogin()==0)
        {
        	return '-1';
        }
			
		else
		{
		 $Param = array_merge($_POST,$_GET); 
		 if (isset($Param['thongtindathang'])) {
                $info = $Param['thongtindathang'];
			    $id = session('id');
			    //kiểm tra có đơn hàng nào đang trong giỏ hàng hay không
			    $result = DB::table('dondathang')
					->where('dondathang.trangthai',0)
					->where('dondathang.matk',$id)
					->get();
			     if(count($result)>0)
			     {
			     	//kiểm tra có tồn tại sản phẩm này trong giỏ hàng chưa
			     	$checksp = DB::table('chitietdonhang')
			     			   ->where('chitietdonhang.maloai',$info['maloai'])
			     			   ->where('chitietdonhang.maddh',$result[0]->maddh)
			     			   ->get();
			     	//Nếu có thì tăng số lượng của loại sản phẩm đó không thì tạo chi tiết đơn hàng mới.
			        if(count($checksp)>0)
			        {
			        	DB::table('chitietdonhang')
			        	->where('chitietdonhang.maloai',$info['maloai'])
			     		->where('chitietdonhang.maddh',$result[0]->maddh)->increment('chitietdonhang.soluong', 1);

			        }
			        else
			        {
			        	/*DB::table('chitietdonhang')->insert(
			        		['maddh' => $result[0]->maddh, 'maloai' => $info['maloai'],'soluong'=>1, 'gia'=>$info['gia']
			        	);*/
			        	$chitietdonhangnew = new chitietdonhang();
			        	$chitietdonhangnew->maddh = $result[0]->maddh;
			        	$chitietdonhangnew->maloai = $info['maloai'];
			        	$chitietdonhangnew->gia = $info['gia'];
			        	$chitietdonhangnew->soluong = 1;
			        	if(!$chitietdonhangnew->save()) 
			        		return '0';


			        }
			        /*đếm có bao nhiêu số lượng sản phẩm trong giỏ hàng*/
			        $count = DB::table('chitietdonhang')
                     ->where('chitietdonhang.maddh', '=',$result[0]->maddh)
                     ->sum('chitietdonhang.soluong');
                    return $count;

			     }
			     /*Nếu không có đơn hàng nào thì tạo đơn hàng mới và thêm loại sản phẩm vào đơn hàng đó*/
			     else
			     {
			     	/*$dateNow = new DateTime(date('Y-m-d'));*/
			     	 $iddondathang = DB::table('dondathang')->insertGetId(
    			     ['matk' => $id]
			         );
			         /*DB::table('chitietdonhang')->insert(['maddh' => $iddondathang, 'maloai' => $info['maloai'],'soluong'=>1, 'gia'=>$info['gia']);*/
			           $chitietdonhangnew = new chitietdonhang();
			        	$chitietdonhangnew->maddh = $iddondathang;
			        	$chitietdonhangnew->maloai = $info['maloai'];
			        	$chitietdonhangnew->gia = $info['gia'];
			        	$chitietdonhangnew->soluong = 1;
			        	if(!$chitietdonhangnew->save()) return '0';
			        	else
			        	{
			        		$count = DB::table('chitietdonhang')
		                     ->where('chitietdonhang.maddh', '=',$iddondathang)
		                     ->sum('chitietdonhang.soluong');
		                    return $count;
			        	}


			     }

			   


		}
		else 
			return '0';
	}
	          
}

	function Demsoluonggiohang()
	{
		 
		 if (isset($_POST['username']))
		 {
		 	$username = $_POST['username'];
		 	$id = DB::table('taikhoan')->where('taikhoan.tentk',$username)->get();
		 	$count = DB::table('chitietdonhang')
		 			 ->join('dondathang','dondathang.maddh','chitietdonhang.maddh')
		 			 ->where('dondathang.matk',$id[0]->matk)
		 			 ->where('dondathang.trangthai',0)
		 			 ->sum('chitietdonhang.soluong');
		 	return $count;

		 }
		 else return 0;
	}

	function Thongtingiohang()
	{
		if(session('id')!=null)
		{
			$id = session('id');
			$giohang = DB::table('chitietdonhang')
					   ->join('dondathang','dondathang.maddh','chitietdonhang.maddh')
					   ->join('loaisanpham','loaisanpham.maloai','chitietdonhang.maloai')
					   ->join('hinhanh','hinhanh.maloai','loaisanpham.maloai')
					   ->where('hinhanh.isDeleted',0)
					   ->where('dondathang.matk',$id)
					   ->where('dondathang.trangthai',0)
					   ->orderBy('chitietdonhang.created_at','asc')
					   ->get();
		    return view('Sanpham.giohang',['giohang'=>$giohang]);
		}
		else  
			return '0';

	}
//Thêm số lượng một sản phẩm vào chitietdonhang
	function Themsoluongmotsanphamvaogio()
	{

		$Param = array_merge($_POST,$_GET);
		if(isset($Param['chitietdh']))
		{
			$chitiet = $Param['chitietdh'];
			DB::table('chitietdonhang')
			    ->where('chitietdonhang.maloai',$chitiet['maloai'])
			    ->where('chitietdonhang.maddh',$chitiet['maddh'])->increment('chitietdonhang.soluong', 1);
			$count = DB::table('chitietdonhang')
		 			 ->where('chitietdonhang.maddh',$chitiet['maddh'])
		 			 ->sum('chitietdonhang.soluong');
		 	return $count;

		}

	}
// Giảm một số lượng sản phẩm vào chitietdonhang
	function Giamsoluongmotsanphamvaogio()
	{

		$Param = array_merge($_POST,$_GET);
		if(isset($Param['chitietdh']))
		{
			$chitiet = $Param['chitietdh'];
			DB::table('chitietdonhang')
			    ->where('chitietdonhang.maloai',$chitiet['maloai'])
			    ->where('chitietdonhang.maddh',$chitiet['maddh'])->decrement('chitietdonhang.soluong', 1);
			$count = DB::table('chitietdonhang')
		 			 ->where('chitietdonhang.maddh',$chitiet['maddh'])
		 			 ->sum('chitietdonhang.soluong');
		 	return $count;

		}

	}

	function Xoamotsp()
	{
		$Param = array_merge($_POST,$_GET);
		if(isset($Param['chitietdh']))
		{
			$chitiet = $Param['chitietdh'];
			DB::table('chitietdonhang')
			    ->where('chitietdonhang.maloai',$chitiet['maloai'])
			    ->where('chitietdonhang.maddh',$chitiet['maddh'])->delete();

			$count = DB::table('chitietdonhang')
		 			 ->where('chitietdonhang.maddh',$chitiet['maddh'])
		 			 ->sum('chitietdonhang.soluong');
		    if($count==0) 
		    {
		    	DB::table('dondathang')->where('dondathang.maddh',$chitiet['maddh'])->delete();
		    	return '0';
		    }
		    else
		 	return $count;

		}
		else return '-1';
	}
}
