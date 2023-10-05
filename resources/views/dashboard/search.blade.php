@extends('layouts.dashboard')

@section('content')
<div class="row my-5">
  @if(session('message'))
    <div class="alert alert-success" role="alert">
      <h4 class="text-center">{{session('message')}}</h4>
    </div>
  @endif
    <div class="col-md-6 ">
        <div class="card text-center">
            <div class="card-header">
            Candidat
            </div>
            <div class="card-body">
                <div class="row p-3">
                    <div class="table-responsive">  
                      <table class="table table-striped">
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
                                <a   href="softDelete/{{$p->id}}) "><i class="fa fa-trash" aria-hidden="true"></i></a>

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




    <div class="col-md-6 ">
      <div class="card text-center">
          <div class="card-header">
          Emploi
          </div>
          <div class="card-body">
              <div class="row p-3">
                  <div class="table-responsive">  
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
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
                               {{ $s->created_at->format('m-d')}}
                             </td>
                             <td>
                                {{ $s->created_at->format('h:i')}}
                              </td>
              
                             <td>
                              <a   href="{{ route('view_job', [ 'id' => encrypt($s->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                             </td>  

                             <td>
                              <a   href="softDelete/{{$s->id}}) "><i class="fa fa-trash" aria-hidden="true"></i></a>

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
  
  


@endsection