@extends('home.layouts.layout')
@section('content')
 
<div class="panel panel-default">
        <div class="panel-body">
            <h1 class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent 
            transform -rotate-2">My Referrals</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="col-12">
                Balance : <strong>{{ auth()->user()->balance() }}</strong><br />
                
            </div>  
            <div class="col-12">
                 <table class="table table-striped">
                     <tr>
                        <th>Name</th>
                        <th>Email</th> 
                        <th>Bonus</th>
                         
                     </tr>
                     @foreach($users as $p)
                         <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td> 
                            <td>{{$p->getBonusTotal()}}</td>
                         </tr>
                     @endforeach
                 </table>
                 {{$users->links()}}
            </div>
        </div>
    </div>

@endsection