<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = 'loaisanpham';
    public $timestamp = true;
    protected $fillable = ['maloai','tenloai','soluongton','masp'];
    public function lohang(){
    	return $this->belongsToMany('App\lohang','chitietlohang','maloai','malo');
    }
    public function sanpham(){
    	return $this->belongsTo('App\sanpham');
    }
    public function dondathang(){
    	return $this->belongsToMany('App\dondathang','chitietdonhang','maloai','maddh');
    }
    public function thuoctinh(){
    	return $this->belongsToMany('App\thuoctinh','chitietsanpham','maloai','matt');
    }
    public function hinhanh(){

        return $this->hasMany('App\hinhanh');
    }
}
