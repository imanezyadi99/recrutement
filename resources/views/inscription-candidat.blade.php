@extends('layouts.emploi')

@section('content')

<div class="container">
    
    <h1>Inscription des recruteurs</h1>

    <form action="{{ route('candidats.inscription') }}" method="post">

  
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Ajoutez ici d'autres champs de formulaire pour les détails pertinents -->


        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>

@endsection
