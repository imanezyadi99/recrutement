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
              les candidatures 
            </div>

            <div class="card-body">
                <div class="row p-6">
                    <div class="table-responsive">  
                      <table id="candidat" class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Civilite</th>
                              <th scope="col">Nom Complet</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">pages</th>
                              <th scope="col">jour</th>
                              <th scope="col">heur</th>
                              <th scope="col">voir</th>
                              <th scope="col">Delete</th>

                            </tr>
                          </thead>
                          <tbody>
                              @foreach($candidat as $p)
                            <tr>
                              <td>{{$p->civilitee}}</td>
                              <td>{{$p->name}} {{$p->prenom}}</td>
                              <td>{{$p->tel}}</td>
                      
                             
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
                                 {{ $p->created_at->format('m-d')}}
                               </td>
                               <td>
                                  {{ $p->created_at->format('h:i')}}
                                </td>
                
                               <td>
                                <a   href="{{ route('view_candidat', [ 'id' => encrypt($p->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                               </td>  

                               <td>
                                <a href="softDelete/{{ encrypt($p->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>


                               </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                    </div>  
                  </div>
           
            </div>
            <div class="card-footer text-muted">
                <a href="{{route('Espace')}}">Voir toute la liste</a>

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
        $('#candidat').DataTable({
          "pageLength": 2,
          "language": {
           "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
         }
        });
      });
      </script>
    
  
  


@endsection