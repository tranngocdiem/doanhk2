<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    public $timestamps = true;
    protected $table = 'sanpham';
    protected $fillable = ['masp','tensp','isDeleted','mamau'];
    
    public function loaisanpham(){
    	return $this->hasMany('App\loaisanpham');

    }
    public function banggia(){
    	return $this->hasMany('App\banggia');
    }
    public function mausanpham{
    	return $this->belongsTo('App\mausanpham');
    }
}
