@extends('frontend.master')
{{-- @section('home_section') --}}
@section('home_section')


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
<div class="container" id="contacts">

<div class="d-flex justify-content-between align-items-center">
<h2>Contact</h2>
<ol>
<li><a href="/">Home</a></li>
<li>Contact</li>
</ol>
</div>

</div>
</section><!-- End Breadcrumbs -->

@if($contacts->count())
<center><div class="map-section m-0">

<div class="row" > 
<div class="col-md-12">
{!! $contacts->first()->map !!}
</div>
</div>
</div></center>

<section id="contact" class="contact">
<div class="container">

<div class="row justify-content-center" data-aos="fade-up">

<div class="col-lg-10">

<div class="info-wrap">
<div class="row">
<div class="col-lg-4 info">
<i class="icofont-google-map"></i>
<h4>Location:</h4>
<p>{!! $contacts->first()->address !!}</p>
</div>

<div class="col-lg-4 info mt-4 mt-lg-0">
<i class="icofont-envelope"></i>
<h4>Email:</h4>
<p>{!! $contacts->first()->email !!}</p>
</div>

<div class="col-lg-4 info mt-4 mt-lg-0">
<i class="icofont-phone"></i>
<h4>Call:</h4>
<p>{!! $contacts->first()->contact !!}</p>
</div>
</div>
</div>
@else
  <p class="notfound mt-2">
  Not data found
  </p>
 @endif
</div>

</div>

<div class="row mt-5 justify-content-center" data-aos="fade-up" id="pak">
<div class="col-lg-10" >
<div class="php-email-form">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button> 
<strong>{{ $message }}</strong>
</div>
@endif
<form action="{{route('form.store')}}" method="POST" role="form" class="contact">

@csrf                        
<div class="form-row">
<div class="col-md-6 form-group">
<input type="text" name="name" class="form-control"  placeholder="Your Name" />
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="col-md-6 form-group">
<input type="email" class="form-control" name="email"  placeholder="Your Email"  />
@error('email')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Subject" />
@error('subject')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
@error('message')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="text-center mb-2">
<button class="btn btn-primary" type="submit">Submit</button>
{{-- <input type="submit" name="submit" class="btn btn-primary"> --}}
{{-- style="    
background: #1bbd36;
border: 0;
padding: 10px 24px;
color: #fff;
transition: 0.4s;
border-radius: 4px;">
--}}{{-- <a class="btn" type="submit">ok</a> --}}
</div>
</form>
</div>
</div>

</div>

</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection