@extends('layouts.app')
{{--dd(session())--}}


@section('content')
<div class="container register-login-container">
   <div class="flex-custom-container-row">
   @if(Session::has('alert-success'))
    <div class="alert alert-success">
      {{ Session::get('alert-success') }}
    </div>
  @endif
      <div class="login-register-container">

         <div class="register-container">
            <form class="form-group" role="form" method="POST" action="{{ route('send_link') }}">
               {{ csrf_field() }}
               <h4 centered>Je n'ai pas encore de compte</h4><br>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="control-label">
                     {{__('user.choose_user.email')}}
                  </label>
                  <input id="email" type="email" class="form-control" name="email" required autofocus>
                  @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}  </strong>
                     </span>
                  @endif
               </div>
               <div class="rounded-button" style="display:flex; justify-content:center; flex-direction:column;">
                  <button class="btn btn-primary" type="submit">Envoyer un lien de confirmation</button>
               </div>
            </form>
         </div>

         <div class="login-container">
            <form class="form-group" role="form" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}
               <h4 centered>J'ai déjà un compte</h4><br>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="control-label">{{__('user.choose_user.email')}}</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                     </span>
                  @endif
                  <br>
               <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="control-label">{{__('user.choose_user.password')}}</label>
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                     <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                  @endif
               </div>
               <a href="#">J'ai oublié mon mot de passe</a>
               <div class="connexion-button-container">
                  <div class="rounded-button">
                     <button type="submit" class="btn btn-primary connexion">
                        Connexion
                     </button>
                  </div>
               </div>
                     {{--<a href="{{ route('register') }}" class="btn">{{__('auth.register')}}</a>--}}
               <br>
            </div>
         </form>
         
      </div>

   </div>
</div>
@endsection
