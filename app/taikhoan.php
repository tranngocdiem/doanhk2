<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    protected $table = 'taikhoan';
    public $timestamp = false;
    protected $fillable = ['matk','tentk','matkhau','loaitk','mattcn'];
    public function dondathang(){
    	return $this->hasMany('App\dondathang');
    }
    public function thongtincanhan(){
    	return $this->hasOne('App\thongtincanhan');
    }

}
