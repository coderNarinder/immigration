<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    CourseDetail,Country,CourseType
};
class CourseController extends Controller
{
    private $folderName = 'images/courses/';
    //----------------------------------------------
    public function index(){
        $data = CourseDetail::orderBy('name','ASC')->paginate(20); 
        return view('backend.modules.courses.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        $country = Country::orderBy('name','ASC')->get();
        $courseTypes = CourseType::orderBy('name','ASC')->get();
        return view('backend.modules.courses.create',[
            'countries' => $country,
            'courseTypes' => $courseTypes
        ]);
    }

    public function store(Request $request){
        
            $p = new CourseDetail();
            $p->name = $request->name;
            $p->country_id = $request->country_id; 
            $p->course_type_id = $request->course_type_id;
            $p->course_duration = $request->course_duration;
            $p->min_gpa = $request->min_gpa;
            $p->course_fee = $request->course_fee;
            $p->exam_requirements = $request->exam_requirements;
            $p->other_details = $request->other_details; 
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $img_path = uploadFileWithAjax23($this->folderName,$file);
                $p->image =$img_path; 
            }
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Course.index')]);
        
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = CourseDetail::findOrFail($id); 
        $country = Country::orderBy('name','ASC')->get();  
        $courseTypes = CourseType::orderBy('name','ASC')->get();
        return view('backend.modules.courses.edit',[ 
            'data' => $data,
            'countries' => $country,
            'courseTypes' => $courseTypes
        ]);
    }

    public function update(Request $request,$id){
        
        $p = CourseDetail::find($id);
        $p->name = $request->name;
        $p->country_id = $request->country_id; 
        $p->course_type_id = $request->course_type_id;
        $p->course_duration = $request->course_duration;
        $p->min_gpa = $request->min_gpa;
        $p->course_fee = $request->course_fee;
        $p->exam_requirements = $request->exam_requirements;
        $p->other_details = $request->other_details; 
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $img_path = uploadFileWithAjax23($this->folderName,$file);
            $p->image =$img_path; 
        }
      
        $p->save();
        return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Course.index')]);
    
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = CourseDetail::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Course.index')]);
        
    }
}