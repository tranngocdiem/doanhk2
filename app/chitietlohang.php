<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietlohang extends Model
{
    protected $table = 'chitietlohang';
    public $timestamp = true;
    protected $fillable = ['malo','maloai','soluongnhap'];
}
