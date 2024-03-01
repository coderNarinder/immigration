<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Best Fantasy App | Play Fantasy Cricket League & Win Real Cash – 11 Arena</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Construction Html5 Template">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
      <meta name=author content="Themefisher">
      <meta name=generator content="Themefisher Constra HTML Template v1.0">
      <link rel="icon" type="image/png" href="/frontend/images/favicon.jpg">
      <link rel="stylesheet" href="/frontend/plugins/bootstrap/bootstrap.min.css"> 
      <link rel="stylesheet" href="/frontend/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="/frontend/plugins/animate-css/animate.css">
      <link rel="stylesheet" href="/frontend/plugins/slick/slick.css">
      <link rel="stylesheet" href="/frontend/plugins/slick/slick-theme.css">  
      <link rel="stylesheet" href="/frontend/css/style.css">
      <style>
        .loader{
          position:fixed;
          width: 100%;
          height:100%;
          background:#fff;
          z-index:9999;
          display:none;
        }
      </style>
      @yield('styles')
  </head>
  <body >
    <div class="loader"></div>
  <div class="body-inner">   
    @include('home.includes.topbar')
      @yield('content') 
    @include('home.includes.footer')
  </div>
      <script src="/frontend/plugins/jQuery/jquery.min.js"></script>  
      <script src="/frontend/plugins/bootstrap/bootstrap.min.js" defer></script>  
      <script src="/frontend/plugins/slick/slick.min.js"></script>
      <script src="/frontend/plugins/slick/slick-animation.min.js"></script>  
      <script src="/frontend/plugins/colorbox/jquery.colorbox.js"></script>
      <script src="/frontend/js/script.js"></script>
      @yield('js')
  </body>
</html>

