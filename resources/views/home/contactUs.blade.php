@extends('home.layouts.layout')
@section('styles') @livewireStyles @endsection
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/slider-1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>                     
                      <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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
          <h3>Contact us</h3>
           <livewire:contacts/>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
@section('js') @livewireScripts  @endsection 