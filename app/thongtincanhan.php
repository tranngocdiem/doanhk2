<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtincanhan extends Model
{
    protected $table = 'thongtincanhan';
    public $timestamp = false;
    protected $fillable = ['mattcn','hoten','sdt','diachi'];
    public function taikhoan(){
    	return $this->belongsTo('App\taikhoan');
    }
}
