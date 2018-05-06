<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banggia extends Model
{
    protected $table = 'banggia';
    public $timestamp = true;
    protected $fillable = ['magia','gia','masp','makm'];
    public function chuongtrinhkhuyenmai()
    {
    	return $this->belongsTo('App\chuongtrinhkhuyenmai');
    }
    public function sanpham()
    {
    	return $this->belongsTo('App\sanpham');
    }
}
