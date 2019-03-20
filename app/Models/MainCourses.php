<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCourses extends Model
{
	protected  $table 		='courses';
	protected $fillable 	= ['title','image','description','created_at','updated_at','status'];

}
