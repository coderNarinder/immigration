@extends('godpanel.layouts.layout', ['title' => 'Business Category'])

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{asset('assets/libs/nestable2/nestable2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ __('Business Category') }}</h4>
            </div>
        </div>
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
    <div class="row catalog_box al_catalog_box">
         
        <div class="col-xl-12 col-lg-12 mb-12">
            <div class="card-box h-100">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <h4 class="page-title">{{ __('Business Category') }}</h4>
                        <p class="sub-header"></p>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{route('admin.pollType.create')}}" class="btn btn-info waves-effect waves-light text-sm-right " dataid="0">
                            <i class="mdi mdi-plus-circle mr-1"></i> {{ __('Add') }}</a>
                         
                    </div>
                </div>
                <div class="row brand-row">
                    <div class="col-md-12">
                        
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                                <thead>
                                    <tr>
                                         
                                        <th>{{ __('icon') }}</th>
                                      
                                        <th>{{ __('Name') }}</th>
                                      
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination pagination-rounded justify-content-end mb-0">
                         
                    </div>
                </div>
            </div>
        </div>

      
    </div>
</div>
 @include('godpanel.modules.poolTypes.modals')
 
 
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


 
<script type="text/javascript">












    
    var tagList = "";
    tagList = tagList.split(',');

    function makeTag(tagList = '') {
        $('.myTag1').tagsInput({
            'autocomplete': {
                source: tagList
            }
        });
    }
    $("body").on('click','.saveList', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token-z"]').attr('content')
            }
        });
        var data = $('.dd').nestable('serialize');
        document.getElementById('orderVariantData').value = JSON.stringify(data);
        $('#variant_order').submit();


    });

 
 
     function saveOrder(orderVal) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            dataType: "json",
            url: "{{ url('client/banner/saveOrder') }}",
            data: {
                _token: CSRF_TOKEN,
                order: orderVal
            },
            success: function(response) {
                if (response.status == 'success') {}
                return response;
            }
        });
    }
</script>

@endsection