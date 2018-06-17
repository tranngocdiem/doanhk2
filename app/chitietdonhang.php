<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class chitietdonhang extends Pivot
{
    protected $table = 'chitietdonhang';
    public $timestamp = true;
    protected $fillable = ['maddh','maloai','soluong','gia','isDeleted'];

}
