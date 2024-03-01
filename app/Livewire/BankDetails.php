<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;
class BankDetails extends Component
{
    public $account_holder_name;
    public $bank_name;
    public $account_number; 
    public $confirm_account_number;
    public $branch_name;
    public $ifsc; 
    public $message;
    public $loadDataEvent = 0;
    public $type = 0;
 
    protected $rules = [
        'account_holder_name' => 'required',
        'branch_name' => 'required',
        'bank_name' => 'required',
        'ifsc' => 'required',
        'account_number' => 'required',
        'confirm_account_number' => 'required|same:account_number'
    ];

    public function updated($propertyName)
    {
       $this->validateOnly($propertyName);
    }

    public function changeMode(){
        $this->type = $this->type == 0 ? 1 : 0;
    }

    public function render()
    {
        return view('livewire.bank-details');
    }

    public function sendMessage($value='')
    {
        $validatedData = $this->validate();
        $obj_user = User::find(auth()->user()->id);
        $obj_user->account_holder_name = $this->account_holder_name;
        $obj_user->bank_name = $this->bank_name;
        $obj_user->branch_name = $this->branch_name;
        $obj_user->ifsc = $this->ifsc;
        $obj_user->account_number = $this->account_number; 
        if($obj_user->save()){ 
            $this->confirm_account_number =$this->ifsc =$this->account_number =$this->account_holder_name =  $this->bank_name = $this->branch_name = $this->message = null;
            session()->flash('message', 'Bank Detail update successfully.');
        }else{
            session()->flash('error', 'something wrong.');
        } 
        
    }
}
