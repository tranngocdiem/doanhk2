<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    public $timestamps = true;
    protected $table = 'sanpham';
    protected $fillable = ['masp','tensp','trangthai','mota'];
    public function chude(){
    	return $this->belongsToMany('App\chude','sanpham_chude','masp','macd');
    }
    public function loaisanpham(){
    	return $this->hasMany('App\loaisanpham');
    }
    public function banggia(){
    	return $this->hasMany('App\banggia');
    }
}
