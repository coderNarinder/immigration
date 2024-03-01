<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\{PollSlot,PollUser};
use DB;
use Auth;
class HomeController extends Controller
{
    
    public function index(){ 
        return view('welcome'); 
    }

    public function aboutUs(){ 
        return view('home.aboutUs'); 
    }

    public function howToPlay(){ 
        return view('home.howToPlay'); 
    }

    public function contactUs(){ 
        return view('home.contactUs'); 
    }

     //----------------------------------------------
     public function playAndWin(){
        $poll = Poll::with('slots')->
         withCount('members')
        ->withCount('prizes')->orderBy('created_at','DESC')->paginate(20); 
        return view('home.pools.index',compact("poll")); 
    }


    public function login()
    {
    	return view('auth.modules.login');
    }

    public function mygames()
    {
        $games = PollUser:: 
             whereHas('pool')
             ->whereHas('slot')
            ->where('user_id',auth()->user()->id)
            ->orderBy('created_at','DESC')
            ->paginate(20);
    	return view('home.users.mygames',compact('games'));
    }
    public function settings()
    { 
    	return view('home.users.settings');
    }
    

    public function register($refer_token=0)
    {  
        return view('auth.modules.register')->with('refer_token',$refer_token);
    }

    public function getRefferal()
    {  
        $users = \App\Models\User::where('parent',auth()->user()->id)->paginate(20);
        return view('home.users.referrals',[
            'users' => $users
        ]);
    }

    public function logout()
    { 
       \Auth::logout();
       return redirect()->route('home');
    }

    public function pollDetails($id){
        $current_time = date("H:i");
        $pool = Poll::with([
        'slots',
        'slots.member' => function($t){
            $t->where('user_id',\Auth::user()->id)
            ->whereDate('created_at',date('Y-m-d'));
        }
        ])->withCount('slots')->withCount('members')->where('id',$id)->first(); 
        // $available_slot = \App\Models\PollSlot::where('poll_id',$id)
        //                                       ->where("to_time",'>=',date("H:i"))
        //                                       ->orderBy('from_time','ASC')->first();
    //    return $pool->createSlots();
        $available_slots = $pool->slots->where('to_time','>=',date("H:i"));
        return view('home.pools.detail',compact("pool","available_slots")); 
    }

    public function pollSlots($id){ 
        $available_slots = \App\Models\PollSlot::where('poll_id',$id)
                                                ->where("to_time",'>=',date("H:i"))
                                                ->orderBy('from_time','ASC')
                                                ->skip(0)
                                                ->take(1)
                                                ->get();
        $vv = view('home.pools.available_slots',[
            "available_slots" => $available_slots,
            "id" => $id
        ])->render(); 
        return response()->json(array('success'=>true,'html'=>$vv));
    }



    public function pollSlot(Request $request,$id){

        DB::beginTransaction();
        try {
            $slot = $request->slot;
            $pool = Poll::where('id',$id)->first(); 
            $slotData = PollSlot::where('id',$slot)->first();
            # check conditions
            $endTime = strtotime($slotData->to_time); 
            $currentTime = strtotime(date('H:i'));
            $member = $totalCountData = PollUser::where('poll_slot_id',$slotData->id)
                            ->where('pool_id',$id)
                            ->whereDate('created_at',date('Y-m-d'));

            if ($currentTime > $endTime) {

            $status = ['status' => 0,'message' => 'This slot is closed.'];

            }elseif($totalCountData->count() >= $pool->no_participate){

                $status = ['status' => 0,'message' => 'The limit has been  reached for this pool.'];

            }elseif($member->where('user_id',Auth::user()->id)->exists()) {

                $status = ['status' => 0,'message' => 'You have already joined the pool in this time slot'];  

            }elseif(auth()->user()->balance() < $pool->discounted_price){

                $status = ['status' => 0,'message' => 'You do not have enough  balance to join this pool.'];
                
            } else{ 
                if(auth()->user()->debit($pool,$slotData->id)){
                    $u = new \App\Models\PollUser;
                    $u->user_id = \Auth::user()->id;
                    $u->pool_id = $slotData->poll_id;
                    $u->poll_slot_id = $slotData->id;
                    $u->picked_number = $request->picked_number;
                    $u->fee = $pool->discounted_price;
                    $u->save(); 
                    \Auth::user()->payToReferrer($pool->discounted_price);
                    $status = ['status' => 1,'message' => 'The pool slot has been booked!'];
                }else{
                    $status = ['status' => 0,'message' => 'There is something wrong!'];
                } 
            }
            DB::commit();  
        } catch (\Exception $e) {
            DB::rollback();
            $status = ['status' => 0,'message' =>  $e->getMessage()];
        }
        return response()->json($status); 
    } 


  

}