<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    public $timestamps = false;
    protected $table = 'sanpham';
    protected $fillable = ['masp','tensp','trangthai','isDeleted'];
    
    public function loaisanpham(){
    	return $this->hasMany('App\loaisanpham');
    }
    public function banggia(){
    	return $this->hasMany('App\banggia');
    }
}
