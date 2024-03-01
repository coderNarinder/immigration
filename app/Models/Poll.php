<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PollPrize;
class Poll extends Model
{
    use HasFactory;

    public function type(){
        return $this->hasOne('App\Models\PollType','id','poll_type_id');
    }
    public function prizes(){
        return $this->hasMany('App\Models\PollPrize','poll_id');
    }

    public function members(){
        return $this->hasMany('App\Models\PollUser','pool_id');
    }
    
    public function member(){
        return $this->hasOne('App\Models\PollUser','pool_id');
    }

    public function slots(){
        return $this->hasMany('App\Models\PollSlot','poll_id')->orderBy('from_time','ASC');
    }

    public function saveRanking(){
        $prizes = json_decode($this->no_of_winners);
       foreach($prizes as $item){    
         $p = new PollPrize;
         $p->poll_id = $this->id;
         $p->prize = $item;
         $p->save();
       }
    }

    public function createSlots(){
        // Define start and end time for the day (24-hour period)
        $start_time = strtotime("00:00"); // Start at midnight
        $end_time = strtotime("23:59"); // End just before midnight

        // Define slot duration in seconds (30 minutes in this case)
        $slot_duration = $this->draw_after * 60; 
        $slots = [];  
        for ($time = $start_time; $time <= $end_time; $time += $slot_duration) {
            $slot_start = date("H:i", $time); // Format slot start time as HH:MM
            $slot_end = date("H:i", $time + $slot_duration); // Format slot end time as HH:MM
            $slots[] = ['slot_start' => $slot_start,'slot_end' => $slot_end]; // Add slot to the array
        }
        \App\Models\PollSlot::where('poll_id',$this->id)->delete();
        foreach ($slots as $k => $slot) {
            $p = new \App\Models\PollSlot; 
            $p->poll_id = $this->id;
            $p->from_time = $slot['slot_start']; 
            $p->to_time = ($slot['slot_end'] == '00:00' && $k > 0) ? '24:00' : $slot['slot_end'];
            $p->save();
        }
        return 'done';
    }

   
}
