<div class="row">

    <div class="col-md-6">
        <h3 class="section-title">Certificate Details</h3>
        
             <form wire:submit.prevent="searchStudent">
                <div class="position-relative">
                    <div class="row mm"><div class="col-md-8 col-8">
                  <input type="text" class="form-control border-0  newsletter-form1" id="search" 
                  wire:model="search"
                    placeholder="Candidate No" required> </div>
                  <div class="col-md-4 col-4"><button type="submit" class="btn btn-primary"
			               wire:loading.attr="disabled"
			               wire:target="searchStudent" style="margin-left:-25px;">
			        <span wire:loading.remove wire:target="searchStudent">
			           Search
			        </span>
			        <span wire:loading wire:target="searchStudent">
			            Processing...
			        </span>
			       </button>
                </div>
              </form></div>
      </div></div>
      
    <div class="col-md-6">
        
         @if($hasRecord)
         
         @if($counts == 0)
            <div class="alert alert-danger">{{$msg}}</div>
         @else
        <table class="table table-striped table-success table-rounded">
                            <tbody>
                            <tr>
                                <th>CANDIDATE NAME</th>
                                <td>{{$record->name}}</td>
                            </tr>
                            <tr>
                                <th>SERIAL NO.</th>
                                <td>CS-{{$record->serial_no}}</td>
                            </tr>
                            
                            <tr>
                                <th>COURSE NAME</th>
                                <td>{{$record->course_name}}</td>
                            </tr>
                            <tr>
                                <th>START DATE</th>
                                <td>{{date('d M Y',strtotime($record->start_date))}}</td>
                            </tr>
                            <tr>
                                <th>END DATE</th>
                                <td>{{date('d M Y',strtotime($record->end_date))}}</td>
                            </tr>
                        </tbody>
                        </table>
                        @endif
            @endif
      </div>
</div>
