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
<form class="col-12 mt-5" method="POST" action="{{route('patients.update',['patient' =>$patient->id])}}">
  @csrf
  @method('PUT')
 
<div class="form-group row">
    <label for="id" class="col-3 col-form-label ">Nom Patient</label>
    <div class="col-8">
      <input type="text" name="id" class="form-control " id="id" value="{{$patient->id}}" placeholder="Entrer le nom du patient">
    </div>
    </div>
  <div class="form-group row">
    <label for="nom" class="col-3 col-form-label ">Nom Patient</label>
    <div class="col-8">
      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" value="{{$patient->NomPatient}}" placeholder="Entrer le nom du patient">
    
    </div>
  </div>
    <div class="form-group row">
    <label for="tel"  class="col-3 col-form-label">Numero  de telephone</label>
    <div class="col-8">
      <input type="tel" name="tel" class="form-control @error('tel') is-invalid @enderror" id="tel" value="{{$patient->telPatient}}" placeholder="Entrer le numero  de telephone">
    </div>
  </div>
    <div class="form-group row">
    <label for="adresse"  class="col-3 col-form-label">Adresse</label>
    <div class="col-8">
    <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" value="{{$patient->AdressePatient}}" placeholder="Entrer l'adresse ">
    </div>
  </div>
    <div class="form-group row">
    <label for="date" class="col-3 col-form-label">Date de Naissance</label>
    <div class="col-8">
      <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="date" value="{{$patient->dob}}" placeholder="Choisir une date ">
    </div>
  </div>
  <div class="col text-center">
     <input type="submit" value="Modifier" class="btn btn-success">
    </div>
  
  
</form>
</div>
@endsection