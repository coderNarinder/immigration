@extends('godpanel.layouts.layout', ['title' => 'Business category'])

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{asset('assets/libs/nestable2/nestable2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ __('Business category') }}</h4>
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
                        <h4 class="page-title">{{ __('Business category') }}</h4>
                        <p class="sub-header"></p>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{route('godpanel.businessCategory.index')}}" class="btn btn-info waves-effect waves-light text-sm-right " dataid="0">
                            <i class="mdi mdi-plus-circle mr-1"></i> {{ __('View') }}</a>
                         
                    </div>
                </div>
                <form class="row brand-row" enctype="multipart/form-data" method="post" action="{{route('godpanel.businessCategory.update',$data->id)}}">
                    @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 pb-0 mb-0">
                                <div class="row rowYK">
                                    <div class="col-md-12">
                                        <div class="card">
                                           <div class="card-body">
                                              <div class="row">
                                                      <div class="col-md-12">              
                                                                    <label>{{ __("Upload Logo") }}</label>
                                                                    <input type="file" accept="image/*" class="dropify" data-plugins="dropify" name="image2" data-default-file="{{urlOfImage($data->image)}}" />
                                                                    <label class="logo-size d-block text-right mt-1">{{ __("Image Size") }} 200x200</label>
                                                    </div>
                                              </div>
                                            </div>
                                         </div> 
                                    </div>
                                    <div class="col-md-12" style="overflow-x: auto;">
                                        @foreach($languages as $key => $langs)
                                          <?php 
                                             if($key == 0){
                                                $names = $data->name;
                                                 
                                             }else{
                                             $langCountryData = \App\Models\BusinessCategory::where('parent',$data->id)
                                             ->where('language_id',$langs->id);
                                                 $names = $langCountryData->count() == 1 ? $langCountryData->name : '';
                                                 
                                             }
                                           ?>
                                            <div class="row">
                                                <div class="col-12">
                                                     <div class="card">
                                                       <div class="card-body">
                                                        <h5 class="card-title">{{$langs->name}}</h5>
                                                                {!! Form::hidden('language_id[]', $langs->id) !!}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>{{ __("Name") }}</label>
                                                                {!! Form::text('names[]', $names, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>

                                                           
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 text-right btn_bottom">
                        <button class="btn btn-info waves-effect waves-light text-sm-right saveBrandOrder">{{ __('Save') }}</button>
                    </div>

             </form>
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


@include('godpanel.modules.catalog.category-script')
@include('godpanel.modules.catalog.pagescript')
<script type="text/javascript">
 
</script>

@endsection