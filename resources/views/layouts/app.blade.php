<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/css/app1.css')}}" rel="stylesheet">



    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    <!-- Scripts -->
    
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">

      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 ">
        <ul class="navbar-nav ">
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Acceuil</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/propos')}}">Qui sommes-Nous</a></li>
        </ul>
      </div>
      <div class="mx-auto order-0"><a class="navbar-brand mx-auto" href="{{url('/')}}"> <img src="{{URL::asset('images/logos/carrezconseil.png')}}" alt="" class="logo">  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2"><span class="navbar-toggler-icon"></span></button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 ">
        <ul class="navbar-nav ms-auto">
        
          <li class="nav-item"><a class="nav-link" href="{{url('/dashboard')}}">Espace Client</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
    
  <div  id="app">
    @yield('content')
  </div>
    <div class="clearfix"></div>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-secondary text-muted">
  <!-- Section: Social media -->
 <br/>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="footer">
    
      <!-- Grid row -->
      <div class="row mt-3">
        
        
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i> Finixia Holding
          </h6>
          <p>
            Trouvez votre prochaine opportunité professionnelle sur notre véritable média de recrutement en ligne au Maroc, offrant une plateforme dynamique et complète pour les chercheurs d'emploi et les employeurs à la recherche de talents

          </p>
          
        </div>
        
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Navigation
          </h6>
          <p>
            <a href="/" class="text-reset" > Acceuil</a>
          </p>
          <p>
            <a href="propos" class="text-reset">A propos de Nous</a>
          </p>
          <p>
            <a href="candidat" class="text-reset">Candidat</a>
          </p>
       
          <p>
            <a href="contact" class="text-reset">Contact</a>
          </p>
         
          @auth
          <p>
            <a href="/dashboard" class="text-reset">Espace Client</a>
          </p>
          @else
          <p>
            <a href="/dashboard" class="text-reset">Login</a>
          </p>
          @endauth
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Liens
          </h6>
          <p>
            <a href="https://www.carrezconseil.fr/"  class="text-reset">Call center</a>
          </p>
          <p>
            <a href="https://francecourtageconseil.fr/ " class="text-reset">webhelp</a>
          </p>
          <p>
            <a href="https://comparateurenligne.fr/" class="text-reset">Cob business Cob</a>
          </p>
          <p>
            <a href="https://devisassurancesenligne.fr/" class="text-reset">Axa Assurance</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-map-marker"></i>    Immeuble 489, 4ème étage, Appartement 20, Avenue Mohammed 5, Hassan, Rabat  </p>
          <p><i class="fa fa-envelope me-3"></i> direction.foenix.line@gmail.com</p>
          <p><i class="fa fa-phone me-3"></i>   06 79 00 00 01 /  05 30 02 50 00    </p>
        </div>
        <!-- Grid column -->
        
      </div>
      <!-- Grid row -->
      
      </div>
    </div>
    
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgb(51, 110, 198);">
    © Copyright 2023 | Finixia Holding | Mentions Legales
   
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer --> 

   <script src="{{URL::asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</body>
</html>



