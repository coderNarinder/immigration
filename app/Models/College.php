<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }
}