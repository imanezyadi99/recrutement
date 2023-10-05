<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Messagee;
/*use App\Models\Contact;*/
use App\Models\donnees_personnels;
use App\Models\santes_coordonnees;
use App\Models\Job;
use App\Models\Video;
use App\Models\Candidat;
use App\Models\InscriptionsRecruteur;
use App\Mail\Subject;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;







class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
{
  /* $jobs = Job::latest('created_at')->paginate(2);*/
  /*$jobs = Job::where('is_running', true)->paginate(2);*/

   $jobs = Job::where('valide', true)->paginate(2);
    return view('site_web/home', compact('jobs'));

}

  

  

    public function propos()
    {
      return view('site_web/about');
    }


   
    public function job()
    {
      return view('site_web/jobs');
    }
   



    public function exemple3()
    {

    return view('site_web/exemple3');
    }
 
    public function contact()
    {
      return view('site_web/contact');
    }

  
    /*public function contactSend(Request $request)
    {
     
    $contacts = new Contact();
    $contacts->name = request('name');
    $contacts->email = request('email');
    $contacts->subject = request('subject');
    $contacts->telephone = request('telephone');
    $contacts->message = request('message');
   
    $contacts->save();

    return redirect()->route('contactpage');
    }
    public function contactSendd()
    {
      return view('site_web/contactpagee');
    }*/

   
    public function submitInscriptionForm(Request $request, $job_id)
{
    // Validate the form data

    // Create a new candidate
    $candidat = new Candidat;
    $candidat->nom = $request->input('nom');
    $candidat->email = $request->input('email');
    $candidat->password = $request->input('password');
    $candidat->genre = $request->input('genre');

    // ... other fields

    // Save the candidate to the database
    $candidat->save();

    // Redirect to the job application page, passing the job_id parameter
    return redirect()->route('job.apply', ['id' => $job_id]);
}

    

     public function showInscriptionForm($jobId)
     {
    // Récupérer les détails de l'offre d'emploi en utilisant l'identifiant
    $job = Job::findOrFail($jobId);

    // Passer les détails de l'offre d'emploi à la vue
    return view('inscription', compact('job'));
    }

    public function candidats()
    {
      return view('inscription-candidat');
    }

    public function inscription(Request $request)
    {
       
        // Enregistrer le candidat dans la base de données
        $InscriptionsRecruteurs = new InscriptionsRecruteur;
        $InscriptionsRecruteurs->nom = $request->input('nom');
        $InscriptionsRecruteurs->email = $request->input('email');
        $InscriptionsRecruteurs->password = $request->input('password');

        // Enregistrer d'autres informations nécessaires
        $InscriptionsRecruteurs->save();

        return redirect('/offres-emploi/create')->with('success', 'Inscription réussie. Vous pouvez maintenant postuler à des offres d\'emploi.');
    }



    public function validerOffre($id)
{
    $job = Job::find(decrypt($id));
    $job->valide = true;
    $job->save();

    /*return redirect()->back()->with('message', 'Offre d\'emploi validée avec succès.');*/
    return redirect()->route('confirmation')->with('status', 'Offre d\'emploi validée avec succès.');
}

public function confirmation($id)
{
    $job = Job::find($id);
    $job->valide = true;
    $job->save();

    return redirect()->route('index');
   /* return redirect()->route('confirmation', ['id' => $id]);*/
}

public function supprimerOffre($id)
{
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect()->back()->with('status', 'Offre d\'emploi supprimée avec succès.');
}


public function envoyerMessage($id)
{
    // Récupérer l'offre d'emploi correspondante à l'identifiant
    $job = Job::find(decrypt($id));

    // Envoyer le message au recruteur
    $message = "Veuillez payer ce  montant :";

    Mail::to($job->email)->send(new Subject($message));
    // Code pour envoyer le message au recruteur

    // Rediriger avec un message de succès
    return redirect()->back()->with('message', 'Le message a été envoyé avec succès au recruteur.');
}


public function validerAnnonce($id)
{
    $job = Job::find(decrypt($id));

    // Effectuer les opérations de validation de l'annonce

    $job->is_running = true; // Définir is_running sur vrai pour indiquer l'exécution de l'annonce
    $job->save();

    // Autres actions et redirections

   /* return redirect('/dashboard/Espace_Recruteur')->back()->with('message', 'Annonce validée avec succès.');*/
   return redirect('/dashboard/Espace_Recruteur')->with('message', 'Annonce validée avec succès.');
}


   public function Vedeo()
    {
        $videos = Video::all();

        return view('video', compact('videos'));
    }


    function fetch()
    {
      $data=video::all()->toArray();
      return view('videos',compact('data'));
    }

   
    function insert(Request $request)
    {
       $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);

       $file=$request->file('video');
       $file->move('upload',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();

       $insert=new video();
       $insert->video = $file_name;
       $insert->save();

       return redirect('/fetch_video');
    }

  
  

}
