@extends('layouts.app')

@section('content')
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
    </div>
</div>
@endsection
