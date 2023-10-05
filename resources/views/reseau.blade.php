@extends('layouts.emploi')

@section('content')


<div class="container">
    <div class="jumbotron text-center bg-primary text-white">
      <h1 class="display-4">Réseau de Clients Donneurs d'Ordre</h1>
      <p class="lead">Description de notre réseau de clients donneurs d'ordre</p>
    </div>
  
    <div class="row" style="
">
      <div class="col-md-6">
        <div class="card mb-4" style="
    margin: -10px;
">
          <div class="card-body" style="
    padding: 60px;
">
              <h3 class="card-title">Avantages d'avoir accès à notre réseau</h3>
              <p class="card-text" style="
    font-size: 17px;
">En rejoignant notre réseau de clients donneurs d'ordre, vous bénéficierez des avantages suivants :</p><br>
              <ul class="list-group">
                <li class="list-group-item">Accès à un réseau bien établi de clients potentiels</li>
                <li class="list-group-item">Opportunités de collaboration avec des entreprises de divers secteurs</li>
                <li class="list-group-item">Augmentation de la visibilité de votre entreprise</li>
                <li class="list-group-item">Possibilité de développer de nouvelles relations commerciales et de créer des partenariats stratégiques</li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-6" style="
">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Types d'entreprises dans notre réseau</h3>
              <p class="card-text" style="
    font-size: 17px;
">Notre réseau comprend des entreprises de différents domaines d'activité, tels que :</p><br>
              <ul class="list-group">
                <li class="list-group-item">Technologie et informatique</li>
                <li class="list-group-item">Finance et services bancaires</li>
                <li class="list-group-item">Santé et sciences de la vie</li>
                <li class="list-group-item">Industrie manufacturière</li>
                <li class="list-group-item">Commerce et distribution</li>
                <li class="list-group-item">Services professionnels</li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  
    <div class="row" style="
    padding: 20px;
">
      <div class="col-md-6" style="
    padding: 25px;
">
        <div class="card mb-4" style="
    padding-bottom: 121px;
">
          <div class="card-body">
              <h3 class="card-title">Témoignages de clients satisfaits</h3>
              <p class="card-text" style="
    font-size: 17px;
">Découvrez les témoignages de clients qui ont bénéficié de notre réseau :</p><br>
              <ul class="list-group">
                <li class="list-group-item">"Grâce à votre réseau, j'ai pu trouver de nouveaux clients et développer mon activité de manière significative." - John, entrepreneur</li>
                <li class="list-group-item">"Le réseau a été une source inestimable d'opportunités de collaboration avec des entreprises de premier plan." - Sarah, dirigeante d'entreprise</li>
                <li class="list-group-item">"Je recommande vivement de rejoindre ce réseau. J'ai pu établir des relations précieuses qui ont ouvert de nouvelles perspectives pour mon entreprise." - Michael, consultant</li>
              </ul>
            </div>
        </div>
      </div>
      <br>
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">Rejoignez notre réseau</h3>
              <p class="card-text" style="
    font-size: 17px;
">Si vous souhaitez soumettre une demande pour rejoindre notre réseau ou explorer les opportunités disponibles, veuillez remplir le formulaire ci-dessous :</p>
              <form action="/contact" method="POST">
                <input type="hidden" name="_token" value="4xupsRd6jbpzl0oh14P7mQFWeAe2MdAvS1mGWTiW">                <div class="form-group is-empty">
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
