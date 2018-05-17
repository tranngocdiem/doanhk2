<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thuoctinh extends Model
{
    protected $table = 'thuoctinh';
    public $timestamp = false;
    protected $fillable = ['mattcn','hoten','sdt','diachi'];
    public function loaisanpham(){
    	return $this->belongsToMany('App\loaisanpham','chitietsanpham','matt','maloai');
    }
    public function giatrithuoctinh(){
    	return $this->hasMany('App\giatrithuoctinh');
    }
}
