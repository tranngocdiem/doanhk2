<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\taikhoan as taikhoan;
use App\thongtincanhan as thongtincanhan;

class Quanlytaikhoancontroller extends Controller
{
    public function Thongtintaikhoan()
    {
    	$taikhoan = DB::table('taikhoan')
    				->join('thongtincanhan','thongtincanhan.mattcn','taikhoan.mattcn')
    				->paginate(10);
    	return view('Admin.quanlytaikhoan',['taikhoan'=>$taikhoan]);
    }

    public function Register (){
        
           
            $Param = array_merge($_POST,$_GET); 
            if(isset($Param['info']))
            {
                $user = $Param['info'];
                $countuser =  taikhoan::where([['tentk','=',$user['username']]])->get();
                if(count($countuser) > 0)
                 {
                    return '0';
                 }
                 //Tạo thông tin cá nhân
                $thongtincanhan = new thongtincanhan;
                $thongtincanhan->hoten = $user['name'];
                $thongtincanhan->diachi =$user['address'];
                $thongtincanhan->sdt = $user['telephonenumber'];
                if (!$thongtincanhan->save()) 
                {
                    return '0';
                }
                //Tạo thông tin tài khoản
                $taikhoan = new taikhoan;
                $taikhoan->tentk = $user['username'];
                $taikhoan->matkhau = md5($user['password']);
                $taikhoan->loaitk = $user['loaitk'];
                $taikhoan->mattcn = thongtincanhan::orderBy('mattcn', 'desc')->first()->mattcn;
                if (!$taikhoan->save()) 
                {
                    return '0';
                }
                else
                return '1';

            }
            else return '0';
            
    }
}
