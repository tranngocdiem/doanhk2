<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class chitietlohang extends Pivot;
{
    protected $table = 'chitietlohang';
    public $timestamp = false;
    protected $fillable = ['malo','maloai','soluongnhap','isDeleted'];
}
