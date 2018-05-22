<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li>Nationalité: {{$candidate->nationality}}</li>
                    <li>Date de naissance :  {{$candidate->birth_date}}</li>
                    <li>Genre: {{$candidate->gender}} </li>
                    <li>Adresse: {{$candidate->address}} </li>
                    <li>Ville : {{$candidate->city}}</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li>N° de déclarant : {{$candidate->number_pole_emploi}}</li>
                    <li>Pôle emploi : {{$candidate->pole_emploi}}</li>
                    <li>Dernier contrat de travail: {{$candidate->cdd}}</li>
                    <li>A connu Simplon par: {{$candidate->heard_of}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>