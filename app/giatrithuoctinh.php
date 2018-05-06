<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giatrithuoctinh extends Model
{
    protected $table = 'giatrithuoctinh';
    public $timestamp = true;
    protected $fillable = ['magt','giatri','matt'];
    public function thuoctinh(){
    	return $this->belongsTo('App\thuoctinh');
    }
}
