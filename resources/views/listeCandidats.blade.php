@extends('layouts.app')

@section('content')

<div class="container">

  <table class="table table-striped">
    <thead>
    <p>Liste de tous les candidats dont la candidature est complète :</p>
      <tr>
        <th>Prénom, Nom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php $roletest = [];?>
    @foreach ($roles as $role)
        <?php
        $roletest[] = $role->role_id;
        ?>
        {{-- <span>{{ $role->role_id }}</span> --}}
    @endforeach
    @foreach ($candidats as $key => $candidat)
    @if($roletest[$key] == 2)
      <tr>
        <td><a href="#">( i )</a> | {{$candidat->firstName}} {{$candidat->lastName}}</td>
        <td>{{$candidat->email}}</td>
      </tr>
    @endif
    @endforeach
    </tbody>
  </table>
</div>


{{--
<div class="container">
    <div class="row">
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            Nom
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            Prénom
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            email
        </div>
    </div>
    <div class="row">
        @foreach ($roles as $role)
        <span>{{ $role->role_id }}</span>
        @endforeach
        @foreach ($candidats as $candidat)
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$candidat->lastName}}</p>
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$candidat->firstName}}</p>
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$candidat->email}}</p>
        </div>
        @endforeach
    </div> --}}
{{-- </div> --}}
@endsection