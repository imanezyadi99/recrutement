@extends('layouts.dashboard')

@section('content')


<div class="container card py-5 px-4 my-5 ">
    <div class="row ">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Voici les éléments de la fiche trio :</h1>
          
          <a href="{{ url('/dashboard/Espace_emploi')}}" class="btn btn-info">retour</a>
        </div>
      </div>
    <div class="col-sm-6">
        <label for="info" >Donnees personnels: </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
           <p><b> Nom: </b> {{ $client->nom}}</p>
           <p><b> Email: </b> {{ $client->email}}</p>
           <p><b> CV : </b> {{ $client->cv}}</p>


        </div>
    </div>


    

     
    <div class=" m-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Supprimer
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation suppression</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Voulez-vous supprimer cette fiche de <b> {{ $client->name}} {{ $client->prenom}} </b> definitivment ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">NON</button>
              <form action="{{ route('supprimer', encrypt( $client->id) ) }}" method="POST">
                @csrf
                @method('DELETE')   
                <button type="submit" class="btn btn-danger" >OUI</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>   
</div>



@endsection