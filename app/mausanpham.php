<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mausanpham extends Model
{
    protected $table = 'mausanpham';
    public $timestamp = true;
    protected $fillable = ['mamau','tenmau','isDeleted'];
    public function sanpham(){
    	return $this->hasMany('App\sanpham');
    }
}
