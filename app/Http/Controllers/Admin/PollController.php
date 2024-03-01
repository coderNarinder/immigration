<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\PollPrize;
use DataTables;
use DB;
class PollController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        
        return view('backend.modules.pools.index');
    }

    

     //----------------------------------------------
     public function create(){ 
        $categories = \App\Models\PollType::all();  
        return view("backend.modules.pools.create", compact(['categories']));
        // return view('backend.modules.pools.create');
    }

    public function store(Request $request){

        DB::beginTransaction();
    

        try {
            $p = new Poll();
            $p->name = $request->name;
            $p->poll_type_id = $request->poll_type_id;
            $p->price = $request->price;
            $p->discounted_price = $request->discounted_price;
            $p->prize = $request->prize;
            $p->draw_after = $request->draw_after;
            $p->no_of_winners = !empty($request->rankcount) ? json_encode($request->rankcount) : json_encode([]);
            $p->status = 1;
            $p->start_date = $request->start_date;
            $p->no_participate = $request->no_participate;
            $p->end_date = $request->end_date; 
            if ($request->hasFile('image')) {
                 $file = $request->file('image');
                 $img_path = uploadFileWithAjax23($this->folderName,$file);
                 $p->image =$img_path; 
            }
            $p->save();
    
            $p->saveRanking();
            $p->createSlots();
        
            DB::commit();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.poll.list')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message'=> $e->getMessage(),'status' => 0,'url' =>route('admin.poll.list')]);
        }
       
        
    }

    public function ajax(Request $request){
        $data = Poll::with('type','members')->withCount('prizes'); 
        return DataTables::eloquent($data)
                ->addColumn('img_url',function($t){
                    return url($t->image);
                })
                ->addColumn('total_earning',function($t){
                    $counts = $t->members->count();
                    return $counts > 0 ? 'Rs.'.($t->members->sum('fee'))."/".$counts : '--';
                })
                ->addColumn('category',function($t){
                    return $t->type->name ?? '--';
                })
                ->addColumn('ranking_counts',function($t){
                    return $t->prizes_count;
                })
                
                ->addColumn('action',function($t){
                    return '<a href="'.route('admin.poll.edit',$t->id).'" class="main-button m-b-rounded" title="click to edit pool">
                    <span class="material-icons">edit</span>
                  </a>';
                })
                ->make(true);
    }

    //----------------------------------------------
    public function edit($id){ 
        $data = Poll::findOrFail($id);
        $categories= \App\Models\PollType::all();
        return view('backend.modules.pools.edit', compact('data','categories') );
    }

    public function update(Request $request,$id){ 
        $p = Poll::findOrFail($id);
        $p->name = $request->name;
        $p->poll_type_id = $request->poll_type_id;
        $p->price = $request->price;
        $p->discounted_price = $request->discounted_price;
        $p->prize = $request->prize;
      
        $p->no_of_winners = !empty($request->rankcount) ? json_encode($request->rankcount) : json_encode([]); 
        $p->status = 1;
        $p->start_date = $request->start_date;
        $p->no_participate = $request->no_participate;
        $p->end_date = $request->end_date; 
        if ($request->hasFile('image')) {
             $file = $request->file('image');
             $img_path = uploadFileWithAjax23($this->folderName,$file);
             $p->image =$img_path; 
        }
        $p->save();
        $p->saveRanking();
        return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.poll.list')]);
    }
}
