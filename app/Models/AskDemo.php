<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AskDemo extends Model
{
        protected  $table 		='askdemo';
		protected $fillable 	= ['name','email','mobile','dob','courses','status','created_at','updated_at'];
}
