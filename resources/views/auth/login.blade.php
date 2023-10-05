@extends('layouts.app1')

@section('content')

<div class="loginBox"> 
    <img class="user" src="{{URL::asset('/recrutement/img/logo.png')}}" height="100px" width="100px">
    <h3>Sign in here</h3>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="inputBox">
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

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            
        </div> 
        <button type="submit" class="login-btn">
            {{ __('Login') }}
        </button>
        </form> 
     
      
    
</div>
@endsection
