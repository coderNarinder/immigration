@extends('home.layouts.layout')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/slider-1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Play & Win</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>                     
                      <li class="breadcrumb-item active" aria-current="page">play & win</li>
                    </ol>
                </nav>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<section class="section">
 <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="terms-condition-content">
          <h3>Play & Win </h3></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>
          @foreach($poll as $p)

          <div class="row border-bottom">
              <div class="col-md-6 col-sm-6">
                <div><img src="/{{$p->image}}" alt="" class="img-fluid"></div>
              </div>
              <div class="col-md-4 col-sm-6">
                
                <ul class="store-list">
                  <li><b>Pool Type: </b>{{$p->type?->name}}</a></li>
                  <li><b>Pool Name: </b>{{$p->name}}</a></li>        
                  <li><b>Pool Prize: </b>Rs.{{$p->prize}}</a></li>
                  <li><b>No. of Prizes: </b>Rs.{{$p->prizes_count}}</a></li>
                  <li><b>Total Slots: </b>{{$p->no_participate}}</a></li>
                  <li><b>Available Slots: </b>{{$p->no_participate - $p->members_count}}</a></li>
                  
                </ul>
                <div class="pt-10"><a href="{{route('home.poll.detail',$p->id)}}" class="btn btn-main-sm">Join</a></div>
              </div>
            </div>
             
            @endforeach             
    </div>
  </div>
</div>
</section> 
@endsection