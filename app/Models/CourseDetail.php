<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function course(){
        return $this->belongsTo('App\Models\CourseType','course_type_id');
    }
    
}
