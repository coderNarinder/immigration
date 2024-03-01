<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmploymentType;
class EmploymentTypeController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = EmploymentType::orderBy('employment_type','ASC')->paginate(20); 
        return view('backend.modules.employment_types.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.employment_types.create');
    }

    public function store(Request $request){
        $e = EmploymentType::where('employment_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new EmploymentType();
            $p->employment_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.EmploymentType.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = EmploymentType::findOrFail($id);
        return view('backend.modules.employment_types.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = EmploymentType::where('id','!=',$id)->where('employment_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = EmploymentType::find($id);
            $p->employment_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.EmploymentType.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = EmploymentType::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.EmploymentType.index')]);
        
    }

    
}
