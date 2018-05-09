<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class chitietsanpham extends Pivot;
{
    protected $table = 'chitietsanpham';
    public $timestamp = true;
    protected $fillable = ['maloai','magt'];
}
