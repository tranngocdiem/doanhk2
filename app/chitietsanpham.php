<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietsanpham extends Model
{
    protected $table = 'chitietsanpham';
    public $timestamp = false;
    protected $fillable = ['maloai','magt'];
}
