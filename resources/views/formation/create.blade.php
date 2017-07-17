@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ajouter une formation</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('formationStore') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nom</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
              <label for="description" class="col-md-4 control-label">Description de la formation</label>

              <div class="col-md-6">
                <input id="description" type="text" class="form-control" name="description" required>

                @if ($errors->has('description'))
                <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
              <label for="city" class="col-md-4 control-label">Ville</label>

              <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" required autofocus>

                @if ($errors->has('city'))
                <span class="help-block">
                  <strong>{{ $errors->first('city') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
              <label for="year" class="col-md-4 control-label">Année</label>

              <div class="col-md-6">
                <input id="year" type="text" class="form-control" name="year" required>

                @if ($errors->has('year'))
                <span class="help-block">
                  <strong>{{ $errors->first('year') }}</strong>
                </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('begin_session') ? ' has-error' : '' }}">
              <label for="begin_session" class="col-md-4 control-label">Début de la session d'inscription</label>

              <div class="col-md-6">
                <input id="begin_session" type="date" class="form-control" name="begin_session" required>

                @if ($errors->has('begin_session'))
                <span class="help-block">
                  <strong>{{ $errors->first('begin_session') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('end_session') ? ' has-error' : '' }}">
              <label for="end_session" class="col-md-4 control-label">Fin de la session d'inscription</label>

              <div class="col-md-6">
                <input id="end_session" type="date" class="form-control" name="end_session" required>

                @if ($errors->has('end_session'))
                <span class="help-block">
                  <strong>{{ $errors->first('end_session') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Ajouter une nouvelle formation
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
