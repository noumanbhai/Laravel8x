<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  <title>Enigma- Admin Dashboard </title>
  <!-- style start -->
  @include('admin.layout.css')
  <!-- style end -->
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>


  {{-- <div id="toaster"></div> --}}


  <div class="wrapper">
    <!-- Github Link -->
{{--     <a href="#"  target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a> --}}

<!--
====================================
——— LEFT SIDEBAR START
=====================================
-->

@include('admin.layout.sidebar')
<!--    LEFT SIDEBAR END-->

<div class="page-wrapper">
  <!-- Header start-->
  @include('admin.layout.navbar')
  <!-- Header end-->
  <div class="content-wrapper">
    <div class="content">						 
      <!-- maincontent start -->
      @yield('main')
      <!-- maincontent start -->
    </div>
  </div>
  <!-- footer start -->
  @include('admin.layout.footer')
  <!-- footer end -->
</div>
</div>
<!-- script start -->
    <script src="{{ mix('js/app.js') }}" defer></script>
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
@include('admin.layout.script')
<!-- script start -->
<script>
  

// $("document").fadeOut(1000,function(){
//     setTimeout(function(){
//        $("fadeOut() div.alert").remove();
//     }, 2000 );
// });
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});
</script>
</body>
</html>
