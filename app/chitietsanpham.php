<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class chitietsanpham extends Pivot;
{
    protected $table = 'chitietsanpham';
    public $timestamp = false;
    protected $fillable = ['maloai','magt'];
}
