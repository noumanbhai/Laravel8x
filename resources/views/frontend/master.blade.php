<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Company Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<!--Css Files start  -->
@include('frontend.layout.css')
<!--Css Files end  -->
</head>

<body>
<!-- header start -->
@include('frontend.layout.header')
<!-- header end -->

  <!-- Slider start -->
  @include('frontend.layout.slider')
  <!-- Slider end -->
  <!-- End Hero -->
<!-- Main section -->
  <main id="main">
    @yield('home_section')
  </main>
  <!-- Main endsection -->

  <!--footer start  -->
  @include('frontend.layout.footer')
  <!--footer end -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


@include('frontend.layout.js')

</body>

</html>