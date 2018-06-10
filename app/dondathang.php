<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table = 'dondathang';
    public $timestamps = true;
    protected $fillable = ['maddh','ngaydat','ngaygiao','nguoinhan','sdt','diachigiao','trangthai','matk'];
    public function loaisanpham(){
    	return $this->belongsToMany('App\loaisanpham','chitietdonhang','maddh','maloai')->using('App\chitietdonhang');
    }
    public function taikhoan(){
    	return $this->belongsTo('App\taikhoan');
    }
}
