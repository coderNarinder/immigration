@extends('backend.layouts.layoutNew')
@section('stylesheets') 
@endsection
@section('content')
        <div class="m-c-heading">
            <h2>Pool Management</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->name}}</li>
              </ol>
            </nav>
            
          </div>

          <div class="wrapper-shadow-inset">

          <div class="col-4">
               
           </div>
             <div class="table-wrapper">
               <!-- /.card-header --> 
              <table class="dTable table-user-listing" id="example2" >
             
                     <tr>
                        <th>Picture</th>   
                        <th>Pool Name</th>
                        <th>Fee</th>
                        <th>Members</th>
                        <th>Total Fee</th>
                         
                     </tr>
                     @foreach($pools as $p)
                         <tr>
                            <td><img src="/{{$p->pool->image}}" style="width:120px"></td>
                            <td>{{$p->pool->name}} ({{$p->pool?->type?->name}})</td>
                            <td>Rs.{{$p->fee}}</td>
                            <td>{{$p->pool->members->count()}} Members</td>
                            <td>Rs.{{$p->pool->members->sum('fee')}}</td>
                         </tr>
                     @endforeach
                 </table>
                 {{$pools->links()}}
            </div>
     </div>
        
 
@endsection      
@section('scripts') 
@endsection

 