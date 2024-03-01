<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
class DesignationController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = Designation::orderBy('designation_name','ASC')->paginate(20); 
        return view('backend.modules.designations.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.designations.create');
    }

    public function store(Request $request){
        $e = Designation::where('designation_name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new Designation();
            $p->designation_name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Designation.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = Designation::findOrFail($id);
        return view('backend.modules.designations.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = Designation::where('id','!=',$id)->where('designation_name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = Designation::find($id);
            $p->designation_name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Designation.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = Designation::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Designation.index')]);
        
    }

    
}
