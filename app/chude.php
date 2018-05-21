<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chude extends Model
{
	public $timestamps = false;
    protected $table = 'chude';
    protected $filltable = ['macd', 'tencd','isDeleted'];
    public function loaisanpham(){
    	return $this->belongsToMany('App\loaisanpham','sanpham_chude','macd','maloai')->using('App\sanpham_chude');
    }
}
