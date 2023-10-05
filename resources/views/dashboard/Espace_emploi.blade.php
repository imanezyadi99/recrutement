@extends('layouts.dashboard')

@section('content')

<div class="container box-shadows my-5">
  <div class="row ">
    <div class="d-flex justify-content-between align-items-center">

      <h1>Les offres d'emploi</h1>

      <a href="{{ url('/dashboard')}}" class="btn btn-info">retour</a>
    </div>
  </div>

  <div class="row p-6">
    <div class="table-responsive">  
      <table  id="job" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">CV</th>
              <th scope="col">created at</th>
              <th scope="col">voir</th>
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
                 {{ $s->created_at}}
               </td> 

               <td>
                <a   href="{{ route('view_job', [ 'id' => encrypt($s->id) ])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                 
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
      $('#job').DataTable({
        "pageLength": 10,
        "language": {
         "info": "Affichant _START_ à _END_ sur _TOTAL_ entrées"
       }
      });
    });
  </script>


@endsection

