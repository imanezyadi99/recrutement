@extends('layouts.dashboard')

@section('content')

<div class="container box-shadows my-5">
  <div class="row ">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Les Candidats</h1>

      <a href="{{ url('/dashboard')}}" class="btn btn-info">retour</a>

    </div>
  </div>

  <div class="row p-6">
    <div class="table-responsive">  
      <table  id="candidat" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Civilite</th>
              <th scope="col">Nom Complet</th>
              <th scope="col">Adresse</th>
              <th scope="col">Ville</th>
              <th scope="col">Email</th>
              <th scope="col">Telephone</th>
              <th scope="col">CV</th>
              <th scope="col">pages</th>
              <th scope="col">created at</th>
              <th scope="col">voir</th>
            </tr>
          </thead>
          <tbody>
              @foreach($candidat as $p)
            <tr>
              <td>{{$p->civilitee}}</td>
              <td>{{$p->name}} {{$p->prenom}}</td>
              <td>{{$p->adresse}}</td>
              <td>{{$p->ville}}</td>
              <td>{{$p->email}}</td>
              <td>{{$p->tel}}</td>
          

           <td>
            <a href="{{ asset('users/' . $p->cv) }}" download="{{ $p->cv }}">Télécharger</a>

          </td>
          
              <td>

                <div class="d-flex justify-content-center">

                  @isset($p->infospersonnel) 
                   <button class="bg-success text-white me-1">1</button>
                   @else
                   <button  class="bg-danger text-white me-1">1</button>
                   @endisset
                   
               
                </div>
              </td> 

      
               <td>
                 {{ $p->created_at}}
               </td> 

           



               <td>
                <a   href="{{ route('view_candidat', [ 'id' => encrypt($p->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                 
               </td>  
              

            </tr>
            @endforeach
          </tbody>
      </table>
    </div>  
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  
  <script>
    $(document).ready(function() {
      $('#candidat').DataTable({
        "pageLength": 10,
        "language": {
         "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
       }
      });
    });
  </script>


@endsection

