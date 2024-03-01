<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
class SettingController extends Controller
{
    private $folderName = 'types/icon/';
    public function index(){
        $s = WebsiteSetting::first();
        return view('backend.modules.settings.index',[
            'setting' => $s
        ]);
    }

    public function store(Request $request){
        $s = WebsiteSetting::first();
        $setting = !empty($s) ? $s : new WebsiteSetting;
        $setting->agent_percent = $request->agent_percent;
        if ($request->hasFile('website_logo')) {
            $file = $request->file('website_logo');
            $img_path = uploadFileWithAjax23($this->folderName,$file);
            $setting->logo =$img_path; 
       }
        $setting->save();
        return response()->json(['status' => 1,'message'=> 'Website updated successfully','url' => route('admin.settings')]);
    }
}
