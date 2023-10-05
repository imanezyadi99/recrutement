@extends('layouts.emploi')

@section('content')

<div class="container">
    <div class="jumbotron text-center bg-primary text-white">
      <h1 class="display-4">Recrutement</h1>
      <p class="lead">Trouvez les meilleurs talents pour votre entreprise</p>
    </div>
  
    <div class="row">
      <div class="col-md-6" style="
  ">
        <div class="card mb-4" style="
  ">
          <div class="card-body" style="
      font-size: 50px;
      margin: 25px;
  ">
              <h3 class="card-title">Nos services de recrutement</h3>
              <p class="card-text" style="
              font-size: 19px;
          ">Nous proposons des services de recrutement rapides et efficaces pour vous aider à trouver les meilleurs talents pour votre entreprise.</p>
              <p class="card-text" style="
              font-size: 19px;
          ">Notre équipe dédiée met en place des stratégies de recherche ciblées, utilise des méthodes d'évaluation approfondies et s'engage à vous fournir <br> des candidats  de haute qualité qui correspondent parfaitement à vos besoins.</p>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4" style="
      font-size: 40px;
  ">
          <div class="card-body">
              <h3 class="card-title">Méthodologie de recrutement</h3>
              <p class="card-text" style="
              font-size: 19px;
          ">Nous utilisons une méthodologie éprouvée pour sélectionner les candidats qui correspondent le mieux à vos besoins. Notre processus comprend la réception des candidatures, les entretiens, les évaluations de compétences et les vérifications de références.</p>
              <p class="card-text" style="
              font-size: 19px;
          ">Nous accordons une grande importance à la compréhension de vos critères de recrutement et nous nous efforçons de vous présenter des candidats  qui non seulement possèdent les compétences requises, mais également s'alignent sur la culture et les valeurs de votre entreprise.</p>
            </div>
        </div>
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4" style="
        padding: 30px;
    ">
          <div class="card-body" style="
      font-size: 20px;
      margin: center;
      margin-right: 50px;
  ">
            <h3 class="card-title">Avantages de faire appel à notre service de recrutement</h3>
            <ul class="list-group">
              <li class="list-group-item">Accès à un vaste réseau de candidats qualifiés</li>
              <li class="list-group-item">Expertise dans l'identification des meilleurs profils pour chaque poste</li>
              <li class="list-group-item">Gain de temps grâce à notre processus de recrutement rapide</li>
              <li class="list-group-item">Réduction des coûts liés au recrutement</li>
            </ul>
          </div>
        </div>
      </div>

  <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <h3 class="card-title">Contactez-nous</h3>
            <form action="/contact" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
  </div>
  
    </div>
  </div>

@endsection
