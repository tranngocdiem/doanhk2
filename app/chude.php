<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chude extends Model
{
	public $timestamps = false;
    protected $table = 'chude';
    protected $filltable = ['macd', 'tencd'];
    public function sanpham(){
    	return $this->belongsToMany('App\sanpham','sanpham_chude','macd','masp');
    }
}
