@extends('layouts.propos')

@section('content')

    <!-- Page Header Start -->
        <div class="page-header" style="background: url({{ asset('/images/propos.png') }});">

        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">About Us</h2>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->        

      <!-- Main container Start -->  
      <div class="about section">
        <div class="container">
          <div class="row">          
            <div class="col-md-6 col-sm-12">
              <img src="{{ asset('/recrutement/img/about/img1.jpg') }}" alt="">
        
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="about-content">
                <h2 class="medium-title">QUI Sommes-Nous </h2>
                <p class="desc">
                  Nous sommes un prestataire de service, spécialisé dans la gestion des demandes du secteur privé à l'échelle internationale adoptant une stratégie innovante pour toute démarche de recrutement et de formation professionnelle.</p>
               <p>Notre mission principale est de cibler les meilleurs profils répondant aux besoins et critères des sociétés partenaires, faciliter leurs intégrations tout en garantissant la satisfaction de nos partenaires et participer à la diminution du taux national de chômage marocain.</p>
               <p>Nous nous démarquons par l’exclusivité de nos divers services, et notre objectif principal est de fournir à nos partenaires des candidatures adaptées aux critères demandés dans les meilleurs délais en utilisant un seul canal leurs permettant d'éviter les recherches via internet / Avoir des faux charges Etc…</p>
               <p>Notre maîtrise des méthodologies de recrutement par approche directe ou "headhunting" et notre savoir-faire en tant que cabinet de conseil et de recrutement nous permettent de mettre en œuvre une stratégie de recherche parfaitement ciblée.</p>
               <p>Notre premier objectif est de Créer un partenariat durable avec nos partenaires, Garantir un retour sur investissement par campagne, Comprendre les problèmes de nos clients afin d’apporter des réponses concrètes. Offrir un conseil personnalisé et un accompagnement sur le long terme.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main container End -->  
      
      <!-- Service  Section -->
      <div class="advantages-section">
        <h3 class="advantages-title">Pourquoi choisir FENIXIA HOLDING pour votre recrutement ?</h3>
        <ul class="advantages-list">
          <li class="advantage-item">
            <div class="advantage-icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="advantage-description">
              <h4 class="advantage-title">Gain de temps et d'argent</h4><br>
              <p class="advantage-text">Confiez-nous votre recrutement et gagnez du temps et de l'argent. Nous identifions rapidement des candidats qualifiés et adaptés à vos besoins, en seulement 48h à 72h.</p>
            </div>
          </li>
          <li class="advantage-item">
            <div class="advantage-icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <div class="advantage-description">
              <h4 class="advantage-title">Un recrutement rapide et efficace</h4>
              <p class="advantage-text">Avec FENIXIA HOLDING, votre recrutement est plus rapide et plus efficace, pour un meilleur retour sur investissement. Nous utilisons des méthodes innovantes pour garantir des résultats tangibles.</p>
            </div>
          </li>
          <li class="advantage-item">
            <div class="advantage-icon">
              <i class="fa fa-handshake-o"></i>
            </div>
            <div class="advantage-description">
              <h4 class="advantage-title">Un accompagnement personnalisé</h4>
              <p class="advantage-text">Notre équipe est engagée dans la réussite de votre entreprise. Nous vous offrons un accompagnement personnalisé pour pallier au turn-over, et nous garantissons un retour sur investissement rapide.</p>
            </div>
          </li>
        </ul>
      </div>
      
      <!-- Service Main Section Ends -->

      <!-- Testimonial Section Start -->
      <section id="testimonial" class="section">
        <div class="container">
          <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
              <div class="item active text-center">  
                <img class="img-member" src="{{URL::asset('recrutement/img/testimonial/img1.jpg')}}" alt=""> 
                <div class="client-info">
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> Je cherchais un nouveau défi professionnel et j'ai trouvé l'opportunité parfaite grâce à ce site de recrutement. Le processus était simple et rapide, et l'équipe de recrutement était très professionnelle et compétente. Je recommande vivement ce site à toute personne à la recherche d'un nouvel emploi  <i class="fa fa-quote-right quote-right"></i><br>  Sarah, candidate recrutée par le site.   <br>  </p>
              </div>
              <div class="item text-center">
                <img class="img-member" src="{{URL::asset('recrutement/img/testimonial/img2.jpg')}}" alt=""> 
                <div class="client-info">
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> Nous avons externalisé notre recrutement auprès de ce site et nous avons été extrêmement satisfaits des résultats. L'équipe a su comprendre nos besoins spécifiques et nous a proposé des candidats qualifiés et correspondant parfaitement à notre culture d'entreprise. Nous avons maintenant une équipe de collaborateurs compétents et engagés, grâce à leur aide <i class="fa fa-quote-right quote-right"></i><br> Maxime, responsable des ressources humaines d'une entreprise cliente   <br> </p>
              </div>
              <div class="item text-center">
                <img class="img-member" src="{{URL::asset('recrutement/img/testimonial/img3.jpg')}}" alt=""> 
                <div class="client-info">
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> Je suis très impressionné par la qualité de service offerte par ce site de recrutement. J'ai trouvé leur approche personnalisée et leur suivi rigoureux très efficaces pour répondre à mes besoins en matière de recrutement. Je recommande vivement leurs services à toute entreprise cherchant à recruter des talents de qualité <i class="fa fa-quote-right quote-right"></i><br> Thomas, dirigeant d'une entreprise cliente <br>  </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonial Section End -->

      <!-- Clients Section -->
   
      <section id="partners" style="margin: 50px;">
        <h2 style="text-align: center ; font-size:30px ; font-weight:bold">Trouvez un emploi parmi les entreprises qui recrutent</h2><br/><br/>
        <div class="partner-carousel">
          <div class="partner-slide">
            <img src="/images/recrutement10.png" alt="Logo partenaire 1">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement8.jpg" alt="Logo partenaire 2">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement1.png" alt="Logo partenaire 3">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement2.jpg" alt="Logo partenaire 4">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement3.png" alt="Logo partenaire 5">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement4.png" alt="Logo partenaire 6">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement5.png" alt="Logo partenaire 7">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement6.png" alt="Logo partenaire 8">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement7.png" alt="Logo partenaire 9">
          </div>
          <div class="partner-slide">
            <img src="/images/recrutement9.png" alt="Logo partenaire 10">
          </div>
        </div>
      </section>



      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
      <script>
      
          // Activer le carousel avec Slick
      $('.partner-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
      
      </script>
      
      
      
      
@endsection