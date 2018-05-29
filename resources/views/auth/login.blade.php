@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="panel-heading">Je n'ai pas encore de compte</div>
          <div class="col">
            <form class="form-group" role="form" method="POST" action="{{ route('send_link') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">{{__('user.choose_user.email')}}</label>
                <input id="email" type="email" class="form-control" name="email" required autofocus>

                @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Envoyer un lien de confirmation</button>
            </form>
            <div class="row">
              <h4>Kezako ?</h4>
              <p> Ceci est la plateforme pour s'inscrire à une formation Simplon...</p>
            </div>
          </div>
          <div class="panel-heading">J'ai déjà un compte</div>
          <div class="col">
            <form class="form-group" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">{{__('user.choose_user.email')}}</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif

              <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">{{__('user.choose_user.password')}}</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">
               Connexion
              </button>
                  {{--<a href="{{ route('register') }}" class="btn">{{__('auth.register')}}</a>--}}
                <a href="#">J'ai oublié mon mot de passe</a>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
