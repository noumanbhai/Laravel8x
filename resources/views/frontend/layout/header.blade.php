  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>En</span>igma</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          {{-- <li class="active"><a href="{{url('/')}}">Home</a></li> --}}
<li class="{{Request::is('/')?'active':''}}"> <a href="{{ url('/#hero') }}">Home</a> </li>
<li class="{{Request::is('/about')?'active':''}}"> <a href="{{ url('/#about-us') }}">Aboute</a> </li>
<li class="{{Request::is('/ervices')?'active':''}}"> <a href="{{ url('/#services') }}">Services</a> </li>
<li class="{{Request::is('/portfolio')?'active':''}}"> <a href="{{ url('/#portfolio') }}">Portfolio</a> </li>
<li class="{{Request::is('contacts')?'active':''}}"> <a href="{{ url('/contacts/#breadcrumbs') }}">Contatct</a> </li>

      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>