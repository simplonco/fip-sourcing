@extends('layouts.app')

@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ajouter un formateur</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('formerAdd') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
              <label for="lastName" class="col-md-4 control-label">Nom</label>

              <div class="col-md-6">
                <input id="lastName" type="text" class="form-control" name="lastName" required autofocus>

                @if ($errors->has('lastName'))
                <span class="help-block">
                  <strong>{{ $errors->first('lastName') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
              <label for="firstName" class="col-md-4 control-label">Prénom</label>

              <div class="col-md-6">
                <input id="firstName" type="text" class="form-control" name="firstName" required autofocus>

                @if ($errors->has('firstName'))
                <span class="help-block">
                  <strong>{{ $errors->first('firstName') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Adresse e-mail</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Mot de passe</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Ajouter un nouveau formateur
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
