@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">


      <div class="panel panel-info">
        <div class="panel-heading">{{__('note.note')}}</div>
        <div class="panel-body">

          {!! Form::model($note, [
            'method' => 'POST',
            'route' => ['candidateFormationSendEvaluation', $note->hero_note]
            ]) !!}


            <div class="row">
              <div class="col-md-3">
                <b>{{__('projection.hero')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->hero}}
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-md-3">
                <b>{{__('projection.dev_qualities')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->dev_qualities}}
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <br />

            <div class="row">
              <div class="col-md-3">
                <b>{{__('projection.personal_goal')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->personal_goal}}
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-md-3">
                <b>{{__('projection.dev_point')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->dev_point}}
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <br />

            <div class="row">
              <div class="col-md-3">
                <b>{{__('projection.superpower')}}  </b>
              </div>
              <div class="col-md-3">
                {{$candidate->superpower}}
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <br />

          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading">{{__('note.comment')}}</div>
          <div class="panel-body">
            {!! Form::label('comment', __('note.comment'), ['class' => 'control-label']) !!}
            {!! Form::textarea('comment', null, ['required' => true, 'class' => 'form-control']) !!}

          </div>
        </div>
        {!! Form::submit(__('general.submit'), ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

      </div>
    </div>


  </div>
</div>
</div>

@endsection
