@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row d-flex align-items-center">
    <div class="col-md-6">
      <h1> Trouvez votre prochain emploi rapidement grâce à notre site de recrutement innovant</h1>
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
    <legend><span class="number">2</span> Votre profil </legend>
    <form action="{{route('infos_personnel_create', $client)}}" method="post" >
        <h1> Informations Candidats  </h1> 
        <br/>  
       @csrf
    <div class="row box-shadows mb-5">
    <input type="number" value="{{ $client }}" name="donnees_personnels_id" hidden>

    <div class="col-sm-6">
      <label for="text" style="color:blue;"> Votre Métier : </label> <br/>    
     </div>

     <div class="col-sm-6">
      <div class="formBox">
        
      <div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault11" value="Achat">
  <label class="form-check-label" for="flexRadioDefault11">
  Achats
  </label>
 
</div>
<div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault12" value="Commerciale">
  <label class="form-check-label" for="flexRadioDefault12">
  Commerciale,vente
  </label>
 
</div>
<div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault13" value="Gestion">
  <label class="form-check-label" for="flexRadioDefault13">
  Gestion, Comptabilité,Finance
  </label>
 
</div><div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault14" value="Informatique">
  <label class="form-check-label" for="flexRadioDefault14">
  Informatiques,nouvelles technologies
  </label>
 
</div><div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault15" value="Marketing">
  <label class="form-check-label" for="flexRadioDefault15">
  Marketing,Communication
  </label>
 
</div><div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault16" value="RH">
  <label class="form-check-label" for="flexRadioDefault16">
  RH, Formation
  </label>
 
</div><div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault17" value="Secretaire">
  <label class="form-check-label" for="flexRadioDefault17">
  Secrétaire,Assistante
  </label>
 
</div><div class="form-check check-box">
  <input class="form-check-input" type="radio" name="metier" id="flexRadioDefault18" value="Telemarketing">
  <label class="form-check-label" for="flexRadioDefault18">
  Télémarketing,Téléassistance
  </label>
 
</div>

</div>
     </div>
    </div>



    
    <div class="row box-shadows mb-5">
      <div class="col-sm-6">
   <label for="text" style="color:blue;"> Quelle est votre niveau d'étude ? </label> <br/>  
      </div>   

<div class="col-sm-6">

<div class="formBox">

<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault19" value="pas important">
<label class="form-check-label" for="flexRadioDefault19">
Pas important
</label>
</div>
<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault20" value="Niveau Bac" checked>
<label class="form-check-label" for="flexRadioDefault20">
Niveau Bac
</label>
</div>
<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault21" value="Bac+2">
<label class="form-check-label" for="flexRadioDefault21">
Bac+2
</label>
</div>
<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault22" value="Bac+3" checked>
<label class="form-check-label" for="flexRadioDefault22">
Bac+3
</label>
</div>
<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault23" value="Bac+4" checked>
<label class="form-check-label" for="flexRadioDefault23">
Bac+4
</label>
</div>
<div class="form-check check-box">
<input class="form-check-input" type="radio" name="niveau_etude" id="flexRadioDefault24" value="Bac+5" checked>
<label class="form-check-label" for="flexRadioDefault24">
Bac+5
</label>
</div>

</div>
</div>
  </div>

  <div class="row box-shadows mb-5">
    <div class="col-sm-6">
    <label for="text"style="color:blue;" > Année d'éxpérience : </label> <br/>     
    </div>

    <div class="col-sm-6">
   <div class="formBox">  
    <div class="form-check check-box">
  <input class="form-check-input" type="radio" name="année_experience" id="flexRadioDefault25" value="Etudiant">
  <label class="form-check-label" for="flexRadioDefault25">
  Etudiant,Jeune diplomé
  </label>
   </div>
   <div class="form-check check-box">
  <input class="form-check-input" type="radio" name="année_experience" id="flexRadioDefault26" value="debutant moins 2ans" checked>
  <label class="form-check-label" for="flexRadioDefault26">
  Débutant < 2ans
  </label>
   </div>
   <div class="form-check check-box">
    <input class="form-check-input" type="radio" name="année_experience" id="flexRadioDefault27" value="experience entre 2 ans et 5ans" checked>
    <label class="form-check-label" for="flexRadioDefault27">
    Expérience entre 2 ans et 5 ans
    </label>
     </div>
     <div class="form-check check-box">
      <input class="form-check-input" type="radio" name="année_experience" id="flexRadioDefault28" value="experience entre 5 ans et 10 ans" checked>
      <label class="form-check-label" for="flexRadioDefault28">
      Expérience entre 5 ans et 10 ans 
      </label>
       </div>
       <div class="form-check check-box">
        <input class="form-check-input" type="radio" name="année_experience" id="flexRadioDefault29" value="experience plus 10 ans" checked>
        <label class="form-check-label" for="flexRadioDefault29">
        Expérience > 10 ans
        </label>
         </div>

    </div>
    </div>


     </div>




    <div class="row box-shadows mb-5">
        <div class="col-sm-6">
     <label for="date" style="color:blue;"> Date postulée : </label>
        </div>

        <div class="col-sm-6">
        <div class="formBox">
     <input type="date" class="form-control" name="date_posted" ><br/><br/>
       </div>
        </div>
    </div>






 
     

     <button type="submit" class="btn-valider mb-5"> VALIDER ET CONTINUER </button>

 </form>
@endsection