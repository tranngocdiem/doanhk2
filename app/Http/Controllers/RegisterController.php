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
            //lấy tên tài khoản
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }
            else return '0';
            //lấy mật khẩu
            if (isset($_POST['password'])) {
                $email = $_POST['password'];
            }
             else return '0';
            //lấy họ và tên
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
            }
             else return '0';
            //lấy địa chỉ 
            if (isset($_POST['address'])) {
                $address = $_POST['address'];
            }
             else return '0';
            //lấy số điện thoại
            if (isset($_POST['telephonenumber'])) {
                $telephonenumber = $_POST['telephonenumber'];
            }
             else return '0';
            //kiểm tra tên tài khoản đã tồn tại hay chưa
            $user =  taikhoan::where([['tentk','=','username']])->get();
            if(count($user > 0))
            {
                return '0';
            }
            //Tạo thông tin cá nhân
            $thongtincanhan = new thongtincanhan;
            $thongtincanhan->hoten = $name;
            $thongtincanhan->diachi = $address;
            $thongtincanhan->sdt = $telephonenumber;
            if (!$thongtincanhan->save()) {
                return '0';
            }
            //Tạo thông tin tài khoản
            $taikhoan = new taikhoan;
            $taikhoan->tentk = $username;
            $taikhoan->matkhau = $password;
            $taikhoan->mattcn = $thongtincanhan->mattcn;
            if (!$taikhoan->save()) {
                return '0';
            }
    }
}
