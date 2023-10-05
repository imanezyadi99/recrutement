@extends('layouts.propos')

@section('content')

<style>
  .page-header {
    background: url({{ asset('/images/propos.png') }});
    padding: 75px;
    text-align: center;
  }

  .single-post {
    margin: 30px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .company-logo {
    text-align: center;
    margin-bottom: 20px;
  }

  .single-title {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
  }

  ul {
    list-style-type: none;
    padding-left: 0;
  }

  li {
    font-size: 18px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
  }

  .list-icon {
    width: 20px;
    margin-right: 10px;
  }
</style>

<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="product-title" style="color: #fff;">{{$job->poste}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="single-post">
  <div class="company-logo">
    <img src="{{ asset('logos/' . $job->logo_entreprise) }}" alt="Logo d'entreprise" style="width: 150px;">
  </div>
  <h4 class="single-title">Description :</h4>
  <p>{{$job->description}}</p>

  <h4 class="single-title">Responsabilités :</h4>
  <p>{{$job->responsabilite}}</p>

  <h4 class="single-title">Exigences :</h4>
  <p>{{$job->exigence}}</p>

  <h4 class="single-title">Ville Société :</h4>
  <p>{{$job->ville_societe}}</p>

  <h4 class="single-title">Salaire :</h4>
  <p>{{$job->salaire}}</p>
</div>


@endsection
