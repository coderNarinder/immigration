<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Country,College
};
class CollegeController extends Controller
{
    private $folderName = 'images/College/';
    //----------------------------------------------
    public function index(){
        $data = College::orderBy('name','ASC')->paginate(20); 
        return view('backend.modules.colleges.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){  
        $courseTypes = Country::orderBy('name','ASC')->get();
        return view('backend.modules.colleges.create',[ 
            'courseTypes' => $courseTypes
        ]);
    }

    public function store(Request $request){
        
            $p = new College(); 
            $p->name = $request->name; 
            $p->country_id = $request->country_id; 
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.College.index')]);
        
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = College::findOrFail($id);  
        $courseTypes = Country::orderBy('name','ASC')->get();
        return view('backend.modules.colleges.edit',[ 
            'data' => $data, 
            'courseTypes' => $courseTypes
        ]);
    }

    public function update(Request $request,$id){
        
        $p = College::find($id);
        $p->name = $request->name; 
            $p->country_id = $request->country_id; 
        $p->save();
        return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.College.index')]);
    
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = College::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.College.index')]);
        
    }
}