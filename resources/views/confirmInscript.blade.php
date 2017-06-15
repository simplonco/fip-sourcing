@extends('layouts.app')

@section('content')
<link rel="shortcut icon" href="{{ asset('images/css.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/html.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/js.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/php.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}"> 
<body>
    <div class="container">
     <img src="{{ asset('images/logo.png') }}" alt="" class="logo">
     <section class="bord row">
         <h2>Félicitation, vous voilà aspirant Simplonien et nous vous en remerçions !</h2><br>
         <img src="{{ asset('images/css.png') }}" alt="" class="css">
         <img src="{{ asset('images/html.png') }}" alt="" class="html">
         <img src="{{ asset('images/js.png') }}" alt="" class="js">
         <img src="{{ asset('images/php.png') }}" alt="" class="php">
     </section>  
     <div class="col-md-12 text-center">
         <input class="btn btn-primary" id="retourcandid" type="submit" value="Revenir sur votre candidature">
     </div>
 </div>
</body>
@endsection
