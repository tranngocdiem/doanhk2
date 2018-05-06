<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table = 'chitietdonhang';
    public $timestamp = true;
    protected $fillable = ['maddh','maloai','soluong'];

}
