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
                 <table class="table table-striped">
                     <tr>
                        <th>Picture</th>
                        <th>Pool</th> 
                        <th>Slot</th>
                        <th>Picked Numbers</th>
                        <th>Result</th>
                     </tr>

                     @foreach($games as $g)
                       <tr>
                        <td><img src="/{{$g->pool->image}}" alt="" width=50/></td>
                        <td>{{$g->pool->name}}</td>
                        <td>{{$g->slot->from_time}} - {{$g->slot->to_time}}</td>
                        <td>{{$g->picked_number}}</td>

                     </tr>
                        
                     @endforeach
                     
                 </table>
                 {{$games->links()}}
            </div>
        </div>
    </div>

@endsection