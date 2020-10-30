@extends('layout')
@section('content')
    <style>
    .content {
        width: 65%;
        height: 500px;
       
        position: absolute; /*Can also be `fixed`*/
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        /*Solves a problem in which the content is being cut when the div is smaller than its' wrapper:*/
        max-width: 100%;
        max-height: 100%;
        overflow: auto;

    }
</style>

<div class="content border border-dark">
<form class="col-12 mt-5" method="POST" action="{{route('patients.store')}}">
  @csrf
  <div class="row mb-3 ml-5">
  <h3 >formulaire d'ajout un nouveau patient</h3>
</div>
  <div class="form-group row">
    <label for="nom" class="col-3 col-form-label ">Nom Patient</label>
    <div class="col-8">
      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" value="{{old('nom')}}" placeholder="Entrer le nom du patient">
    
    </div>
  </div>
    <div class="form-group row">
    <label for="tel"  class="col-3 col-form-label">Numero  de telephone</label>
    <div class="col-8">
      <input type="tel" name="tel" class="form-control @error('nom') is-invalid @enderror" id="tel" value="{{old('tel')}}" placeholder="Entrer le numero  de telephone">
    </div>
  </div>
    <div class="form-group row">
    <label for="adresse"  class="col-3 col-form-label">Adresse</label>
    <div class="col-8">
    <input type="text" name="adresse" class="form-control @error('nom') is-invalid @enderror" id="adresse" value="{{old('adresse')}}" placeholder="Entrer l'adresse ">
    </div>
  </div>
    <div class="form-group row">
    <label for="date" class="col-3 col-form-label">Date de Naissance</label>
    <div class="col-8">
      <input type="date" name="dob" class="form-control @error('nom') is-invalid @enderror" id="date" value="{{old('dob')}}" placeholder="Choisir une date ">
    </div>
  </div>
  <div class="col text-center">
     <input type="submit" value="Ajouter" class="btn btn-success">
    </div>
  
  
</form>
</div>
@endsection