@extends('home.users.layout')
@section('userContent')
 
<div class="panel panel-default">
        <div class="panel-body">
            <h1 class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent 
            transform -rotate-2">My Games</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
             
            <div class="col-12">
                  
 
            </div>
        </div>
    </div>

@endsection