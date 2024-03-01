@extends('godpanel.layouts.layout', ['title' => 'Contacts'])

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{asset('assets/libs/nestable2/nestable2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')



 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>{{ __('Contacts') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                    <li class="active"><a href="#">{{ __('Contacts') }}</a></li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






  <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-sm-12 text-sm-left">
                          @if (\Session::has('success'))
                          <div class="alert alert-success">
                              <span>{!! \Session::get('success') !!}</span>
                          </div>
                          @endif
                          @if (\Session::has('error_delete'))
                          <div class="alert alert-danger">
                              <span>{!! \Session::get('error_delete') !!}</span>
                          </div>
                          @endif
                      </div>
                </div>

                 
                 <div class="col-lg-12">
                    <div class="card">
                              <div class="card-header">
                                 
                                          <strong class="card-title">Students</strong>
                                          
                              </div>
                        <div class="card-body">
                            <table class="table">
                               <thead class="thead-dark">
                                     <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Phone number') }}</th>
                                        <th>{{ __('Subject') }}</th>
                                        <th>{{ __('Message') }}</th>
                                         
                                      
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($students as $c)
                                    <tr class="brandList" data-row-id="{{$c->id}}">
                                       <td>{{$c->name}}</td>
                                       <td>{{$c->email}}</td>
                                       <td>{{$c->phone_number}}</td>
                                       <td>{{$c->subject}}</td>
                                       <td>{{$c->message}}</td>
                                      
                                        
                                      
                                         <td>
                                           
                                            <a class="action-icon deleteBrand" dataid="{{$c->id}}" href="javascript:void(0);"> <i class="mdi mdi-delete"></i> Delete</a>
                                            <form action="{{route('admin.contacts.delete', $c->id)}}" method="POST" style="display: none;" id="brandDeleteForm{{$c->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-icon btn btn-primary-outline" dataid="{{$c->id}}"> <i class="mdi mdi-delete"></i> Delete </button>
                                            </form>
                                        </td>
                                       
                                   </tr>
                                 @endforeach
                                  </tbody>
                             </table>
                             <div class="pagination pagination-rounded justify-content-end mb-0">
                                 {{ $students->links() }}
                              </div>
                          </div>
                </div>
            </div>
              </div>
 </div>



 
 
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="{{asset('assets/libs/nestable2/nestable2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/my-nestable.init.js')}}"></script>
<script src="{{asset('assets/libs/dragula/dragula.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dragula.init.js')}}"></script>
<script src="{{asset('assets/js/jscolor.js')}}"></script>
<script src="{{ asset('assets/js/jquery.tagsinput-revisited.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/jquery.tagsinput-revisited.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


 
@include('godpanel.modules.catalog.pagescript')


<script type="text/javascript">
$("body").on('change','#uploadCsvFile',function(){
   upload_form_file();
});


 function upload_form_file() {
      $this = $('#uploadCsvFileForm');
       var form = $this[0]; // You need to use standard javascript object here
       var formData = new FormData(form);
       var percent = $('body').find('.percent');
       $loader = $("body").find('.preloader');
       var bar = $loader.find('.bar');
        $.ajax({
           url:"{{ route('admin.student.file') }}",
           method:"POST",
           data:formData,
           dataType:'JSON',
           contentType: false,
           cache: false,
           processData: false,
           beforeSend: function() {
             $('body').find('.progress').show();
             $('.progress').find('span.sr-only').text('0%');
             $this.find('button').attr('disabled','true');
             $loader.show();
           },
           xhr: function () {
             var xhr = new window.XMLHttpRequest();
             xhr.upload.addEventListener("progress", function (evt) {
                  if (evt.lengthComputable) {
                     var percentComplete = evt.loaded / evt.total;
                     percentComplete = parseInt(percentComplete * 100);
                     $loader.find('.progress').find('span.sr-only').text(percentComplete + '%');
                     $loader.find('span#ProgressCounting').text(percentComplete);
                     $loader.find('.progress .progress-bar').css('width', percentComplete + '%');
                  }

            }, false);
            return xhr;
          },
          success:function(data)
          {


            if(parseInt(data.status) == 1){ 
                  form.reset();
                
                  alert(data.message);
                  window.location.reload();
                  $loader.hide();
            }else{
                 alert(data.message);
                
                 $loader.hide();
                
            }
            form.reset();
             
           }
        });

}



</script>

@endsection