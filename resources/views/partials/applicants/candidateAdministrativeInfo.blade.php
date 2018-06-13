<dl class="candidate-administrative-container">
   <div class="col-md-6">
      <div><dt>Nationalité : </dt><dd>{{$candidate->nationality}}</dd></div>
      <div><dt>Date de naissance : </dt><dd> {{$candidate->birth_date}}</dd></div>
      <div><dt>Genre : </dt><dd>{{$candidate->gender}} </dd></div>
      <div><dt>Adresse : </dt><dd>{{$candidate->address}} </dd></div>
      <div><dt>Ville : </dt><dd>{{$candidate->city}}</dd></div>
   </div>
   <div class="col-md-6">
      <div><dt>N° de déclarant : </dt><dd>{{$candidate->number_pole_emploi}}</dd></div>
      <div><dt>Pôle emploi : </dt><dd>{{$candidate->pole_emploi}}</dd></div>
      <div><dt>Dernier contrat de travail : </dt><dd>{{$candidate->cdd}}</dd></div>
      <div><dt>A connu Simplon par : </dt><dd>{{$candidate->heard_of}}</dd></div>
   </div>
</dl>
