@extends('backend.layouts.layoutNew')
@section('content')
<div class="row px-3 pt-4  mt-5 profile">
    <div class="col-11">
        <h2 class="">Add {{$title}}</h2>
    </div>
    <div class="col-1 text-center">
        <a href="{{route('admin.Type.index',$type)}}" class="btn btn-success" style="float:right;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye "
                viewBox="0 0 16 16">
                <path
                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                <title>View {{$title}}</title>
            </svg>
        </a>
    </div>
</div>
<div class="row p-4">
    <div class="shadow">
        <div class="row p-4">
        <form class="form-edit-category" name="addCategory" role="form" method="post"  
         id="categoryForm" 
         enctype="multipart/form-data">@csrf
            <div class="card-body">
                <div class="tab ">  
                    <div class="row mt-4">
                        <h5>{{$title}}</h5>
                         <div class="col-lg-4 col-12 mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="{{$title}}">
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="card-footer text-end">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ms-auto">SUBMIT</button>
                </div>
            </div>
          </form>
        </div> 
        @endsection  
 @section('scripts')
<script type="text/javascript" src="{{url('/admin-vue/scripts/admin/croppie.js')}}"></script>
<script type="text/javascript" src="{{url('/admin-vue/scripts/admin/category.js')}}"></script>
<script type="text/javascript">
  
</script>
@endsection