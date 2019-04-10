<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPages extends Model
{
	protected $table = 'static_pages';
  	protected $fillable = ['id','name','image','description','status','created_at','updated_at'];
    public $timestamps = false;
}
