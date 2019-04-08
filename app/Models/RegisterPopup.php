<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterPopup extends Model
{
	protected $table = 'scholarship';
	protected $fillable = ['name','email','phone','course','college_name','created_at','updated_at','status'];
}
