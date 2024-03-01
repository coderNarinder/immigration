 
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">                
                <div class="logo">
                    <a class="d-block" href="index.php">
                      @if(!empty($website_setting->logo))
                          <img loading="lazy" src="{{url($website_setting->logo)}}">
                      @else
                         Games
                      @endif
                      
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item active"><a href="/">Home </a></li>
                      <li class="nav-item"><a href="{{route('home.aboutUs')}}">About Us</a></li> 
                      <li class="nav-item"><a href="{{route('home.playAndWin')}}">Play & Win</a></li>
                      <li class="nav-item"><a href="{{route('home.howToPlay')}}">how to Play</a></li> 
                      <li class="nav-item"><a href="{{route('home.contactUs')}}">Contact Us</a></li> 
                    

                      @if(auth()->check())
                        <li class="nav-item">
                          <a class="nav-link" href="{{auth()->user()->role == 'admin' ? route('admin.dashboard') : route('user.settings')}}">{{auth()->user()->name}}</a>
                        </li> 
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('home.logout')}}">Logout</a>
                        </li>
                        @if(auth()->user()->role == 'agent')
                        <li class="nav-item">
                          <a class="nav-link" href="#">{{route('home.refer.register',base64_encode(auth()->user()->id))}}</a>
                        </li>
                        @endif

                        @if(auth()->user()->role == 'agent')
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('home.getRefferal')}}">My Referals</a>
                        </li>
                        @endif
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('home.mywallet')}}">My Wallet</a>
                        </li> 
                    @else 
                      @php $redirect_url = Request::has('redirect_url') ? Request::get('redirect_url') : '' @endphp
                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="{{route('home.register',[
                            'redirect_url'=> $redirect_url
                            ])}}"><span class="white-color">REGISTER!</span></a>
                      </li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="{{route('home.login')}}"><span class="white-color">LOGIN!</span></a>
                      </li>
                    
                    @endif
                    </ul>
                </div>
              </nav>
          </div>         
        </div>       
    </div>
  </div>  
</header>