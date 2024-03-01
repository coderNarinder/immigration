<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaDetail extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function type(){
        return $this->belongsTo('App\Models\VisaType','visa_type_id');
    }
}
