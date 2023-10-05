@extends('layouts.emploi')

@section('content')

<div class="page-header" style="background: url({{ asset('/images/propos.png') }});">
    <div class="container">
        <div class="row">         
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Recruteurs, inscrivez-vous et publiez vos offres d'emploi !
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<br> <br/>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width:150%;">
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('offres-emploi.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <label for="logo_entreprise" class="form-label">{{ __('Logo de l\'entreprise') }}</label>
                            <input type="file" name="logo_entreprise" id="logo_entreprise" class="form-control{{ $errors->has('logo_entreprise') ? ' is-invalid' : '' }}" value="{{ old('logo_entreprise') }}" >
                            @if ($errors->has('logo_entreprise'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('logo_entreprise') }}</strong>
                                </span>
                            @endif
                            <span id="logo_entreprise_display"></span>
                        </div>

                        <div class="col-md-6">
                            <label for="nom_societe" class="form-label">{{ __('Nom de la société') }}</label>
                            <input type="text" name="nom_societe" id="nom_societe" class="form-control{{ $errors->has('nom_societe') ? ' is-invalid' : '' }}" value="{{ old('nom_societe') }}" required>
                            @if ($errors->has('nom_societe'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nom_societe') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="ville_societe" class="form-label">{{ __('Ville de la société') }}</label>
                            <input type="text" name="ville_societe" id="ville_societe" class="form-control{{ $errors->has('ville_societe') ? ' is-invalid' : '' }}" value="{{ old('ville_societe') }}" required>
                            @if ($errors->has('ville_societe'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ville_societe') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="poste" class="form-label">{{ __('Poste') }}</label>
                            <input type="text" name="poste" id="poste" class="form-control{{ $errors->has('poste') ? ' is-invalid' : '' }}" value="{{ old('poste') }}" required autofocus>
                            @if ($errors->has('poste'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('poste') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="description" class="form-label">{{ __('Description') }}</label>
                            <textarea name="description" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="responsabilite" class="form-label">{{ __('Responsabilites') }}</label>
                            <textarea name="responsabilite" id="responsabilite" class="form-control{{ $errors->has('responsabilite') ? ' is-invalid' : '' }}" required>{{ old('responsabilite') }}</textarea>
                            @if ($errors->has('responsabilite'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('responsabilite') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="exigence" class="form-label">{{ __('Exigences') }}</label>
                            <textarea name="exigence" id="exigence" class="form-control{{ $errors->has('exigence') ? ' is-invalid' : '' }}" required>{{ old('exigence') }}</textarea>
                            @if ($errors->has('exigence'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('exigence') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="salaire" class="form-label">{{ __('Salaire') }}</label>
                            <input type="text" name="salaire" id="salaire" class="form-control{{ $errors->has('salaire') ? ' is-invalid' : '' }}" value="{{ old('salaire') }}" required autofocus>
                            @if ($errors->has('salaire'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('salaire') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">{{ __('Nom') }}</label>
                                <input type="text" name="nom" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value="{{ old('nom') }}" required>
                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="prenom">{{ __('Prénom') }}</label>
                                <input type="text" name="prenom" id="prenom" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="{{ old('prenom') }}" required>
                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="password">{{ __('Mot de passe') }}</label>
                                <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">{{ __('Publier') }}</button>
                        </div>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
