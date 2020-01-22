<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function pictures(){

        return $this->hasMany('App\School_gallery');
        
    }
    
    public function overview(){

        return $this->hasMany('App\School_over_view');
        
    }
}
