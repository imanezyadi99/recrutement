@extends('layouts.exemple3')

@section('content')

    <div class="container">
        
        <h2>Détails de la vidéo</h2>

        <div class="video-details">

            <h3>{{ $video->titre }}</h3>

            <video src="{{ asset($video->chemin_video) }}" controls></video>
        </div>
    </div>

@endsection
