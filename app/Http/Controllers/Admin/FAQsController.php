<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    FaqCategory,Faqs
};
class FAQsController extends Controller
{
    private $folderName = 'images/faqs/';
    //----------------------------------------------
    public function index(){
        $data = Faqs::orderBy('question','ASC')->paginate(20); 
        return view('backend.modules.faqs.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){  
        $courseTypes = FaqCategory::orderBy('name','ASC')->get();
        return view('backend.modules.faqs.create',[ 
            'courseTypes' => $courseTypes
        ]);
    }

    public function store(Request $request){
        
            $p = new Faqs();
            $p->question = $request->question;
            $p->answer = $request->answer; 
            $p->faq_category_id = $request->faq_category_id; 
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.FAQs.index')]);
        
    }

    

    //----------------------------------------------
    public function edit($id){ 
        $data = Faqs::findOrFail($id);  
        $courseTypes = FaqCategory::orderBy('name','ASC')->get();
        return view('backend.modules.faqs.edit',[ 
            'data' => $data, 
            'courseTypes' => $courseTypes
        ]);
    }

    public function update(Request $request,$id){
        
        $p = Faqs::find($id);
        $p->question = $request->question;
        $p->answer = $request->answer; 
        $p->faq_category_id = $request->faq_category_id; 
        $p->save();
        return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.FAQs.index')]);
    
    }

    public function changeStatus(Request $request,$id,$status){
         
            $p = Faqs::find($id); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.FAQs.index')]);
        
    }
}