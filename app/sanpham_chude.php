<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class sanpham_chude extends Pivot;
{
	// một loại sản phẩn thuộc nhiều chủ để khác nhau
    protected $table = 'sanpham_chude';
    protected $fillable = ['macd','maloai'];
     public $timestamps = true;
}
