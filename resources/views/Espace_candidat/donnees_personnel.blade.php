@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1> Trouvez votre prochain emploi rapidement grâce à notre site de recrutement innovant </h1>
    </div>
    <div class="col-md-6">
      <img src="/images/recrutement.jpg" alt="" class="img-fluid mx-auto" width="500px" >
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="card box-shadows">
      <ul>
          <li><img src="/images/coche-orange.png" width="22px" > 9 utilisateurs sur 10 recommandent le service.</li>
          <li><img src="/images/coche-orange.png" width="22px" > 9 millions d’internautes nous font confiance.</li>
         <li><img src="/images/coche-orange.png" width="22px" >  Service gratuit et sans engagement.</li>
      </ul>
    </div>
    </div>
    <div class="col-md-8">
        <legend><span class="number">1</span>Vos Coordonnées</legend>
    <form action="{{route('donnees_personnel_create')}}" method="post" enctype="multipart/form-data"  >
        <h1> Données Candidats </h1> 
        <br/>
        @csrf
      <div class="row box-shadows mb-5">
                      <div class="col-sm-6">
                      <label class="title">
                        <span class="required" aria-required="true" style="color:blue;"> Civilité </span>
                      </label>
                     </div>
                    
                      <div class="col-sm-6">
                        <div class="formBox">
                      <div class="item-cont">
                        <div class="large">
                            <div class="element-multiple" title="civilite">
                          <select id="civilite" data-no-selected="civilite *" name="civilitee" class="form-control" required="required" class="multiple" aria-required="true">
                            <option value="selectionner">Sélectionner</option>
                            <option value="Mme">Mme</option>
                            <option value="M">M</option>

                          </select>
						  
                        </div>
                      </div>
                    </div>
                   </div>
                      </div>
                     </div>
                

<div class="row box-shadows mb-5">
<div class="col-sm-6">
<label for="text" style="color:blue;"> Nom  :</label> <br/>
</div>
<div class="col-sm-6">
    <div class="formBox">
 <input type="text" name="name" class="form-control" placeholder="Nom" required=""> <br/><br/>
</div>
</div>
</div>



<div class="row box-shadows mb-5">
    <div class="col-sm-6">
<label for="text" style="color:blue;">Prénom :</label> <br/>
    </div>

<div class="col-sm-6">
    <div class="formBox">
 <input type="text" name="prenom" class="form-control" placeholder="Prenom" required=""> <br/> <br/>
</div>
</div>
</div>

<div class="row box-shadows mb-5">
    <div class="col-sm-6">
<label for="text" style="color:blue;">Adresse  :</label> <br/>
    </div>

    <div class="col-sm-6">
        <div class="formBox">
 <input type="text" name="adresse" placeholder="Adresse" class="form-control" required=""> <br/> <br/>
</div>
    </div>
</div>


<div class="row box-shadows mb-5">
    <div class="col-sm-6">
<label for="text" style="color:blue;">Ville   :</label> <br/>
    </div>

    <div class="col-sm-6">
        <div class="formBox">
 <input type="text" name="ville" class="form-control" placeholder="Ville " required=""> <br/> <br/>
</div>
    </div>
</div>



<div class="row box-shadows mb-5">
    <div class="col-sm-6">
<label for="email" style="color:blue;">Email  :</label> <br/>
    </div>
    <div class="col-sm-6">
        <div class="formBox">
 <input type="email" name="email" class="form-control" placeholder="Ex : imane@gmail.com" required=""> <br/> <br/>
</div>
    </div>
</div>


<div class="row box-shadows mb-5">
    <div class="col-sm-6">
<label for="number" style="color:blue;">Télephone :</label> <br/>
    </div>
    <div class="col-sm-6">
        <div class="formBox">
 <input type="number" name="tel" class="form-control" placeholder="0662870204" required=""> <br/>

        </div>
    </div>
</div>



<div class="row box-shadows mb-5">

  <div class="col-sm-6">
<label for="cv" style="color:blue;"> Votre Cv  : </label> <br/> <br/>
  </div>

  <div class="col-sm-6">
    <div class="formBox">
    <input class="form-control" type="file" name="cv"  ><br/><br/>

   </div>
  </div>
 </div>



     <button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>

 </form></div></div></div>
@endsection