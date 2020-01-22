<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_gallery extends Model
{
     public function school(){

         return $this->belongsTo('App\School');
         
     }
}
