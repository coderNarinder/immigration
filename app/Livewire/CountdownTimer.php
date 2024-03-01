<?php

namespace App\Livewire;

use Livewire\Component;

class CountdownTimer extends Component
{ 
    public $timeRemaining = 0; // Initial time remaining in seconds
    public $pool;
    public $timmer='';
    public $nextResultTime = 0;
    public $slots;
    public $minutesRemaining=0;
    public $secondsRemaining=0;
    public $cSlot = 0;
    public $activeTab = 'tab1';
    public function render()
    {
        return view('livewire.countdown-timer',[
            'pool' => $this->pool
        ]);
    }

    public function mount()
    {
        $this->slots = $this->pool->slots;
    }

    public function updated()
    {
       $this->startTimer();
    }

    public function getResultTimmer(){
         
        
        if(!empty($this->slots)){ 
            $currentTime = date('H:i:s'); 
           
            foreach ($this->slots as $s) {
                $startTime = $s->from_time;
                $endTime = $s->to_time; 
                if ($startTime <= $currentTime && $currentTime < $endTime) {
                    $this->cSlot = $s->id;
                    $timeDiff = strtotime($endTime) - strtotime($currentTime);
                    $this->minutesRemaining = floor($timeDiff / 60);
                    $this->secondsRemaining = $timeDiff % 60; 
                    // Convert to HH:MM:SS format
                    $hours = floor($this->minutesRemaining / 60);
                    $minutes = $this->minutesRemaining % 60;
                    $timeString = "<li>".gmdate('H', $timeDiff)."</li><li>".gmdate('i', $timeDiff)."</li><li>".gmdate('s', $timeDiff)."</li>"; 
                    return $timeString;
                    break;
                }
            }
        }

    }

    public function startTimer()
    {
        $cTime = date("H:i:s");
        $time= strtotime($cTime);
       
        $this->timmer = $this->getResultTimmer(); 
    }

    public function decrementTime()
    {
        if ($this->timeRemaining > 0) {
            $this->timeRemaining--;
        }
    }
}
