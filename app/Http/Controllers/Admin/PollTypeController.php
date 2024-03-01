<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PollType;

class PollTypeController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index(){
        $data = PollType::all(); 
        return view('backend.modules.categories.index',compact('data'));
    }

     //----------------------------------------------
     public function create(){ 
        return view('backend.modules.categories.create');
    }

    public function store(Request $request){
        $p = new PollType();
        $p->name = $request->name;
        if ($request->hasFile('image')) {
             $file = $request->file('image');
             $img_path = uploadFileWithAjax23($this->folderName,$file);
             $p->icon =$img_path; 
        }
        $p->save();

        return redirect()->route('admin.pollType.index');
    }

    //----------------------------------------------
    public function edit($id){ 
        $data = PollType::findOrFail($id);
        return view('backend.modules.categories.edit', compact('data') );
    }

    public function update(Request $request,$id){
        $p = PollType::findOrFail($id);
        $p->name = $request->name;
        if ($request->hasFile('image')) {
             $file = $request->file('image');
             $img_path = uploadFileWithAjax23($this->folderName,$file);
             $p->icon =$img_path; 
        }
        $p->save();

        return redirect()->route('admin.pollType.index');
    }
}
