<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chude_loaisanpham extends Model
{
    protected $table = 'chude_loaisanpham';
    protected $fillable = ['macd','maloai','isDeleted'];
     public $timestamps = false;
}
