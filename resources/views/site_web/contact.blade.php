
@extends('layouts.contact')

@section('content')

<div class="page-header" style="background: url({{ asset('/images/contacter.jpg') }});">

    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Contact Us</h2>
         
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Start Contact Us Section -->
 <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="medium-title">
            Contact Us
          </h2>
          <div class="information">
            <div class="contact-datails">
              <div class="icon">
                <i class="ti-location-pin"></i>
              </div>
              <div class="info">
                <h3>Address</h3>
                <span class="detail">Immeuble 489, 4ème étage, Appartement 20, Avenue Mohammed 5, Hassan, Rabat</span>
              </div>
            </div>                
            <div class="contact-datails">
              <div class="icon">
                <i class="ti-mobile"></i>
              </div>
              <div class="info">
                <h3>Phone Numbers</h3>
                <span class="detail">06 79 00 00 01 / 05 30 02 50 00 </span>
              </div>
            </div>
            <div class="contact-datails">
              <div class="icon">
                <i class="ti-location-arrow"></i>
              </div>
              <div class="info">
                <h3>Email Address</h3>
                <span class="detail">direction.foenix.line@gmail.com </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <!-- Form -->
          <form   action="{{ route('contact.submit') }}"  class="contact-form" data-toggle="validator" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control"  name="name" placeholder="Nom " required data-error="Entrer votre Nom">
                      <div class="help-block with-errors"></div>
                    </div>                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                      
                      <input type="email" class="form-control"   name="email" placeholder="admin@gmail.com" required data-error="Entrer votre Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" class="form-control"  placeholder="0662854622" name="telephone" rows="11" data-error="Entrer votre telephone" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" placeholder="Votre Sujet" name="subject" rows="11" data-error="Entrer votre Sujet" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" placeholder="Votre Message" name="message" rows="11" data-error="Entrer votre Message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit"  class="btn btn-common"> Envoyer </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div>   
                  </div>
                </div>
              </div>                     
            </div> 
          </form>
        </div>            
      </div>
    </div>
  </section>






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