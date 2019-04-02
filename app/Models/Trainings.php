<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
  	protected  $table 		='trainings';
	protected $fillable 	= ['course_id', 'training_type', 'status', 'created_at','updated_at'];
}
