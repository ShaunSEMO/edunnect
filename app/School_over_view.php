<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_over_view extends Model
{
    public function school(){

        return $this->belongsTo('App\School');
        
    }
}
