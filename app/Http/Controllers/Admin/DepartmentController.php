<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = Department::orderBy('department_name','ASC')->paginate(20); 
        return view('backend.modules.departments.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.departments.create');
    }

    public function store(Request $request){
        $e = Department::where('department_name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new Department();
            $p->department_name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Department.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = Department::findOrFail($id);
        return view('backend.modules.departments.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = Department::where('id','!=',$id)->where('department_name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = Department::find($id);
            $p->department_name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Department.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = Department::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Department.index')]);
        
    }

    
}
