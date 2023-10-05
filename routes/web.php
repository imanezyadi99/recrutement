<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EspaceCandidatController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Models\Video;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Espace_candidat', [EspaceCandidatController::class, 'donnees_personnel'])->name('donnees_personnel');
Route::post('/Espace_candidat', [EspaceCandidatController::class, 'donnees_personnel_create'])->name('donnees_personnel_create');

Route::get('/Espace_candidat/coordonnees/{id_client}', [EspaceCandidatController::class, 'infos_personnel'])->name('infos_personnel');
Route::post('/Espace_candidat/coordonnees', [EspaceCandidatController::class, 'infos_personnel_create'])->name('infos_personnel_create');

Route::get('/Espace_candidat/remerciement', [EspaceCandidatController::class, 'remerciement'])->name('remerciement');




    
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/home', [HomeController::class, 'indexSend'])->name('indexsend');
Route::post('/message-recu', [HomeController::class, 'indexSend'])->name('indexpage');
Route::get('/message-recu', [HomeController::class, 'indexSendd'])->name('indexpagee');
Route::get('/propos', [HomeController::class, 'propos'])->name('propos');
Route::get('/jobs', [HomeController::class, 'job'])->name('job');

/*Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSend'])->name('contactsend');

Route::post('/merci-pour-message', [HomeController::class, 'contactSend'])->name('contactpage');
Route::get('/merci-pour-message', [HomeController::class, 'contactSendd'])->name('contactpagee');*/




Route::get('/contact', 'ContactController@showForm')->name('contact.form');
Route::post('/contact', 'ContactController@sendEmail')->name('contact.submit');



Route::post('/merci-pour-votre-message', [HomeController::class, 'santeSend'])->name('santepage');
Route::get('/merci-pour-votre-message', [HomeController::class, 'santeSendd'])->name('santepagee');



Auth::routes([
    'register'=>true,
    'reset'=>false,
    'verify'=>false,

]);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboardindex');

Route::get('/dashboard/Espace_candidat', [DashboardController::class, 'Espace'])->name('Espace');

Route::get('/dashboard/view_candidat/{id}', [DashboardController::class, 'view_candidat'])->name('view_candidat');

Route::delete('/dashboard/view_candidat/{id_client}', [DashboardController::class, 'destroy'])->name('destroy');


Route::get('/offres-emploi/create', 'App\Http\Controllers\JobController@create') ->name('offres-emploi.create');

 Route::post('/offres-emploi', 'JobController@store')->name('offres-emploi.store');


 Route::get('/job/apply/{id}', 'JobController@showApplyForm')->name('job.apply');

 Route::post('/job/apply/{id}', 'JobController@submitApplication')->name('job.apply.submit');



 Route::get('/dashboard/Emploi', [DashboardController::class, 'Emploi'])->name('dashboardEmploi');


 Route::get('/dashboard/Espace_emploi', [DashboardController::class, 'Espace_candidat'])->name('Espace_candidat');


 Route::get('/dashboard/view_job/{id}', [DashboardController::class, 'view_job'])->name('view_job');

 Route::delete('/dashboard/view_job/{id_client}', [DashboardController::class, 'supprimer'])->name('supprimer');





Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout1');
Route::get('/test', [HomeController::class, 'test']);

Route::get('/testt', function(){
    Auth::user()->unreadNotifications->markAsRead();
})->name('markRead');

Route::get('/softDelete/{id}',[DashboardController::class, 'Softdelete'])->name('Softdelete');

Route::get('/search',[DashboardController::class, 'search'])->name('search');



Route::get('/exemple3', [HomeController::class, 'exemple3']);


Route::post('/exemple3', [UserSubscriptionController::class, 'postSubscribe'])->name('postSubscribe');
Route::post('/auto', [UserSubscriptionController::class, 'autoSubscribe'])->name('autoSubscribe');
Route::post('/propos', [UserSubscriptionController::class, 'proposSubscribe'])->name('proposSubscribe');
Route::post('/sante', [UserSubscriptionController::class, 'santeSubscribe'])->name('santeSubscribe');

Route::get('/exemple3', [UserSubscriptionController::class, 'getSubscribe'])->name('getSubscribe');
Route::get('/subscribe', [UserSubscriptionController::class, 'subscribe'])->name('subscribe');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('reset-password', '\App\Http\Controllers\Auth\ResetPasswordController@update')->name('password.update');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');



Route::get('/job/apply/{id}', 'JobController@showApplyForm')->name('job.apply');

Route::post('/job/apply/{id}', 'JobController@submitApplication')->name('job.apply.submit');


Route::post('/inscription/{job_id}', 'HomeController@submitInscriptionForm')->name('inscription.submit');
Route::get('/inscription/{job_id}', 'HomeController@showInscriptionForm')->name('inscription');


Route::get('/inscription-candidat', [HomeController::class, 'candidats'])->name('candidats');

Route::post('/candidat/inscription', [HomeController::class, 'inscription'])->name('candidats.inscription');

Route::get('/offres-emploi/create', 'App\Http\Controllers\JobController@create') ->name('offres-emploi.create');

 Route::post('/offres-emploi', 'JobController@store')->name('offres-emploi.store');



 

 Route::get('/dashboard/Recruteur', [DashboardController::class, 'Recruteur'])->name('dashboardRecruteur');


 Route::get('/dashboard/Espace_Recruteur', [DashboardController::class, 'Espace_recruteur'])->name('Espace_recruteur');

 Route::get('/dashboard/view_recruteur/{id}', [DashboardController::class, 'view_recruteur'])->name('view_recruteur');

 Route::delete('/dashboard/view_recruteur/{id_client}', [DashboardController::class, 'eliminer'])->name('eliminer');

 Route::post('/valider-offre/{id}', [HomeController::class, 'validerOffre'])->name('valider_offre');

 /*Route::get('/confirmation', [HomeController::class, 'confirmation'])->name('confirmation');*/

 Route::get('/confirmation/{id}', [HomeController::class, 'confirmation'])->name('confirmation');

 Route::delete('/supprimer_offre/{id}', [HomeController::class, 'supprimerOffre'])->name('supprimer_offre');

 Route::get('/envoyer-message/{id}', 'HomeController@envoyerMessage')->name('envoyer_message');

 Route::get('/annonces/{id}/valider', 'HomeController@validerAnnonce')->name('valider_annonce');



 Route::get('/videos', 'HomeController@Vedeo')->name('videos');
 Route::post('/insert_video',[App\Http\Controllers\HomeController::class,'insert'])->name('insert.file');
 Route::get('/videos',[App\Http\Controllers\HomeController::class,'fetch']);

 Route::get('/recrutementt', 'RecrutementController@index')->name('recrutement');
 Route::get('/managementt', 'RecrutementController@managementt')->name('management');
 Route::get('/productionn', 'RecrutementController@productionn')->name('production');
 Route::get('/reseauxx', 'RecrutementController@reseauxx')->name('reseaux');

 Route::get('/jobs/{id}', [JobController::class, 'detail'])->name('details');












