@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
     <form method="POST" action="{{ route('formEc') }}">
        {{ csrf_field() }}
        <fieldset class="form-group">
           <legend>Coordonnées</legend>
           <div class="col-xs-8 col-xs-offset-2">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
              <div class="col-10">
                <input class="form-control" type="text" value="coucou" id="text-input" name="prenom">
             </div> 
          </div>
       </div>
       <div class="col-xs-8 col-xs-offset-2">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Nom</label>
            <div class="col-10">
               <input class="form-control" type="text" value="coucou" name='nom'>
            </div> 
         </div>
      </div>
      <div class="col-xs-8 col-xs-offset-2">
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Date de naissance</label>
          <div class="col-10">
           <input class="form-control" type="Date" value="1000-12-12" name='date'>
        </div> 
     </div>
  </div>
  <div class="col-xs-8 col-xs-offset-2"> 
   <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Pays de naissance</label>
     <div class="col-10">
       <input class="form-control" type="text" value="coucou" id="text-input" name='pays' >
    </div>
 </div>
</div>
<div class="col-xs-8 col-xs-offset-2">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Nationalité</label>
    <div class="col-10">
       <input class="form-control" type="text" value="coucoullien" id="text-input" name='national'>
    </div> 
 </div>
</div>
<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group">
   <label for="exampleTextarea">Adresse</label>
   <textarea class="form-control" id="Textarea" rows="3" name='adresse' value='coucou rue coucou coucou 31coucou'></textarea>
</div>
</div>
<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">email</label>
   <div class="col-10">
      <input class="form-control" type="email" value="coucou@coucou.coucou" id="text-input" name='email'>
   </div>
</div>
</div>
<div class="col-xs-8 col-xs-offset-2">
   <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Numéro tel où on peut joindre</label>
      <div class="col-10">
         <input class="form-control" type="tel" value="0202020202" id="text-input" name='tel'>
      </div> 
   </div>
</div>
</fieldset>
<fieldset class="form-group">
  <legend>Statut au moment de votre candidature (plusieurs réponses possibles)</legend>
  <div class="form-check">
   <label class="form-check-label">
      <input type="checkbox"  name="statut"  value="etudiant" checked>
      Elève ou étudiant
   </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox"  name="statut" value="salarie">
     Salarié
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox"  name="statut" value="pole_emploi">
    Demandeur d'emploi indemnisé par Pôle Emploi
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="statut"  value="non_indemnise">
    Demandeur d'emploi non indemnisé par Pôle Emploi
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="statut"  value="rsa">
    Allocataire RSA
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="statut"  value="ass">
     Allocataire ASS
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="statut" value="ash">
     Allocataire ASH
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="statut"  value="mission">
    Allocataire de la Garantie jeunes de la Mission Locale
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="statut" value="other">
    Other :
 </label>
</div>
</fieldset>
<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">N° Pôle Emploi (le cas échéant)</label>
   <div class="col-10">
      <input class="form-control" type="text" value="1" id="text-input" name='numpole'>
   </div> 
</div>
</div>
<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">N° de Sécurité Sociale</label>
   <div class="col-10">
      <input class="form-control" type="text" value="2" id="text-input" name='secu'>
   </div> 
</div>
</div>
<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
    <button type="submit" class="btn btn-primary">Suivant</button>
 </div>
</div>
</form>
</div>
</div>
@endsection
