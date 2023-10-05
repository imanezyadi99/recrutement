@extends('layouts.dashboard')

@section('content')


<div class="container card py-5 px-4 my-5 ">
    <div class="row ">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Voici les éléments de la fiche trio :</h1>
          
          <a href="{{ url('/dashboard/Espace_candidat')}}" class="btn btn-info">retour</a>
        </div>
      </div>
    <div class="col-sm-6">
        <label for="info" >Donnees personnels: </label>
      </div>

    <div class="row p-3">

        <div class="col-sm-6">
           <p><b> Civilité: </b> {{ $client->civilitee}}</p>
           <p><b> Nom: </b> {{ $client->name}}</p>
           <p><b> Prenom: </b> {{ $client->prenom}}</p>
           <p><b> Adresse: </b> {{ $client->adresse}}</p>
           <p><b> Ville: </b> {{ $client->ville}}</p>
           <p><b> Prenom: </b> {{ $client->prenom}}</p>
           <p><b> Email: </b> {{ $client->email}}</p>
           <p><b> Telephone : </b> {{ $client->tel}}</p>
           <p><b> CV : </b> {{ $client->cv}}</p>


        </div>
    </div>


    <div class="col-sm-6">
      <label for="info" >Infos personnels: </label>
    </div>

  <div class="row p-3">

      <div class="col-sm-6">
        @isset($client->infospersonnel)
         <p><b> Metier: </b> {{ $client->infospersonnel->metier}}</p>
         <p><b> Niveau étude: </b> {{ $client->infospersonnel->niveau_etude}}</p>
         <p><b> Année Expérience: </b> {{ $client->infospersonnel->année_experience}}</p>
         <p><b> Date: </b> {{ $client->infospersonnel->date_posted}}</p>
         @else
         <p>Merci d'envoyer ce lien pour le client de continuer de saisir les champs</p>
         <a href="{{ route('infos_personnel', [ 'id_client' =>encrypt( $client->id) ])}}" class="btn btn-info">Infos Personnels</a>

          @endisset
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
              <form action="{{ route('destroy', encrypt( $client->id) ) }}" method="POST">
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