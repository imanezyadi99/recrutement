
@extends('layouts.emploi')

@section('content')
<div class="container">
    <div class="jumbotron text-center bg-primary text-white">
      <h1 class="display-4">Management</h1>
      <p class="lead">Description de vos services de management et de formation</p>
    </div>
  
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body" style="
    padding: 35px;
">
              <h3 class="card-title">Nos services de management et de formation</h3>
              <p class="card-text" style="
    font-size: 20px;
">Nous proposons une gamme complète de services de management et de formation pour vous aider à développer vos compétences en leadership, gestion des équipes, communication, et bien plus encore.</p>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Domaines de management couverts</h3>
              <ul class="card-text" style="
    font-size: 15px;
">
                <li>Leadership</li>
                <li>Gestion des équipes</li>
                <li>Communication</li>
                <li>Gestion du changement</li>
                <li>Stratégie d'entreprise</li>
                <li>Gestion du temps</li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  
    <br>
    <div class="row">
      <div class="col-md-6" style="
    padding: 10px;
">
        <div class="card mb-4">
          <div class="card-body" style="
    padding: 35px;
">
              <h3 class="card-title">Programmes de formation</h3>
              <p class="card-text" style="
    font-size: 20px;
">Nous offrons des programmes de formation sur mesure pour répondre aux besoins spécifiques de votre entreprise. Nos formations sont animées par des experts chevronnés et incluent des sessions interactives, des études de cas et des exercices pratiques.</p>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4" style="
    padding: 15px;
">
          <div class="card-body">
              <h3 class="card-title">Cas d'études et exemples concrets</h3>
              <ul class="card-text" style="
    font-size: 17px;
    padding: 11px;
">
                <li>Amélioration de l'efficacité des équipes grâce à une meilleure communication interne</li>
                <li>Mise en place d'une stratégie de gestion du changement réussie lors d'une fusion d'entreprises</li>
                <li>Développement d'un leadership fort et inspirant pour stimuler la croissance de l'entreprise</li>
              </ul>
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
          <div class="card-body">
            <h3 class="card-title">Contactez-nous</h3>
            <form action="/contact" method="POST">
              <input type="hidden" name="_token" value="19GppjpCXjVW1UK77JOHZyi44HksYmsQHJLXJUWU">              <div class="form-group is-empty">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required="">
              <span class="material-input"></span><span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required="">
              <span class="material-input"></span><span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
              <span class="material-input"></span><span class="material-input"></span></div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  
</div>



@endsection