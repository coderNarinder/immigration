<?php

namespace App\Livewire;

use Livewire\Component;
use Hash;
use Auth;
use App\Models\User;
class PasswordChange extends Component
{
    public $password;
    public $old_password;
    public $confirm_password; 
    public $message;
    public $loadDataEvent = 0;
 
    protected $rules = [
        'password' => 'required',
        'old_password' => 'required',
        'confirm_password' => 'required|same:password'
    ];

    public function updated($propertyName)
    {
       $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.password-change');
    }

    public function sendMessage($value='')
    {
        $validatedData = $this->validate();
        $obj_user = User::find(auth()->user()->id);
        $current_password = $obj_user->password;  
        // $obj_user->password = \Hash::make($this->password);
        // $obj_user->save();
        if(Hash::check($this->password, $current_password))
        { 
            $obj_user->password = \Hash::make($this->password);
            
         
            if($obj_user->save()){ 
                $this->old_password = null;
                $this->password = null;
                $this->confirm_password = null; 
                $this->message = null;

                session()->flash('message', 'Password changed successfully.');
            }else{
                session()->flash('error', 'something wrong.');
            } 
        }else{
            session()->flash('error', 'Old password not matched!');
        }
    }
}
