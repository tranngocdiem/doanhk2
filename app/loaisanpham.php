<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = 'loaisanpham';
    public $timestamp = false;
    protected $fillable = ['maloai','tenloai','soluongton','mota','masp','isDeleted'];
    public function lohang(){
    	return $this->belongsToMany('App\lohang','chitietlohang','maloai','malo');
    }
    public function chude(){
        return $this->belongsToMany('App\chude','sanpham_chude','maloai','macd')->using('App\sanpham_chude');
    }
    public function sanpham(){
    	return $this->belongsTo('App\sanpham');
    }
    public function dondathang(){
    	return $this->belongsToMany('App\dondathang','chitietdonhang','maloai','maddh')->using('App\chitietdonhang');
    }
    public function banggia(){
        return $this->hasMany('App\banggia');
    }
    public function hinhanh(){

        return $this->hasMany('App\hinhanh');
    }
}
