<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham_chude extends Model
{
    protected $table = 'sanpham_chude';
    public $timestamps = true;
    protected $fillable = ['macd','masp'];
}
