<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title></title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />

    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />

    <!-- FAVICON -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />

    

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

</head>
<body class="" id="body">
  <div class="container d-flex flex-column justify-content-between vh-100"     style="color:margin-top:-32px">
    <div class="row justify-content-center mt-5">
      <div class="col-xl-5 col-lg-6 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="app-brand">
              <a href="/index.html">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                  <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                  <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
              </svg>
              <span class="brand-name">Enigma Dashboard</span>
            </a>
          </div>
        </div>
        <div class="card-body p-5">
          <h4 class="text-dark mb-5">Verification Email</h4>
          @if (session('status'))
          <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
          </div>
          @endif
                  <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
          <x-jet-validation-errors class="mb-4" style="color: red"/>
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="row">
             <div class="col-md-12">
               <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Resend Verification Email</button>
     <!--           <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}

              </a> -->
              <b> <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.logout') }}">
                {{ __('Logout') }}
              </a></b>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>