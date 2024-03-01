@extends('backend.layouts.layoutNew')
@section('stylesheets') @endsection
@section('content')
<div class="row px-4 pt-3 profile dash mb-4"><h2 class=" mb-2">View College</h2></div>
   <div class="shadow mx-4">
      <div class="row">
          <div class="col-lg-12">
            <div class="row py-4 px-3">
                <div class="row pb-3 px-3">
                  <div class="col-lg-9 col-12">
                      
                  </div>
                  <div class="col-lg-3 col-2 pt-3">
                    <a href="{{route('admin.College.create')}}" class="enq">
                      <span style="float:right;">
                      <span class="purple"><strong>+</strong></span></span>
                    </a>
                  </div>
                </div> 
                <div class="table table-responsive px-3">
                  <table class="table table-striped  ">
                    <tr class="table-light" align="center" text-align="center" >
                       
                      <th>College</th>
                      <th>Country</th>
                      <th>Status</th> 
                      <th>Action</th>
                    </tr>

                  @foreach($data as $k => $val)
                  <tr align="center" valign="middle" > 
                   <td>{{$val->name}} 
                   </td> 
                   <td>{{$val->country->name ?? '--'}}</td>
                   <td width="200px">
                      <select class="form-select changeStatus">
                        <option value="{{route('admin.College.status',[$val->id,1])}}" <?= $val->status == 1 ? 'selected' : '' ?>>Active</option>
                        <option value="{{route('admin.College.status',[$val->id,0])}}" <?= $val->status == 0 ? 'selected' : '' ?>>In-Active</option>
                    </select>
                  </td> 
                  <td align="center">
                    <div class="drop">
                      <a href="" class="d-flex align-items-center text-black text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg></a>
                        <div class="dropdown pull-right">
                          <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="{{route('admin.College.edit',$val->id)}}">Edit</a></li>
                            <li><hr class="dropdown-divider"></li>
                          </ul>
                        </div>
                    </div>
                  </td>
                  </tr> 
                  @endforeach
                </table>
                {{$data->links()}}
                </div> 
@endsection      
@section('scripts') 
<script type="text/javascript" src="{{url('/admin-vue/scripts/admin/croppie.js')}}"></script>
@endsection