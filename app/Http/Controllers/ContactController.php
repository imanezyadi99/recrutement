<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller

{
    public function showForm()
    {
      return view('site_web/contact');
    }


    public function sendEmail(Request $request)
    {
    // Validez les entrées du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'required|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Envoyez le courriel
    Mail::to('imanezyadi10@gmail.com')->send(new ContactMail($request));

    // Redirigez l'utilisateur vers la page de confirmation
    return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');

    }




}
