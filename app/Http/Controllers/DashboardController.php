<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donnees_personnels;
use App\Models\Espace_candidats;
use App\Models\Job;
use App\Models\Application;


use Illuminate\Support\Facades\Storage;




class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 
    
        $candidat = donnees_personnels::paginate();

        return view('dashboard/index', compact('candidat'));
    }



    public function Emploi(){
 
    
     $application = Application::paginate();

     return view('dashboard/Emploi', compact('application'));
     
    }

    public function Recruteur(){
 
    
 $jobs = job::paginate();

 return view('dashboard/Recruteur', compact('jobs'));
 
}



 

    public function Espace(){

        $candidat = donnees_personnels::orderBy('created_at', 'desc')->get();

        return view('dashboard/Espace_candidat',compact('candidat'));
    }

    
    public function Espace_candidat(){

    $application = Application::orderBy('created_at', 'desc')->get();

    return view('dashboard/Espace_emploi',compact('application'));
     }



     public function Espace_recruteur(){

$jobs = Job::orderBy('created_at', 'desc')->get();

return view('dashboard/Espace_Recruteur',compact('jobs'));
}


  

public function view_recruteur($id){

$client = Job::findOrfail(decrypt($id));

return view('dashboard/view_recruteur',compact('client'));
}

  

    public function view_candidat($id){

        $client = donnees_personnels::findOrfail(decrypt($id));

        return view('dashboard/view_candidat',compact('client'));
    }


    public function view_job($id){

     $client = Application::findOrfail(decrypt($id));

     return view('dashboard/view_job',compact('client'));
     }


    
    public function supprimer($id_client){
        $application = Application::findOrfail(decrypt($id_client))->delete();
        return redirect('/dashboard')->with('message','Client a été supprimé avec succées');
        

    }
    
    public function softDelete($id){
        donnees_personnels::findOrfail(decrypt($id))->delete();
        return back();

    }
 
    public function search(){
        $search_text=$_GET['query'];
        $candidat=donnees_personnels::where('name','LIKE','%'.$search_text.'%')->get();
        $application=Application::where('nom','LIKE','%'.$search_text.'%')->get();

        return view('dashboard/search',compact('candidat','application'));
    }

  

}
