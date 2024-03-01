<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
class UserController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){ 
        return view('backend.modules.users.index');
    }

    //----------------------------------------------
    public function detail($id){ 
        $user = User::with([
            'poolParticipations' => function($t) {
                
            },
            'transactions' => function($t){
                $t->where('method','Bonus');
            }
        ])->withCount([
            'poolParticipations'
        ])->where('id',$id)->firstOrFail();
        return view('backend.modules.users.detail',[
            'user' => $user
        ]);
    }

    //----------------------------------------------
    public function wallet($id){ 
        $user = User::where('id',$id)->firstOrFail();
        $transactions = \App\Models\WalletTransaction::where('user_id',$user->id)->OrderBy('created_at','DESC')->paginate(20);
        return view('backend.modules.users.wallet',[
            'user' => $user,
            'transactions'=> $transactions
        ]);
    }

    //----------------------------------------------
    public function pools($id){ 
        $user = User::where('id',$id)->firstOrFail();
        $pools = \App\Models\PollUser::whereHas('pool')->where('user_id',$user->id)->OrderBy('created_at','DESC')->paginate(20);
        return view('backend.modules.users.pools',[
            'user' => $user,
            'pools'=> $pools
        ]);
    }

     //----------------------------------------------
     public function referrals($id){ 
        $user = User::where('id',$id)->firstOrFail();
        $referrals = User::where('parent',$user->id)->OrderBy('created_at','DESC')->paginate(20);
        return view('backend.modules.users.referrals',[
            'user' => $user,
            'referrals'=> $referrals
        ]);
    }
 
 
    public function ajax(Request $request){
        $data = User::where('role','user'); 
        return DataTables::eloquent($data)
                 
                ->addColumn('action',function($t){
                    return '<a href="'.route('admin.agent.detail',$t->id).'" class="main-button m-b-rounded" title="click to edit pool">
                    <span class="material-icons">view</span>
                  </a>';
                })
                ->make(true);
    }

    public function agentIndex(){ 
        return view('backend.modules.users.agentIndex');
    }
 
    public function agentAjax(Request $request){
        $data = User::with([
            'transactions' => function($t){
                $t->where('method','Bonus');
            }
        ])->where('role','agent'); 
        // return $data->get();
        return DataTables::eloquent($data)
                ->addColumn('total_bonus',function($t){
                     return 'RS.'.number_format($t->transactions()->sum('amount'),2);
                }) 
                ->addColumn('action',function($t){
                    return '<a href="'.route('admin.agent.detail',$t->id).'" class="main-button m-b-rounded" title="click to edit pool">
                    <span class="material-icons">view</span>
                  </a>';
                })
                ->make(true);
    }
 

    
}
