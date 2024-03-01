<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;
class Certificate extends Component
{
	public $record = [];
	public $hasRecord = false;
	public $search='';
	public $msg='';
	public $counts=0;
    public function render()
    {
        return view('livewire.certificate');
    }



    public function searchStudent($value='')
    {
    	 
    	 $student = Students::where('serial_no',$this->search)->orWhere('full_serial_no','LIKE','%'.$this->search);
         $this->counts = $student->count();
    	 if($this->counts > 0){
    	 	$this->hasRecord = true;
    	 	$this->record = $student->first();
    	 	//dd($this->records);
    	 }else{
    	 	$this->hasRecord = true;
    	    $this->msg = 'Record not found!';
    	 }
    }
}
