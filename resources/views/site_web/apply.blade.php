@extends('layouts.emploi')

@section('content')

    
<div class="page-header" style="background: url({{ asset('/recrutement/img/banner1.jpg') }});">

    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Postuler sur l'offre d'emploi</h2>
           
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
        <div class="card" style="
        margin-top: 50px;
    ">
            <div class="card-header">
                <h1 class="card-title">Postuler pour l'offre d'emploi "{{ $job->titre }}"</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('job.apply.submit', $job->id) }}" enctype="multipart/form-data"  >
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="cv">CV</label>
                        <input type="file" name="cv" class="form-control" id="cv" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer la candidature</button>
                </form>
            </div>
        </div>
    </div>
@endsection
