<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lohang extends Model
{
    protected $table = 'lohang';
    public $timestamp = false;
    protected $fillable = ['malo','ngaynhap'];
    public function loaisanpham(){
    	return $this->belongsToMany('App\loaisanpham','chitietlohang','malo','maloai');
    }
 }
