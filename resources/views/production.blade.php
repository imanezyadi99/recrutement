@extends('layouts.emploi')

@section('content')

<div class="container">
    <div class="jumbotron text-center bg-primary text-white">
      <h1 class="display-4">Suivi de la Production</h1>
      <p class="lead">Explication des avantages d'un suivi de production efficace</p>
    </div>
  
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Processus de suivi et de gestion de la production</h3>
              <p class="card-text" style="
    font-size: 17px;
">Nous mettons en place des processus de suivi et de gestion de la production efficaces pour optimiser votre chaîne d'approvisionnement et maximiser votre productivité. Nos méthodologies éprouvées garantissent un suivi précis des étapes de production, la gestion des stocks, la planification des ressources et l'amélioration continue.</p>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Outils et logiciels utilisés</h3>
              <p class="card-text" style="
    font-size: 18px;
">Nous utilisons des outils et des logiciels de pointe spécialement conçus pour le suivi de la production. Ces outils offrent des fonctionnalités avancées telles que la collecte et l'analyse de données en temps réel, la génération de rapports, la visualisation graphique des performances et la planification de la production.</p>
            </div>
        </div>
      </div>
    </div>
    <br>
  
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Études de cas de succès</h3>
              <p class="card-text" style="
    font-size: 18px;
">Découvrez comment notre suivi de production a aidé des entreprises à améliorer leur efficacité et leur rentabilité. Nous avons travaillé avec des clients dans divers secteurs pour optimiser leurs processus de production, réduire les temps d'arrêt, minimiser les coûts et augmenter leur capacité de production.</p>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Demande de démonstration ou de conseils</h3>
              <p class="card-text" style="
    font-size: 18px;
    padding: 12px;
">Si vous souhaitez voir une démonstration de notre suivi de production en action ou si vous avez besoin de conseils spécifiques en matière de suivi de production, n'hésitez pas à nous contacter. Nous serons ravis de vous aider et de répondre à toutes vos questions.</p>
            </div>
        </div>
      </div>
    </div>
  
    <br>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4" style="
    margin-left: 150px;
">
          <div class="card-body" style="
">
            <h3 class="card-title">Contactez-nous</h3>
            <form action="/contact" method="POST">
              <input type="hidden" name="_token" value="19GppjpCXjVW1UK77JOHZyi44HksYmsQHJLXJUWU">              <div class="form-group is-empty">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required="">
              <span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required="">
              <span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
              <span class="material-input"></span></div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  
</div>

@endsection
