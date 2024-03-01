<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Location,Country
};
class LocationController extends Controller
{
    private $folderName = 'images/visaPictures/';
    //----------------------------------------------
    public function index(){
        $data = Location::orderBy('name','ASC')->paginate(20); 
        return view('backend.modules.locations.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        
        return view('backend.modules.locations.create');
    }

    public function store(Request $request){
        
            $p = new Location();
            $p->name = $request->name;
            $p->branch_name = $request->branch_name;
            $p->phone_number = $request->phone_number;
            $p->contact_person = $request->contact_person;
            $p->address = $request->address;
            $p->email = $request->email; 
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Location.index')]);
        
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = Location::findOrFail($id); 
        return view('backend.modules.locations.edit',[ 
            'data' => $data
        ]);
    }

    public function update(Request $request,$id){
        
        $p = Location::find($id);
        $p->name = $request->name;
        $p->branch_name = $request->branch_name;
        $p->phone_number = $request->phone_number;
        $p->contact_person = $request->contact_person;
        $p->address = $request->address;
        $p->email = $request->email; 
        $p->status = 1;
        $p->save();
        return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Location.index')]);
    
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = Location::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Location.index')]);
        
    }
}
