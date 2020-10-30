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

<div class="content">
     @if (session()->has('status'))
    <div class="alert alert-success" role="alert">
  {{session()->get('status')}}
</div>
    @endif
<div class="d-flex justify-content-between m-2">
    <h3>Listes des Medecins</h3>
<a href="{{url('medecins/create')}}" class="btn btn-primary">Ajouter un Nouveau Patient</a></div>
   <table class="table table-striped">
       <tr >
           <th>Code Medecin</th>
           <th>Nom Medecin</th>
           <th>N de Telephone</th>
           <th>Adresse</th>
           <th>Specialite</th>
           <th></th>
        </tr>
      @forelse ($Doctors as $Doctor)
              <tr>
            <td>{{$Doctor->id}}</td>
            <td>{{$Doctor->NomMedecin}}</td>
            <td>{{$Doctor->telMedecin}}</td>
            <td>{{$Doctor->AdresseMedecin}}</td>
            <td>{{$Doctor->specialite->label}}</td>
            <td>
                 <div class="d-flex">
                     <form action="{{route('medecins.destroy', ['medecin' =>$Doctor->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-trash-alt fa-lg" style="color:red"></i></button>&nbsp;
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez vous vraimant supprimer
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Non</button>
        <button type="submit" class="btn btn-danger">Oui</button>
      </div>
    </div>
  </div>
</div>
                </form>
             &nbsp;<a href="{{route('medecins.edit',['medecin'=>$Doctor->id])}}"><i class="fas fa-edit fa-lg btn" style="color:green"></i></a>
                
                 </div>
               
            </td>
        </tr>
      @empty
          NO DATA
      @endforelse
    
     
       
   </table>

</div>
@endsection