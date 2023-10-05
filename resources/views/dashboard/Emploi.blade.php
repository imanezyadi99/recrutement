@extends('layouts.dashboard')

@section('content')

<div class="row my-5">
  @if(session('message'))
    <div class="alert alert-success" role="alert">
      <h4 class="text-center">{{session('message')}}</h4>
    </div>
  @endif

    <div class="col-md-12 ">
        <div class="card text-center">

            <div class="card-header">
              Offre d'emploi
            </div>



            <div class="card-body">
                <div class="row p-6">
                    <div class="table-responsive">  
                      <table id="job" class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Nom</th>
                              <th scope="col">Email</th>
                              <th scope="col">CV</th>
                              <th scope="col">jour</th>
                              <th scope="col">heur</th>
                              <th scope="col">voir</th>
                              <th scope="col">Delete</th>

                            </tr>
                          </thead>
                          <tbody>
                              @foreach($application as $s)
                            <tr>
                              <td>{{$s->nom}}</td>
                              <td>{{$s->email}}</td>
                      
                              <td>
                              <a href="{{ asset('candidats/' . $s->cv) }}" download="{{ $s->cv }}">Télécharger</a>
                              </td>
                             
                               <td>
                                 {{ $s->created_at->format('m-d')}}
                               </td>
                               <td>
                                  {{ $s->created_at->format('h:i')}}
                                </td>
                
                               <td>
                                <a   href="{{ route('view_job', [ 'id' => encrypt($s->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                               </td>  

                               <td>
                                <a href="softDelete/{{ encrypt($s->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>


                               </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                    </div>  
                  </div>
           
            </div>
            <div class="card-footer text-muted">
                <a href="{{route('Espace_candidat')}}">Voir toute la liste</a>

            </div>
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
        $('#job').DataTable({
          "pageLength": 2,
          "language": {
           "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
         }
        });
      });
      </script>
    
  
  


@endsection