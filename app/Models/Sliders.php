<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
     protected $table = 'sliders';
	 protected $fillable = ['image','text','status','created_at','updated_at'];

}
