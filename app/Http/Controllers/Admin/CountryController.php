<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = Country::orderBy('name','ASC')->paginate(20); 
        return view('backend.modules.countries.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.countries.create');
    }

    public function store(Request $request){
        $e = Country::where('name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = new Country();
            $p->name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Country.index')]);
        } 
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = Country::findOrFail($id);
        return view('backend.modules.countries.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $e = Country::where('id','!=',$id)->where('name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = Country::find($id);
            $p->name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Country.index')]);
        } 
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = Country::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Country.index')]);
        
    }
}