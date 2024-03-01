<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    VisaDetail,VisaType,Country
};
class VisaDetailController extends Controller
{
    private $folderName = 'images/visaPictures/';
    //----------------------------------------------
    public function index(){
        $data = VisaDetail::orderBy('name','ASC')->paginate(20); 
        return view('backend.modules.visas.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        $visaTypes = VisaType::orderBy('name','ASC')->get();
        $country = Country::orderBy('name','ASC')->get();
        return view('backend.modules.visas.create',[
            'visaTypes' => $visaTypes,
            'countries' => $country
        ]);
    }

    public function store(Request $request){
        
            $p = new VisaDetail();
            $p->name = $request->name;
            $p->visa_type_id = $request->visa_type_id;
            $p->country_id = $request->country_id;
            $p->overview = $request->overview;
            $p->fee = $request->fee;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $img_path = uploadFileWithAjax23($this->folderName,$file);
                $p->image =$img_path; 
           }
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.VisaDetail.index')]);
        
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = VisaDetail::findOrFail($id);
        $visaTypes = VisaType::orderBy('name','ASC')->get();
        $country = Country::orderBy('name','ASC')->get(); 
        return view('backend.modules.visas.edit',[
            'visaTypes' => $visaTypes,
            'countries' => $country,
            'data' => $data
        ]);
    }

    public function update(Request $request,$id){
        
        $p = VisaDetail::find($id);
        $p->name = $request->name;
        $p->visa_type_id = $request->visa_type_id;
        $p->country_id = $request->country_id;
        $p->overview = $request->overview;
        $p->fee = $request->fee;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $img_path = uploadFileWithAjax23($this->folderName,$file);
            $p->image =$img_path; 
        }
        $p->status = 1;
        $p->save();
        return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.VisaDetail.index')]);
    
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = VisaDetail::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.VisaDetail.index')]);
        
    }
}
