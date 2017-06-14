@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">

  <div class="col-md-8 col-md-offset-2">
   <h1>Coordonnées</h1>
   <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
    <div class="col-10">
     <input class="form-control" type="text" value="" id="text-input">
  </div> 
  <div class="col-md-8 col-md-offset-2">
     <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Nom</label>
      <div class="col-10">
       <input class="form-control" type="text" value="" id="text-input">
    </div> 
    <div class="col-md-8 col-md-offset-2">
       <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Date de naissance</label>
        <div class="col-10">
         <input class="form-control" type="Date" value="" id="text-input">
      </div> 
      <div class="col-md-8 col-md-offset-2"> 
         <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Pays de naissasnce</label>
          <div class="col-10">
           <input class="form-control" type="text" value="" id="text-input">
        </div>
     </div>

     <div class="col-md-8 col-md-offset-2">
       <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Nationnalité</label>
        <div class="col-10">
         <input class="form-control" type="text" value="" id="text-input">
      </div> 
   </div>

   <div class="col-md-8 col-md-offset-2">
     <div class="form-group">
      <label for="exampleTextarea">Adresse</label>
      <textarea class="form-control" id="Textarea" rows="3"></textarea>
   </div>
</div>
<div class="col-md-8 col-md-offset-2">
  <div class="form-group row">
   <label for="example-text-input" class="col-2 col-form-label">email</label>
   <div class="col-10">
    <input class="form-control" type="email" value="" id="text-input">
 </div> 
</div>
<div class="col-md-8 col-md-offset-2">
   <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Numéro tel où on peut joindre</label>
      <div class="col-10">
         <input class="form-control" type="tel" value="" id="text-input">
      </div> 
   </div>

</div>

</div>

</div>
</div>
</div>
@endsection
