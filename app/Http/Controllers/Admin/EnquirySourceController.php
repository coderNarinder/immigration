<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquirySource;
class EnquirySourceController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = EnquirySource::orderBy('enquiry_source','ASC')->paginate(20); 
        return view('backend.modules.enquiry_sources.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.enquiry_sources.create');
    }

    public function store(Request $request){
        $e = EnquirySource::where('enquiry_source',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new EnquirySource();
            $p->enquiry_source = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.EnquirySource.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = EnquirySource::findOrFail($id);
        return view('backend.modules.enquiry_sources.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = EnquirySource::where('id','!=',$id)->where('enquiry_source',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = EnquirySource::find($id);
            $p->enquiry_source = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.EnquirySource.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = EnquirySource::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.EnquirySource.index')]);
        
    }

    
}
