<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollUser extends Model
{
    use HasFactory;

    public function pool(){
        return $this->belongsTo('App\Models\Poll','pool_id');
    }

    public function slot(){
        return $this->belongsTo('App\Models\PollSlot','poll_slot_id');
    }

    
}
