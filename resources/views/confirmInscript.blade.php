@extends('layouts.app')

@section('content')
<link rel="shortcut icon" href="{{ asset('images/css.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/html.png') }}"> 
<link rel="shortcut icon" href="{{ asset('images/js.png') }}"> 
<body>
    <div class="container">
     <section class="bord row">
         <h2>Félicitation, vous voilà aspirant Simplonien et nous vous en remerçions !</h2>
         <p>Vous avez reçus un e-mail automatique de confirmation dans <a href="#">votre boite mail</a></p>
         <img src="{{ asset('images/css.png') }}" alt="" class="css">
         <img src="{{ asset('images/html.png') }}" alt="" class="html">
         <img src="{{ asset('images/js.png') }}" alt="" class="js">
     </section>   
 </div>
</body>
@endsection
