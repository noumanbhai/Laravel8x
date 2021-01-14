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


  <div id="toaster"></div>


  <div class="wrapper">
    <!-- Github Link -->
    <a href="#"  target="_blank" class="github-link">
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
    </a>

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
@include('admin.layout.script')
<!-- script start -->
</body>
</html>
