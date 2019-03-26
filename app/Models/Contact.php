<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected  $table 		='contact';
	protected $fillable 	= ['first_name','last_name','email','subject','message','created_at','updated_at','status'];

}
