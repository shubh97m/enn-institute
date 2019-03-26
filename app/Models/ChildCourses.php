<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildCourses extends Model
{
    protected  $table 		='child_courses';
	protected $fillable 	= ['course','sub_course','name','image','created_at','updated_at','status'];

}
