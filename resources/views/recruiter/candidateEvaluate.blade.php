@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h4>{{__('note.note')}}</h4>
              <tr>
                <th>{{__('note.question')}}</th>
                <th>{{__('note.answer')}} </th>
                <th>{{__('note.category')}}</th>
                <th>{{__('note.not_wanted')}}</th>
                <th>{{__('note.evaluation')}}</th>
                <th>{{__('note.expected')}}</th>
              </tr>
            </thead>
            <tbody>
        {!! Form::model($note, [
          'method' => 'POST',
          'route' => ['candidateFormationSendEvaluation', $note->hero_note]
          ]) !!}

          <tr>
            <td class="col-md-2">
              <b>{{__('projection.hero')}}  </b>
            </td>
            <td class="col-md-3">
              {{$candidate->hero}}
            </td>
            <td class="col-md-2">
              {{__('note.hero_category')}}
            </td>
            <td class="col-md-2">
              {{__('note.hero_not_wanted')}}
            </td>
            <td class="col-md-1">
              {!! Form::select('hero_note', Config::get('note_constants.notes')); !!}
            </td>
            <td class="col-md-2">
              {{__('note.hero_expected')}}
            </td>
          </tr>
          <tr>
            <td class="col-md-2">
              <b>{{__('projection.dev_qualities')}}</b>
            </td>
            <td class="col-md-3">
              {{$candidate->dev_qualities}}
            </td>
            <td class="col-md-2">
              {{__('note.dev_qualities_category')}}
            </td>
            <td class="col-md-2">
              {{__('note.dev_qualities_not_wanted')}}
            </td>
            <td class="col-md-1">
              {!! Form::select('dev_qualities_note', Config::get('note_constants.notes')); !!}
            </td>
            <td class="col-md-2">
              {{__('note.dev_qualities_expected')}}
            </td>
          </tr>

          <tr>
            <td class="col-md-2">
              <b>{{__('projection.personal_goal')}}  </b>
            </td>
            <td class="col-md-3">
              {{$candidate->personal_goal}}
            </td>
            <td class="col-md-2">
              {{__('note.personal_goal_category')}}
            </td>
            <td class="col-md-2">
              {{__('note.personal_goal_not_wanted')}}
            </td>
            <td class="col-md-1">
              {!! Form::select('personal_goal_note', Config::get('note_constants.notes')); !!}
            </td>
            <td class="col-md-2">
              {{__('note.personal_goal_expected')}}
            </td>
          </tr>

          <tr>
            <td class="col-md-2">
              <b>{{__('projection.dev_point')}}  </b>
            </td>
            <td class="col-md-3">
              {{$candidate->dev_point}}
            </td>
            <td class="col-md-2">
              {{__('note.dev_point_category')}}
            </td>
            <td class="col-md-2">
              {{__('note.dev_point_not_wanted')}}
            </td>
            <td class="col-md-1">
              {!! Form::select('dev_point_note', Config::get('note_constants.notes')); !!}
            </td>
            <td class="col-md-2">
              {{__('note.dev_point_expected')}}
            </td>
          </tr>

          <tr>
            <td class="col-md-2">
              <b>{{__('projection.superpower')}}  </b>
            </td>
            <td class="col-md-3">
              {{$candidate->superpower}}
            </td>
            <td class="col-md-2">
              {{__('note.superpower_category')}}
            </td>
            <td class="col-md-2">
              {{__('note.superpower_not_wanted')}}
            </td>
            <td class="col-md-1">
              {!! Form::select('superpower_note', Config::get('note_constants.notes')); !!}
            </td>
            <td class="col-md-2">
              {{__('note.superpower_expected')}}
            </td>
          </tr>
        </tbody>
      </table>


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

@endsection
