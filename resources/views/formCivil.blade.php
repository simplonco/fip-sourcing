@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
   <form method="POST" action="">

    <fieldset class="form-group">
     <legend>Coordonnées</legend>

     <div class="col-xs-8 col-xs-offset-2">
      <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
        <div class="col-10">
          <input class="form-control" type="text" value="" id="text-input">
       </div> 
    </div>
 </div>

 <div class="col-xs-8 col-xs-offset-2">
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Nom</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="text-input">
     </div> 
  </div>
</div>

<div class="col-xs-8 col-xs-offset-2">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Date de naissance</label>
    <div class="col-10">
      <input class="form-control" type="Date" value="" id="text-input">
   </div> 
</div>
</div>
<div class="col-xs-8 col-xs-offset-2"> 
   <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Pays de naissasnce</label>
     <div class="col-10">
       <input class="form-control" type="text" value="" id="text-input">
    </div>
 </div>
</div>

<div class="col-xs-8 col-xs-offset-2">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Nationnalité</label>
    <div class="col-10">
      <input class="form-control" type="text" value="" id="text-input">
   </div> 
</div>
</div>

<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group">
   <label for="exampleTextarea">Adresse</label>
   <textarea class="form-control" id="Textarea" rows="3"></textarea>
</div>
</div>

<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">email</label>
   <div class="col-10">
     <input class="form-control" type="email" value="" id="text-input">
  </div> 
</div>
</div>

<div class="col-xs-8 col-xs-offset-2">
   <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Numéro tel où on peut joindre</label>
      <div class="col-10">
         <input class="form-control" type="tel" value="" id="text-input">
      </div> 
   </div>
</div>
</fieldset>

<fieldset class="form-group">
  <legend>Statut au moment de votre candidature (plusieurs réponses possibles)</legend>
  <div class="form-check">
   <label class="form-check-label">
      <input type="checkbox"  name="options"  value="option1">
      Elève ou étudiant
   </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox"  name="options" value="">
     Salarié
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox"  name="options" value="">
    Demandeur d'emploi indemnisé par Pôle Emploi
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="options"  value="">
    Demandeur d'emploi non indemnisé par Pôle Emploi
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="options"  value="">
    Allocataire RSA
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="options"  value="">
     Allocataire ASS
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="options" value="">
     Allocataire ASH
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="options"  value="">
    Allocataire de la Garantie jeunes de la Mission Locale
 </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="options" value="">
    Other :
 </label>
</div>
</fieldset>

<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">N° Pôle Emploi (le cas échéant)</label>
   <div class="col-10">
     <input class="form-control" type="email" value="" id="text-input">
  </div> 
</div>
</div>

<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">N° de Sécurité Sociale</label>
   <div class="col-10">
     <input class="form-control" type="email" value="" id="text-input">
  </div> 
</div>
</div>

<div class="col-xs-8 col-xs-offset-2">
 <div class="form-group row">
   <a type="submit" class="btn btn-primary" href="">Suivant</a>
</div>
</div>

</form>
</div>
</div>

@endsection
