@extends('layouts.exemple3')

@section('content')


<br/>

<div class="container">
  <h2 style="text-align: center">Liste des offres d'emploi</h2>
  <div class="job-list">
    @foreach ($jobs as $job)
      <div class="job-item">
        <div class="logo">
          @if ($job->logo_entreprise)
            <img src="{{ asset('logos/' . $job->logo_entreprise) }}" alt="Logo d'entreprise">
          @else
            <p class="no-logo">Aucun logo disponible</p>
          @endif
        </div>
        <div class="details">
          <p class="info"><span class="title">Poste:</span> {{ $job->poste }}</p>
          <p class="info"><span class="title">Description:</span> {{ $job->description }}</p>
          <a href="{{ route('inscription', ['job_id' => $job->id]) }}" class="apply-btn">Postuler</a>
          <a href="{{ route('details', $job->id) }}" class="apply-btn">Détails</a>
        </div>
      </div>
    @endforeach
  </div>
  <div class="pagination" style="display: contents;">
    {{ $jobs->withQueryString()->links('pagination::bootstrap-4') }}
  </div>
</div>






    <!-- blog Section End -->

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
      <h2 style="text-align: center ; font-size:30px ; font-weight:bold">Trouvez un emploi parmi  les entreprises qui recrutent</h2><br/><br/>
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
    

    <section id="secteurs-activites">
      <h2>Nos Secteurs d'Activités</h2>
      <div class="secteurs-container">
        <div class="secteur">
          <p><strong>Centre de relation clientèle</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des conseillers clientèle aux superviseurs de centre d'appels.</p>
        </div>
        <div class="secteur">
          <p><strong>Banque & Assurance</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des conseillers financiers aux souscripteurs d'assurance.</p>
        </div>
        <div class="secteur">
          <p><strong>Hôtellerie</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des réceptionnistes aux chefs de cuisine.</p>
        </div>
        <div class="secteur">
          <p><strong>Distribution de Biens d’équipement & produits de grande consommation</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des chefs de rayon aux responsables des achats.</p>
        </div>
        <div class="secteur">
          <p><strong>Conseil & Services</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des consultants aux chefs de projet.</p>
        </div>
        <div class="secteur">
          <p><strong>Industrie Agroalimentaire, Automobile, Chimique, Ferroviaire, Pharmaceutique</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des ingénieurs aux techniciens de maintenance.</p>
        </div>
        <div class="secteur">
          <p><strong>Energie</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des ingénieurs aux techniciens de maintenance.</p>
        </div>
        <div class="secteur">
          <p><strong>Télécom</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des ingénieurs réseau aux développeurs d'applications mobiles.</p>
        </div>
        <div class="secteur">
          <p><strong>IT</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des développeurs aux administrateurs de systèmes.</p>
        </div>
        <div class="secteur">
          <p><strong>Transport et Logistique</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des chauffeurs aux directeurs logistiques.</p>
        </div>
        <div class="secteur">
          <p><strong>Secteur Public</strong></p>
          <p>Nous recrutons des professionnels pour des postes variés, allant des administrateurs aux inspecteurs.</p>
        </div>
      </div>
      </div>
      


    </section>
    
    
   
    

     

    <!-- Client Section End -->

     <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">                
                <h2>Jobs</h2>
                <h1 class="counter">12050</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Members</h2>
                <h1 class="counter">10890</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-write"></i>
              </div>
              <div class="desc">
                <h2>Resume</h2>
                <h1 class="counter">700</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <div class="desc">
                <h2>Company</h2>
                <h1 class="counter">9050</h1>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    <div class="services-section">
      <h2>Nos Services</h2>
      <div class="services-container">
        <div class="service">
          <a href="{{ route('recrutement') }}">
              <img src="/images/recrutement.png" alt="Recrutement">
              <h3>Recrutement</h3>
              <p>Garantir un recrutement rapide et efficace.</p>
          </a>
      </div>
        <div class="service">
          <a href="{{ route('management') }}">
          <img src="/images/management.jpg" alt="Management">
          <h3>Management</h3>
          <p>Former vos équipes et garantir un suivi et une montée en compétence.</p>
          </a>
        </div>
        <div class="service">
          <a href="{{ route('production') }}">
            <img src="/images/production.png" alt="Suivi de la Production">
          <h3>Suivi de la Production</h3>
          <p>Mettre en place les processus nécessaires pour le suivi de la production.</p>
          </a>
        </div>
        <div class="service">
          <a href="{{ route('reseaux') }}">
            <img src="/images/reseau.png" alt="Réseau">
          <h3>Réseau</h3>
          <p>Un réseau de clients donneurs d’ordre qu’on peut vous proposer si vous n’en avez pas ou en cas de besoin.</p>
          </a>
        </div>
      </div>
    </div>
    














    <!-- Counter Section End -->

    <!-- Infobox Section Start -->
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












    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
 


    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: '{{ session('success') }}'
        });
    </script>
    @endif


    

    
  
 
   
@endsection
