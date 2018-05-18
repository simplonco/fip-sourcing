<div class="panel panel-info">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <i class="fa fa-user fa-5x"></i>
                <h4>RESUME</h4>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li>Prénom: {{$candidate->first_name}}</li>
                    <li>Nom{{$candidate->name}}</li>
                    <li>Ville : {{$candidate->city}}</li>
                    <li>Statut administratif : {{$candidate->status}}</li>
                    <li>Badges : {{--à ajouter --}}</li>
                    <li>Score : {{get_score($candidate)}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>