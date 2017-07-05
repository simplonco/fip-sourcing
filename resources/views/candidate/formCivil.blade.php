@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <form method="POST" action="{{ route('formEc') }}">
          {{ csrf_field() }}
          <div class="panel-heading">Coordonnées</div>
          <fieldset class="form-group">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="text-input" name="prenom" required>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Nom</label>
                <div class="col-10">
                  <input class="form-control" type="text" name='nom' required>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Date de naissance</label>
                <div class="col-10">
                  <input class="form-control" type="Date" name='date'>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Pays de naissasnce</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="text-input" name='pays' required>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Nationalité</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="text-input" name='national' required>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleTextarea">Adresse</label>
                <textarea class="form-control" id="Textarea" rows="3" name='adresse' required></textarea>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">email</label>
                <div class="col-10">
                  <input class="form-control" type="email" id="text-input" name='email' required>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="example-text-input" class="col-2 col-form-label">Numéro tel où on peut vous joindre</label>
                <div class="col-10">
                  <input class="form-control" type="tel" id="text-input" name='tel' required>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <div class="panel-heading">Statut au moment de votre candidature</div><span class="col-xs-12">(plusieurs réponses possibles)</span>
            <br>
            <br>
            <div class="col-xs-12">

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox"  name="statut" checked>
                  Elève ou étudiant
                </label>
              </div>


              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox"  name="statut">
                  Salarié
                </label>
              </div>

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox"  name="statut">
                  Demandeur d'emploi indemnisé par Pôle Emploi
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="statut">
                  Demandeur d'emploi non indemnisé par Pôle Emploi
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="statut">
                  Allocataire RSA
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="statut">
                  Allocataire ASS
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="statut">
                  Allocataire ASH
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="statut">
                  Allocataire de la Garantie jeunes de la Mission Locale
                </label>
              </div>

            </div>
          </fieldset>

          <div class="col-xs-12">
            <div class="form-group">
              <label for="example-text-input" class="col-2 col-form-label">N° Pôle Emploi (le cas échéant)</label>
              <div class="col-10">
                <input class="form-control" type="text" id="text-input" name='numpole' required>
              </div>
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label for="example-text-input" class="col-2 col-form-label">N° de Sécurité Sociale</label>
              <div class="col-10">
                <input class="form-control" type="text" id="text-input" name='secu' required>
              </div>
            </div>
          </div>

          <div class="col-xs-offset-1">
            <div class="form-group row">
              <button type="submit" class="btn btn-primary">Suivant</button>
            </div>
          </div>
        </form>

        <div class="panel-body">
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">

  </div>
</div>
@endsection
