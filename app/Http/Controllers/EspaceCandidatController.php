<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donnees_personnels;
use App\Models\Espace_candidats;
use App\Models\User;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;


class EspaceCandidatController extends Controller
{


    public function donnees_personnel()
    {
      return view('Espace_candidat/donnees_personnel');
    }
    public function donnees_personnel_create(Request $request)
    {
 
 

    $assurance = new donnees_personnels();
    $assurance->civilitee = request('civilitee');
    $assurance->name = request('name');
    $assurance->prenom = request('prenom');
    $assurance->adresse = request('adresse');
    $assurance->ville = request('ville');
    $assurance->email = request('email');
    $assurance->tel = request('tel');
    $assurance->cv = request('cv');


    $cv_name=time().'.'.$request->cv->extension();
    $request->cv->move(public_path('users'),$cv_name);
    $assurance->cv = $cv_name;
    $assurance->save();

    $id_client = $assurance->id;

  /* $users = User::where('id','=',auth()->user()->id)->get();
    $id = auth()->user()->id;
    $create_post=auth()->user()->name;
   /* Notification::send($users,new UserRegisteredNotification($assurance->id,$assurance->civilitee,$assurance->name,$assurance->prenom,
  $assurance->adresse,$assurance->ville,$assurance->email,$assurance->tel,$assurance->cv));*/


    return redirect()->route('infos_personnel', [ 'id_client' =>encrypt( $id_client)]);

 
    }

    public function infos_personnel($id_client)
    {
      $client = decrypt($id_client);
      return view('Espace_candidat/infos_personnel' , compact('client'));
    }

    public function infos_personnel_create(Request $request)
    {
   

  
    
    $assurance = new Espace_candidats();
    $assurance->metier = request('metier');
    $assurance->donnees_personnels_id =  request('donnees_personnels_id');
    $assurance->niveau_etude = request('niveau_etude');
    $assurance->date_posted = request('date_posted');
    $assurance->année_experience = request('année_experience');




    $assurance->save();

    $id_client =  encrypt($assurance->donnees_personnels_id);

    return redirect()->route('remerciement', [ 'id_client' => $id_client]);

    }

    public function remerciement()
    {
      return view('site_web/remerciement');
    }

 

}
