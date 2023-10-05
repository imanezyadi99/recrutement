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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('recrutement/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/bootstrap.min.css')}}" >    
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/jasny-bootstrap.min.css')}}" >  
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/bootstrap-select.min.css')}}" >  
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/material-kit.css')}}" >
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/fonts/font-awesome.min.css')}}" > 
    <link rel="stylesheet" href="{{URL::asset('recrutement/fonts/themify-icons.css')}}"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/extras/animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/extras/owl.carousel.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('recrutement/extras/owl.theme.css')}}" >
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/extras/settings.css')}}"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/slicknav.css')}}" >
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/main.css')}}" >
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{URL::asset('recrutement/css/responsive.css')}}">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('recrutement/css/colors/red.css')}}" media="screen" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

    
    <!-- Scripts -->
</head>
<body>

     <!-- Header Section Start -->
     <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <div class="logo-menu">
            <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="/"><img src="{{URL::asset('/recrutement/img/logo.png')}}" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                   <!-- Start Navigation List -->
                  <ul class="nav navbar-nav">
                    <li>
                      <a class="active" href="/">
                      Home 
                      </a>

                    </li>
                    <li>
                      <a href="/Espace_candidat">
                      Espace Candidat
                      </a>
                      
                       
        
                    </li>

                    <li>
                        <a href="/propos">
                        Qui sommes-Nous ?
                        </a>
                        
                    </li>

                   
                    <li>
                        <a href="/contact">
                        Contact
                        </a>
                        
                    </li>

                    <li>
                      <a href="/dashboard">
                      Espace Recruteur
                      </a>
                      
                  </li>

                  
               

                <li>
                  <a href="/offres-emploi/create">Postuler une annonce</a>
              </li>

              <li>
                <a href="/videos">Nos Videos</a>
            </li>
                 
                </div>
              </div>
            </nav>
          </div>

     
        </section>
        <!-- end intro section -->
        </div>
        
            
    
   
              <!-- Mobile Menu Start -->
              <!-- Mobile Menu End --> 
            </nav>
            
      <!-- Header Section End -->    

        


<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

       <div id="app">      
        @yield('content')
        </div>

        <!--====== BLOG PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title"><img src="{{URL::asset('/recrutement/img/logo.png')}}" class="img-responsive" alt="Footer Logo"></h3>
                <div class="textwidget">
                  <p>Trouvez votre prochaine opportunité professionnelle sur notre véritable média de recrutement en ligne au Maroc, offrant une plateforme dynamique et complète pour les chercheurs d'emploi et les employeurs à la recherche de talents</p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Navigation</h3>
  							<ul class="menu">
                  <li>
                    <a href="/">Accueil</a>
                  </li>
                  <li>
                    <a href="/Espace_candidat">Espace Candidat</a>
                  </li>
                  <li>
                    <a href="/propos">Qui sommes-Nous</a>

                  </li>
                  <li>
                    <a href="/contact">Contact</a>

                  </li>
                  @auth
                   <li>
                   <a href="/dashboard">Espace Recruteur</a>
                    </li>
                     @else
                     <li>
                     <a href="/dashboard">Login</a>
                     </li>
                 @endauth
                </ul>
    					</div>
    				</div>

    	


            <div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
                <h3 class="block-title">Liens</h3>
                <ul class="menu">
                  <li><a href="#">Android Developer</a></li>
                  <li><a href="#">Senior Accountant</a></li>
                  <li><a href="#">Frontend Developer</a></li>
                  <li><a href="#">Junior Tester</a></li>
                  <li><a href="#">Project Manager</a></li>
                </ul>
              </div>
    				</div>


            <div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
                <h3 class="block-title">Contactez-Nous</h3>
                <ul class="menu">
                  <li>
                    <a class='bx bxs-phone-call'>
                      06 79 00 00 01 /  05 30 02 50 00  
                       
                    </a>
                  </li>

                  <li>
                    <a class='bx bx-envelope'>
                      direction.foenix.line@gmail.com
                    </a>
                </li>

                <li> 
                    <a class='bx bxs-location-plus'>
                      Immeuble 489, 4ème étage, Appartement 20, Avenue Mohammed 5, Hassan, Rabat
                    </a>
                </li>
                
                </ul>
              </div>
    				</div>
    			
    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
  
    	<!-- Copyright End -->

    </footer>
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->

   
    <script src="{{URL::asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

          
      <!-- Main JS  -->
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery-min.js')}}"></script>      
      <script type="text/javascript" src="{{URL::asset('recrutement/js/bootstrap.min.js')}}"></script>    
      <script type="text/javascript" src="{{URL::asset('recrutement/js/material.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/material-kit.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery.parallax.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/owl.carousel.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery.slicknav.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/main.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery.counterup.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/waypoints.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jasny-bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/bootstrap-select.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/form-validator.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/contact-form-script.js')}}"></script>    
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery.themepunch.revolution.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('recrutement/js/jquery.themepunch.tools.min.js')}}"></script>
  






</body>
</html>
