<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCourses extends Model
{
   	protected  $table 		='sub_courses';
	protected $fillable 	= ['name','image','course_id','created_at','updated_at','status'];

}
