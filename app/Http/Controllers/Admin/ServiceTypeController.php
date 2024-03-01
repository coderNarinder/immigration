<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceType;
class ServiceTypeController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = ServiceType::orderBy('service_type','ASC')->paginate(20); 
        return view('backend.modules.service_types.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.service_types.create');
    }

    public function store(Request $request){
        $e = ServiceType::where('service_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new ServiceType();
            $p->service_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.ServiceType.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = ServiceType::findOrFail($id);
        return view('backend.modules.service_types.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = ServiceType::where('id','!=',$id)->where('service_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = ServiceType::find($id);
            $p->service_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.ServiceType.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = ServiceType::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.ServiceType.index')]);
        
    }

    
}
