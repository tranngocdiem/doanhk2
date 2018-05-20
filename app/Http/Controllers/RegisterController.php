<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taikhoan as taikhoan;
use App\thongtincanhan as thongtincanhan;


class RegisterController extends Controller
{
    //Kiểm tra username đã tồn tại hay chưa
    public function Checkusername()
    {

        $Param = array_merge($_POST,$_GET); 
        
            if (isset($Param['username'])) {
                $username = $Param['username'];
                $user = taikhoan::where([['tentk','=',$username]])->get();
                if(count($user) > 0)
                {
                    return '0';
                }
            }
            return '1';
        
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
                $taikhoan->mattcn = $thongtincanhan->mattcn;
                if (!$taikhoan->save()) 
                {
                    return '0';
                }
                return '1';

            }
            else return '0';
            /*if(isset($Param['info']))
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
                if (!$thongtincanhan->save()) {
                    return '0';
                }
            //Tạo thông tin tài khoản
                $taikhoan = new taikhoan;
                $taikhoan->tentk = $user['username'];
                $taikhoan->matkhau = md5($user['password']);
                $taikhoan->mattcn = $thongtincanhan->mattcn;
                if (!$taikhoan->save()) 
                {
                    return '0';
                }
            }*/
            
    }
}
