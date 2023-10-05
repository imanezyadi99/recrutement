
@extends('layouts.app1')

@section('content')

<div class="loginBox"> 
    <img class="user" src="{{URL::asset('/recrutement/img/logo.png')}}" height="100px" width="100px">
    <h3> S'inscrire</h3>
    <form action="{{ route('inscription.submit', ['job_id' => $job->id]) }}" method="post">
      @csrf
        <div class="inputBox">

            <select id="genre" class="form-control @error('genre') is-invalid @enderror" name="genre" required autocomplete="genre" autofocus>
                <option value="">Choisissez un genre</option>
                <option value="masculin" {{ old('genre') === 'masculin' ? 'selected' : '' }}>Masculin</option>
                <option value="feminin" {{ old('genre') === 'feminin' ? 'selected' : '' }}>Féminin</option>
            </select>
                        
            @error('genre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <br/>

            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Votre Nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
            
            @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="uname" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="pass" type="password" placeholder="Mot de Passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <input type="hidden" name="job_id" value="{{ $job->id }}">

        </div> 
        <button type="submit" class="login-btn">
            {{ __('Login') }}
        </button>
        </form> 
     
      
      
</div>



@endsection
