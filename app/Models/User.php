<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function balance(){
        $debit = $this->transactions->where('type','debit')->sum('amount');
        $credit = $this->transactions->where('type','credit')->sum('amount');  
        return  round($credit - $debit , 2);
    }
  
    public function transactions() {
       return $this->hasMany('App\Models\WalletTransaction');
    }

    public function poolParticipations() {
        return $this->hasMany('App\Models\PollUser','user_id');
     }
 
    public function  referrer() {
        return $this->belongsTo('App\Models\User','parent');
     }

    public function debit($data,$slotId) {
        // Usage
        $transactionID = $this->generateTransactionID();
       
        $p = new \App\Models\WalletTransaction;
        $p->amount = $data->discounted_price;
        $p->user_id= auth()->user()->id;
        $p->type="debit";
        $p->method = 'wallet';
        $p->relation_id = $slotId;
        $p->r_payment_id = $transactionID.'-'.$slotId.'-'.auth()->user()->id;
        $p->save();
        return true;
    }

    
    function generateTransactionID() { 
        $randomString = bin2hex(random_bytes(8)); 
        $uniqueID = uniqid(); 
        $transactionID = $randomString . $uniqueID; 
        return $transactionID;
    }


    public function payToReferrer($bonusAmount){
// return $this->referrer;
        if(!empty($this->referrer) && $this->referrer->role == 'agent'){
            $settings = \App\Models\WebsiteSetting::first();
            if(!empty($settings->agent_percent)){
                $bonus = abs(($bonusAmount / 100) * $settings->agent_percent);
                $p = new \App\Models\WalletTransaction;
                $p->r_payment_id = '#reffer-bonus-'.$this->id;
                $p->user_id = $this->referrer->id;
                $p->type = "credit";
                $p->method = 'Bonus';
                $p->currency = 'INR';
                $p->user_email = $this->email;
                $p->amount = $bonus; 
                $p->relation_id = $this->id;
                $p->save();
            } 
        } 
        return true;
    }

 
  public function getBonusTotal(){
    if(!empty($this->referrer)){
        return \App\Models\WalletTransaction::where('relation_id',$this->id)
        ->where('user_id',$this->referrer->id)
        ->sum('amount'); 
    }
    return 0;
  }
}
