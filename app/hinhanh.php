<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    protected $table = 'hinhanh';
    public $timestamp = true;
    protected $fillable = ['mahinh','url','maloai'];
    public function maloai()
    {
    	return $this->belongsTo('App\loaisanpham');
    }
    
}
