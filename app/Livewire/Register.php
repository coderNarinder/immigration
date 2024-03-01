<?php
namespace App\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Register extends Component
{ 
    public $name;
    public $phone_number;
    public $email; 
    public $password;
    public $redirect_url;
    public $loadDataEvent = 0;
    public $refer_token=0;
    public $role='user';  
 
    protected $rules = [
        'name' => 'required',
        'phone_number' => 'required|unique:users|numeric|digits:10',
        'password' => 'required', 
        'email' => 'required|email|unique:users',
        'role' => 'required',
    ];


    public function updated($propertyName)
    {
       $this->validateOnly($propertyName);
    }


    public function render()
    {  
        return view('livewire.register');
    }


    public function checkLogin($value='')
    {
        $validatedData = $this->validate(); 
         $id = !empty($this->refer_token) ? base64_decode($this->refer_token) : 0;  
         $user = User::where('id',$id)->where('role','agent')->first();
         $c = new User;
         $c->name = $this->name;
         $c->role = $this->role;
         $c->phone_number = $this->phone_number;
         $c->email = $this->email;
         $c->parent = $user->id ?? 0;
         $c->grand_parent = $user->grand_parent ?? 0;
         $c->password = \Hash::make($this->password);
         if($c->save()){
            $data = ['email' => $this->email, 'password' => $this->password,'role' => $this->role]; 
            $this->name = null;
            $this->phone_number = null;
            $this->email = null;
            $this->password = null; 
            $this->role = 'user';
            session()->flash('message', 'Register successfully.');
           if(Auth::attempt($data))
            {  
                if(!empty($this->redirect_url)){
                    return redirect($this->redirect_url);
                }
                return redirect()->route('home');
            }
         }else{
            session()->flash('error', 'something wrong.');
         }
                 
              
    }
}

