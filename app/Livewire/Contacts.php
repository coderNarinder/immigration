<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
class Contacts extends Component
{ 
    public $name;
    public $phone_number;
    public $email;
    public $subject;
    public $message;
    public $loadDataEvent = 0;
 
    protected $rules = [
        'name' => 'required',
        'phone_number' => 'required|numeric|digits:10',
        'subject' => 'required',
        'message' => 'required',
        'email' => 'required|email',
    ];


    public function updated($propertyName)
    {
       $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.contacts');
    }


    public function sendMessage($value='')
    {
        $validatedData = $this->validate();
         
         $c = new Contact;
         $c->name = $this->name;
         $c->phone_number = $this->phone_number;
         $c->email = $this->email;
         $c->subject = $this->subject;
         $c->message = $this->message;
         if($c->save()){
            // $c->sendEmail();
            $this->name = null;
            $this->phone_number = null;
            $this->email = null;
            $this->subject = null;
            $this->message = null;

            session()->flash('message', 'Message sent successfully.');
         }else{
            session()->flash('error', 'something wrong.');
         } 
    }
}
