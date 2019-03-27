<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurPartners extends Model
{
   	protected  $table 		='our_partners';
	protected $fillable 	= ['image','created_at','updated_at','status'];
}
