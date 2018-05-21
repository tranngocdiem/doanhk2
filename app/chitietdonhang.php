<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class chitietdonhang extends Pivot;
{
    protected $table = 'chitietdonhang';
    public $timestamp = false;
    protected $fillable = ['maddh','maloai','soluong','isDeleted'];

}
