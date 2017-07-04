@extends('layouts.app') @section('content')


<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-body">
          <div class="panel-heading">Coordonnées</div>
          <div class="form-group">
            <label>Nom : </label><input class="form-check-input" type="text" readonly value="{{ $details->nom->nom }}">
          </div>
          <div class="form-group">
            <label for="">Prénom : </label><input class="form-check-input" type="text" readonly value="{{ $details->prenom->prenom }}">
          </div>
          <div class="form-group">
            <label for="">Date de naissance : </label><input class="form-check-input" type="date" readonly value="{{ $details->date->date }}">
          </div>
          <div class="form-group">
            <label for="">Pays : </label><input class="form-check-input" type="text" readonly value="{{ $details->pays->pays }}">
          </div>
          <div class="form-group">
            <label for="">Nationalité : </label><input class="form-check-input" type="text" readonly value="{{ $details->national->national }}">
          </div>
          <div class="form-group">
            <label for="">Adresse : </label>
            <textarea class="form-control" name="Adresse" rows="10" cols="50" readonly>
              {{ $details->adresse->adresse }}
            </textarea>
          </div>
          <div class="form-group">
            <label>E-mail : </label> <input class="form-check-input" type="mail" readonly value="{{ $details->email->email }}">
          </div>
          <div class="form-group">
            <label>Numéro de téléphone : </label> <input  type="phone" class="form-check-input" readonly value="{{ $details->tel->tel }}">
          </div>
          <div class="form-group">
            <label> Situation au moment de la candidature : </label> <input type="text" class="form-check-input" readonly value="{{ $details->statut->statut }}">
          </div>
          <div class="form-group">
            <label>Numéro Pôle Emploi : </label><input type="text" class="form-check-input" readonly value="{{ $details->numpole->numpole }}">
          </div>
          <div class="form-group">
            <label>Numéro de sécurité sociale : </label> <input type="text" class="form-check-input" readonly value="{{ $details->secu->secu }}">

            <label>Super héros/héroïne</label><br>
            <textarea class="form-control" name="super" rows="10" cols="50" readonly>
              {{ $details->heros->heros }}
            </textarea>

            <br>
            <div class="panel-heading">Expériences et parcours</div>

            <label>Expérience avec la programmation et/ou l'informatique</label>
            <textarea class="form-control" name="informatique" rows="10" cols="50" readonly>
              {{ $details->xpprog->xpprog }}
            </textarea><br><br>
            <label>Un "hacks" technique/informatique ou pas</label><br>
            <label>Un "hacks" technique/informatique ou pas</label><br>
            <textarea  class="form-control" name="hacks" rows="10" cols="50" readonly>
              {{ $details->hack->hack }}
            </textarea><br>
            <label>Dernier diplôme obtenu : <label><input type="text" class="form-check-input" readonly value="{{ $details->etudes->etudes }}"><br>
              <label>Le parcours</label><br>
              <textarea class="form-control" name="parcours" rows="10" cols="50" readonly>
                {{ $details->parcours->parcours }}
              </textarea>
              <label>Niveau d'anglais : </label> <input type="text" class="form-check-input" readonly value="{{ $details->anglais->anglais }}">

              <br>

              <div class="panel-heading">Motivations</div>
              <label>les raisons de vouloir intégrer Simplon Occitanie</label><br>
              <textarea class="form-control" name="raisons" rows="10" cols="50" readonly>
                {{ $details->motivation->motivation }}
              </textarea><br><br>
              <label>Les souhaits avec les nouveaux super-pouvoirs</label><br>
              <textarea class="form-control" name="pouvoirs" rows="10" cols="50" readonly>
                {{ $details->superpouvoirs->superpouvoirs }}
              </textarea><br>
              <label>URL bagdes Codecademy : </label> <input type="url" class="form-check-input" readonly value="{{ $details->codecademy->codecademy }}">
              <label>Profil Openclassrooms ou autre : </label> <input class="form-check-input" type="text" readonly value="{{ $details->OCR->OCR }}">
              <label>Disponibilité pour suivre la formation suivie du stage : </label> <input class="form-check-input" type="text" readonly value="{{ $details->dispo->dispo }}"><br>
              <label>Si non, les contraintes</label><br>
              <textarea class="form-control" name="contraintes" rows="10" cols="50" readonly>
                {{ $details->contraintes->contraintes }}
              </textarea><br><br>
              <label>Financement de la vie quotidienne durant la formation</label><br>
              <textarea class="form-control" name="financement" rows="10" cols="50" readonly>
                {{ $details->financement->financement }}
              </textarea><br>
              <label>Comment avez-vous entendu parler de la formation Simplon Occitanie ? </label> <input class="form-check-input" type="text" readonly value="{{ $details->notoriete->notoriete }}"><br>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  {{--
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
          </div>
        </div>
      </div>
      <p>COORDONNEES</p>

    </div> --}}
    @endsection
