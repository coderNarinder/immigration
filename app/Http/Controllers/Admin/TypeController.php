<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    QualificationType,
    RelationshipType,
    SponsorType,
    VisaStatusType,
    AcceptanceStatusType,
    VisaDecisionStatusType,
    OfferLetterStatusType,
    SponsorRelationType,
    LeadSource,
    LeadStatus,
    ExamType,
    VisaType,
    CourseType,
    FaqCategory
};
class TypeController extends Controller
{
    private $folderName = 'types/icon/';
    //----------------------------------------------
    public function index($type){
        
         $data = $this->getTable($type); 
        return view('backend.modules.types.index',$data);
    }

    public function getTable($type){
       switch ($type) {
        case 'qualification-types':
            $data = QualificationType::orderBy('name','ASC')->paginate(20);
            break;
        case 'relationship-types':
            $data = RelationshipType::orderBy('name','ASC')->paginate(20);
            break; 
        case 'sponsor-types':
            $data = SponsorType::orderBy('name','ASC')->paginate(20);
            break;
        case 'visa-status-types':
            $data = VisaStatusType::orderBy('name','ASC')->paginate(20);
            break;
        case 'acceptance-status-types':
            $data = AcceptanceStatusType::orderBy('name','ASC')->paginate(20);
            break;
        case 'visa-decision-status-types':
            $data = VisaDecisionStatusType::orderBy('name','ASC')->paginate(20);
            break;
        case 'offer-letter-status-types':
            $data = OfferLetterStatusType::orderBy('name','ASC')->paginate(20);
            break;
        case 'sponsor-relation-types':
            $data = SponsorRelationType::orderBy('name','ASC')->paginate(20);
            break;
        case 'sponsor-relation-types':
            $data = SponsorRelationType::orderBy('name','ASC')->paginate(20);
            break;

        case 'lead-sources':
            $data = LeadSource::orderBy('name','ASC')->paginate(20);
            break;
        case 'lead-status':
            $data = LeadStatus::orderBy('name','ASC')->paginate(20);
            break;
        case 'exam-types':
            $data = ExamType::orderBy('name','ASC')->paginate(20);
            break;
        case 'visa-types':
            $data = VisaType::orderBy('name','ASC')->paginate(20);
            break;
        case 'course-types':
            $data = CourseType::orderBy('name','ASC')->paginate(20);
            break;
        case 'faq-category':
            $data = FaqCategory::orderBy('name','ASC')->paginate(20);
            break;

        default: 
            # code...
            break;
       }

       return [
        'data' => $data,
        'title' => ucwords(str_replace("-", " ", $type)),
        'type' => $type
       ];
    }

    public function saveTable($type){
        switch ($type) {
            case 'qualification-types':
                $data =new QualificationType();
                break;
            case 'relationship-types':
                $data =new RelationshipType();
                break; 
            case 'sponsor-types':
                $data =new SponsorType();
                break;
            case 'visa-status-types':
                $data =new VisaStatusType();
                break;
            case 'acceptance-status-types':
                $data =new AcceptanceStatusType();
                break;
            case 'visa-decision-status-types':
                $data =new VisaDecisionStatusType();
                break;
            case 'offer-letter-status-types':
                $data =new OfferLetterStatusType();
                break;
            case 'sponsor-relation-types':
                $data =new SponsorRelationType();
                break;
            case 'sponsor-relation-types':
                $data =new SponsorRelationType();
                break;
    
            case 'lead-sources':
                $data =new LeadSource();
                break;
            case 'lead-status':
                $data =new LeadStatus();
                break;
            case 'exam-types':
                $data =new ExamType();
                break;
            case 'visa-types':
                $data =new VisaType();
                break;
            case 'course-types':
                $data =new CourseType();
                break;
            case 'faq-category':
                $data =new FaqCategory();
                break;
    
            default: 
                # code...
                break;
           }
 
        return $data;
     }

     

     //----------------------------------------------
     public function create($type){ 
           $data = [ 
            'title' => ucwords(str_replace("-", " ", $type)),
            'type' => $type
           ];
        return view('backend.modules.types.create',$data); 
    }

    public function store(Request $request,$type){
        $obj = $obj2 = $this->saveTable($type);
        $e = $obj2->where('name',$request->name)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = $obj;
            $p->name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'Saved successfully','status' => 1,'url' =>route('admin.Type.index',$type)]);
        } 
    }

    

    //----------------------------------------------
    public function edit($type,$id){ 
        $obj = $obj2 = $this->saveTable($type);
        $data = $obj2->where('id',$id)->first(); 
        $data = [ 
            'data' => $data,
            'title' => ucwords(str_replace("-", " ", $type)),
            'type' => $type
           ];
        return view('backend.modules.types.edit',$data); 
    }

    public function update(Request $request,$type,$id){ 
        $obj = $obj2 = $this->saveTable($type);
        $e = $obj2->where('name',$request->name)->where('id','!=',$id)->count();
        if($e > 0){
            return response()->json(['message'=> 'Already Exists!','status' => 0]); 
        }else{
            $p = $obj2->where('id',$id)->first();
            $p->name = $request->name;
            $p->status = 1;
            $p->save();
            return response()->json(['message'=> 'updated successfully','status' => 1,'url' =>route('admin.Type.index',$type)]);
        } 
    }

    public function changeStatus(Request $request,$type,$id,$status){ 
            $obj = $this->saveTable($type);
            $p = $obj->where('id',$id)->first(); 
            $p->status = $status;
            $p->save();
            return response()->json(['message'=> 'Status changed successfully','status' => 1,'url' =>route('admin.Type.index',$type)]);
        
    }
}