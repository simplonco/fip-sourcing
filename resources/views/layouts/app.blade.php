<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{__('general.title')}}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body ontouchstart>
<div class="overlay">
   <div id="app">
      
      <div class="alert-messages">
            @if(Session::has('alert-success'))
               <div class="alert alert-success">
                  {{ Session::get('alert-success') }}
               </div>
            @endif
              {{--dd(session())--}}
            @if(Session::has('alert-error'))
              <div class="alert alert-error centered alert alert-warning">
                 <i class="fas fa-exclamation-triangle"></i>{{ Session::get('alert-error') }}
              </div>
            @endif
      </div>

      @if (!Auth::guest())
      <div class="container container-medium">
         <nav class="navbar navbar-static-top">
         <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
               <img class="animated-logo logosimplon" src="{{ asset('images/simplon_pink.svg') }}" alt="">
               {{-- <span>{{__('general.title')}}</span> --}}
            </a>
            <div class="container">
               <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>

               </div>

               <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  {{-- <ul class="nav navbar-nav">
                  &nbsp;
                  </ul> --}}

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                  <li>
                     <a href="{{ route('login') }}" class="login-button">
                        <span class="fa-stack fa-lg">
                           <i class="far fa-circle fa-stack-2x"></i>
                           <i class="fas fa-user fa-stack-1x"></i>
                        </span>
                        {{__('auth.login')}}
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('register') }}" class="register-button">
                        <span class="fa-stack fa-lg">
                           <i class="far fa-circle fa-stack-2x"></i>
                           <i class="fas fa-user-plus fa-stack-1x"></i>
                        </span>
                        {{__('auth.register')}}
                     </a>
                  </li>
                  @else
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->last_name }} <span class="caret"></span>
                     </a>

                     <ul class="dropdown-menu" role="menu">
                        <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        > {{__('general.logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                     </li>
                  </ul>
                  </li>
                  @endif
                  {{-- <li>
                     <a href="{{ route('language') }}">{{session('applocale')}}</a>
                  </li> --}}
               </ul>
            </div>
         </nav>
      </div>
      @endif
      @if(Auth::guest())
      <div class="home-logo-container">
         <img class="home-logo-simplon animated-logo" src="./images/simplon_pink.svg" alt="">
      </div>
      @endif
   </div>
  @yield('content')
 
   @if (!Auth::guest())
      <div class="justified-button mobile-dp-n">
         <a href="{{ url('/home') }}" class="btn btn-primary">{{__('general.home')}}</a>
      </div>
   @else
      <div class="footer-kezako">
         <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fa fa-question fa-stack-1x fa-inverse"></i>
         </span>
         <div class="footer-kezako-description">
            <h4>Kezako ?</h4>
            <p>Ceci est la plateforme pour s'inscrire à une formation Simplon</p>
         </div>
      </div>
   @endif
   
</div>



   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>
   @if(config('app.debug') && !App::environment('production'))
      @include('debug.loginas')
   @endif
   @yield('js')
</body>
</html>
