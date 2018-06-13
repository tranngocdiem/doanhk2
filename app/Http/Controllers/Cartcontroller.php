<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
	function Themvaogiohang()
	{
		
        if($this->Checklogin()==0) /*kiểm tra đăng nhập hay chưa*/
			return '-1';
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
			        	DB::table('chitietdonhang')->insert(['maddh' => $result[0]->maddh, 'maloai' => $info['maloai'],'soluong'=>1, 'gia'=>$info['gia']);

			        }
			        /*đếm có bao nhiêu số lượng sản phẩm trong giỏ hàng*/
			        

			     }
			     /*Nếu không có đơn hàng nào thì tạo đơn hàng mới và thêm loại sản phẩm vào đơn hàng đó*/
			     else
			     {
			     	$dateNow = new DateTime(date('Y-m-d'));
			     	 $iddondathang = DB::table('dondathang')->insertGetId(
    			     ['ngaydat' => $dateNow , 'matk' => $id]
			         );
			         DB::table('chitietdonhang')->insert(['maddh' => $iddondathang, 'maloai' => $info['maloai'],'soluong'=>1, 'gia'=>$info['gia']);
			         return '1';

			     }


		}
		return '0';
	}
	          
}
}
