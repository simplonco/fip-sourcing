@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            </div>
        </div>
    </div>
<p>COORDONNEES</p><br>
<p>Nom: {{ $details->nom->nom }}</p><br>
<p>Prénom: {{ $details->prenom->prenom }}</p><br>
<p>Date de naissance: {{ $details->date->date }}</p><br>
<p>Pays: {{ $details->pays->pays }}</p><br>
<p>Nationalité: {{ $details->national->national }}</p><br>
<span>Adresse:</span><br>
<textarea name="Adresse" rows="10" cols="50">
     {{ $details->adresse->adresse }}
</textarea><br><br>
<p>E-mail:  {{ $details->email->email }}</p><br>
<p>Numéro de téléphone:  {{ $details->tel->tel }}</p><br>
<p>Situation au moment de la candidature:  {{ $details->statut->statut }}</p><br>
<p>Numéro Pôle Emploi:  {{ $details->numpole->numpole }}</p><br>
<p>Numéro de sécurité sociale:  {{ $details->secu->secu }}</p><br>
<span>Super héros/héroïne</span><br>
<textarea name="super" rows="10" cols="50">
     {{ $details->heros->heros }}
</textarea><br><br>
<p>EXPERIENCES ET PARCOURS</p><br>
<span>Expérience avec la programmation et/ou l'informatique</span><br>
<textarea name="informatique" rows="10" cols="50">
    {{ $details->xpprog->xpprog }}
</textarea><br><br>
<span>Un "hacks" technique/informatique ou pas</span><br>
<textarea name="hacks" rows="10" cols="50">
    {{ $details->hack->hack }}
</textarea><br><br>
<p>Dernier diplôme obtenu: {{ $details->etudes->etudes }}</p><br>
<span>Le parcours</span><br>
<textarea name="parcours" rows="10" cols="50">
    {{ $details->parcours->parcours }}
</textarea><br><br>
<p>Niveau d'anglais: {{ $details->anglais->anglais }}</p><br>
<p>MOTIVATIONS</p><br>
<span>les raisons de vouloir intégrer Simplon Occitanie</span><br>
<textarea name="raisons" rows="10" cols="50">
    {{ $details->motivation->motivation }}
</textarea><br><br>
<span>Les souhaits avec les nouveaux super-pouvoirs</span><br>
<textarea name="pouvoirs" rows="10" cols="50">
    {{ $details->superpouvoirs->superpouvoirs }}
</textarea><br><br>
<p>URL bagdes Codecademy: {{ $details->codecademy->codecademy }}</p> <br>
<p>Profil Openclassrooms ou autre: {{ $details->OCR->OCR }}</p><br>
<p>Disponibilité pour suivre la formation suivie du stage: {{ $details->dispo->dispo }}</p><br>
<span>Si non, les contraintes</span><br>
<textarea name="contraintes" rows="10" cols="50">
    {{ $details->contraintes->contraintes }}
</textarea><br><br>
<span>Financement de la vie quotidienne durant la formation</span><br>
<textarea name="financement" rows="10" cols="50">
    {{ $details->financement->financement }}
</textarea><br><br>
<p>Comment avez-vous entendu parler de la formation Simplon Occitanie? {{ $details->notoriete->notoriete }}</p><br>
</div>
@endsection
