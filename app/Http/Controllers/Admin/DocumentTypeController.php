<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentType;
class DocumentTypeController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = DocumentType::orderBy('decument_type','ASC')->paginate(20); 
        return view('backend.modules.decument_types.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.decument_types.create');
    }

    public function store(Request $request){
        $e = DocumentType::where('decument_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new DocumentType();
            $p->decument_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.DocumentType.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = DocumentType::findOrFail($id);
        return view('backend.modules.decument_types.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = DocumentType::where('id','!=',$id)->where('decument_type',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = DocumentType::find($id);
            $p->decument_type = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.DocumentType.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = DocumentType::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.DocumentType.index')]);
        
    }

    
}
