@extends('layouts.exemple3')

@section('content')



    <div class="container">
        <h2>Ajouter une nouvelle vidéo</h2>

        <form action="{{ route('storee') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control">
            </div>

            <div class="form-group">
                <label for="video">Vidéo</label>
                <input type="file" name="video" id="video" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>


@endsection
