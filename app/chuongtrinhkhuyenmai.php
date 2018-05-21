<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuongtrinhkhuyenmai extends Model
{
    protected $table = 'chuongtrinhkhuyenmai';
    public $timestamp = false;
    protected $fillable = ['makm','tenkm','ngaybatdau','ngayketthuc','discount','isDeleted'];

    public function banggia(){
    	return $this->hasMany('App\banggia');
    }
}
