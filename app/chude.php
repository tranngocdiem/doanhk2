<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chude extends Model
{
	public $timestamps = true;
    protected $table = 'chude';
    protected $filltable = ['macd', 'tencd'];

}
