<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class generalSettings extends Model
{
  protected $table = 'general_settings';
   protected $fillable =['phone','phone2','skype_number','email',
   'address','social_sites','created_at','updated_at','status'];
}
