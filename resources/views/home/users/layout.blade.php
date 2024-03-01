@extends('home.layouts.layout')
@section('content') 
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/slider-1.jpg)">
		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-heading">
							<h1 class="banner-title">Dashboard</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="dashboard section">
	<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="widget user">
							<div class="image d-flex justify-content-center"> <img src="images/user-thumb.jpg" alt="" class=""> </div>
							<h5 class="text-center">{{auth()->user()->name}}</h5>
							<p class="text-center">Balance: ₹{{ auth()->user()->balance() }}</p>
							<div class="text-center">
                                <a href="{{route('home.mywallet')}}" class="btn btn-main-sm">Add Funds</a>
                            </div>
						</div>
					</div>
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="user-profile.php"><i class="fa fa-cog"></i>My Profile</a></li>
						    <li><a href="{{route('home.mywallet')}}"><i class="far fa-money-bill-alt"></i> My Wallet</a></li>
							<li><a href="{{route('user.mygames')}}"><i class="fa fa-user-plus"></i>My Games</a></li>
							<li><a href="{{route('user.settings')}}"><i class="fa fa-user-plus"></i>Settings</a></li>
							<li><a href="{{route('user.support')}}"><i class="fa fa-user-plus"></i>Support</a></li>
							<li><a href="login.php"><i class="fa fa-power-off"></i>Log Out</a></li>
						</ul>
					</div>
				</div>					
				<div class="col-lg-8">
					<div class="widget dashboard-container my-adslist">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
						@yield('userContent')						
					</div>
				</div>
			</div>
         </div>
	</section>



















 
@endsection