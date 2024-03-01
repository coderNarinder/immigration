@extends('home.layouts.layout')
@section('styles') @livewireStyles @endsection
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/slider-1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Login</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>                     
                      <li class="breadcrumb-item active" aria-current="page">Login </li>
                    </ol>
                </nav>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">User Login</h3>
          @php $redirect_url = Request::has('redirect_url') ? Request::get('redirect_url') : '' @endphp
          <livewire:homelogin :redirect_url="$redirect_url"/>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js') @livewireScripts  @endsection 