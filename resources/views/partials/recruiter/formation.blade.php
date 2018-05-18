<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="box">
                <section class="box">
                        <ul class="list-unstyled">
                            <li>{{$session->formation->description}} </li>
                            <li>{{$session->formation->name}}</li>
                            <li>Du{{$session->begin_session->format('d/m/y')}} au {{$session->end_session->format('d/m/y')}}
                            </li>
                        </ul>
                </section>
            </div>
        </div>
    </div>
</div>