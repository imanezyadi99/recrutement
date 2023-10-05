<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Job;
use App\Models\Application;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JobController extends Controller
{



    public function create()
{

    return view('site_web.create');
}



public function store(Request $request)

{
    $job = new Job();
    $job->poste = request('poste');
    $job->nom_societe = request('nom_societe');
    $job->ville_societe = request('ville_societe');
    $job->description = request('description');
    $job->responsabilite = request('responsabilite');
    $job->exigence = request('exigence');
    $job->salaire = request('salaire');
    $job->nom = request('nom');
    $job->prenom = request('prenom');
    $job->email = request('email');
    $job->password = request('password');
    $job->logo_entreprise = request('logo_entreprise');
    $job->valide =false;


  

    $logo=time().'.'.$request->logo_entreprise->extension();
    $request->logo_entreprise->move(public_path('logos'),$logo);
    $job->logo_entreprise = $logo;
    $job->save();

   /* $validatedData['valide'] = false; // Nouvelle colonne "valide" définie sur false


    $job = Job::create($validatedData);*/

    /*$job= Job::create(array_merge($job, ['valide' => false]));*/

    return redirect()->route('index')->with('status', 'Offre d\'emploi créée avec succès.');

 }




public function showApplyForm($id)
{
    $job = Job::findOrFail($id);
    return view('site_web.apply', compact('job'));
}






public function submitApplication(Request $request, $id)
{
    $job = Job::findOrFail($id);
    $application = new Application();
    $application->job_id = $id;
    $application->nom = request('nom');
    $application->email = request('email');
    $application->cv = request('cv');
    
    $candidat_name=time().'.'.$request->cv->extension();
    $request->cv->move(public_path('candidats'),$candidat_name);
    $application->cv = $candidat_name;

    $application->save();

    session(['job_id' => $id]);


    return Redirect::route('index')->with('success', 'Votre candidature a été envoyée avec succès !');

}

public function detail($id)
{
    $job = Job::findOrFail($id); 

    return view('details', compact('job'));
}



}



