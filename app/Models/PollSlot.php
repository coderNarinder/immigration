<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollSlot extends Model
{
    use HasFactory;

    public function member(){
        return $this->hasMany('App\Models\PollUser','poll_slot_id');
    }

    public function poll(){
        return $this->belongsTo('App\Models\Poll','poll_id');
    }
}
