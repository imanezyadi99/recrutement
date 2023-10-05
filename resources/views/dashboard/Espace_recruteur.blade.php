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
             Recruteur
            </div>



            <div class="card-body">
                <div class="row p-6">
                    <div class="table-responsive">  
                      <table id="recruteur" class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Poste</th>
                              <th scope="col">Nom société</th>
                              <th scope="col">Ville société</th>
                              <th scope="col">Salaire</th>
                              <th scope="col">Email</th>
                              <th scope="col">jour</th>
                              <th scope="col">heur</th>
                              <th scope="col">voir</th>
                              <th scope="col">Delete</th>
                              <th scope="col">Valider</th>
                              <th scope="col">Confirmation</th>

                              <th scope="col">Envoyer</th>



                            </tr>
                          </thead>
                          <tbody>
                              @foreach($jobs as $job)
                            <tr>
                              <td>{{$job->poste}}</td>
                              <td>{{$job->nom_societe}}</td>
                              <td>{{$job->ville_societe}}</td>
                              <td>{{$job->salaire}}</td>
                              <td>{{$job->email}}</td>


                      
                               <td>
                                 {{ $job->created_at->format('m-d')}}
                               </td>
                               <td>
                                  {{ $job->created_at->format('h:i')}}
                                </td>
                
                               <td>
                                <a   href="{{ route('view_recruteur', [ 'id' => encrypt($job->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                               </td>  

                               <td>
                                <form action="{{ route('supprimer_offre', ['id' => $job->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                            
                            <td>
                                @if ($job->valide)
                                    <span class="badge badge-success">Annonce publiée</span>
                                @else
                                <span class="badge badge-secondary">Annonce non publiée</span> <br><br/>

                                    <a href="{{ route('confirmation', ['id' => $job->id]) }}" class="btn btn-success" style="
                                        width: max-content;
                                    " >publier annonce</a>

                                @endif
                                </td>
                         

                          
                           <td>
                            @if ($job->is_running)
                                <span class="badge badge-success">Valider</span>
                            @else
                                <span class="badge badge-secondary">En attente</span> <br><br/>
                                <a href="{{ route('valider_annonce', ['id' => encrypt($job->id)]) }}" class="btn btn-danger"  style="
                                    width: max-content;
                                ">Valider</a>
                            @endif
                            </td>
                        

                           <td>
                            <a href="{{ route('envoyer_message', ['id' =>encrypt( $job->id)]) }}" class="btn btn-primary" style="
                                width: max-content;
                            ">Envoyer un message</a>
                          </td>
                        





                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                    </div>  
                  </div>
           
            </div>
            <div class="card-footer text-muted">
                <a href="{{route('Espace_recruteur')}}">Voir toute la liste</a>

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
        $('#recruteur').DataTable({
          "pageLength": 2,
          "language": {
           "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
         }
        });
      });
      </script>
    
    
  


@endsection