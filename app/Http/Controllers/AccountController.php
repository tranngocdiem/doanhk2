<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taikhoan as taikhoan;
use App\thongtincanhan as thongtincanhan;
use Cookie;
use Session;
class AccountController extends Controller
{
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
                $taikhoan->mattcn = thongtincanhan::orderBy('mattcn', 'desc')->first()->mattcn;
                if (!$taikhoan->save()) 
                {
                    return '0';
                }
                return '1';

            }
            else return '0';
            
    }
  

    public function Login()
    {
       
         $Param = array_merge($_POST,$_GET);
         if(isset($Param['info']))
         {
                $user = $Param['info'];
                $countuser =  taikhoan::where([['tentk','=',$user['username']],['matkhau','=',md5($user['password'])]])->get();
                if(count($countuser) > 0)
                 {      

                    session(['username'=>$countuser[0]->tentk]);
                    session(['id'=>$countuser[0]->matk]);
                       /*$cookieValue= array('username'=>$countuser[0]->tentk,'id'=>$countuser[0]->matk);
                       Cookie::queue('Accountlogin',json_encode($cookieValue));*/
                    /*if($countuser->loaitk->get() == '1')*/
                    if($countuser[0]->loaitk == '1')
                        return view('Taikhoan.LoginSuccess');
                    else
                        return '2';

                 }
                 else
                    return '1';

         }
         return '0';
    }
    public function Logout()
    {
        session()->forget(['username','id']);
        return redirect('/');
    }
}
