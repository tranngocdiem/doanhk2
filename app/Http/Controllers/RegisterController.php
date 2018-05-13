<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create (){
    	$this->validate(request(),[
    		'name'=>'required',
    		'address'=>'required',
    		'telephonenumber'=>'required',
    		'username'=> 'required|unique:taikhoan',
    		'password'=>'required',
    		'confirmpwd'=>'required|same:password'
    	]);

    }
}
