@extends('layouts.propos')

@section('content')

<div class="page-header" style="background: url({{ asset('/images/propos.png') }});">

    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Vedeos</h2>
          
          </div>
        </div>
      </div>
    </div>
  </div>
<br> <br/>

<div class="container">
  <h1 class="text-center mb-4" style="font-size: 25px;">Comment réussir dans un entretien d'embauche ? </h1>
  <div class="row">
    @foreach($data as $row)
      <div class="col-md-6">
        <br> <br/>
        <div class="card mb-4">
          <div class="card-body">
            <video width="100%" controls>
              <source src="{{ asset('upload') }}/{{ $row['video'] }}" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
