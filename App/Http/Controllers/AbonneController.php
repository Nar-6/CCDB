<?php

namespace App\Http\Controllers;

use App\Mail\EcrireEmail;
use App\Mail\EcrireMail;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AbonneController extends Controller
{
    public function abonnement(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:abonne,email',
            'numero' => 'required|string|unique:abonne,numero',
        ]);

        // Vérifier si l'utilisateur est déjà abonné
        $abonneExistant = Abonne::where('email', $request->email)->orWhere('numero', $request->numero)->exists();

        if (!$abonneExistant) {
            // Créer un nouvel objet Abonne avec les données du formulaire
            $abonne = new Abonne();
            $abonne->nom = $request->nom;
            $abonne->prenom = $request->prenom;
            $abonne->email = $request->email;
            $abonne->numero = $request->numero;

            // Sauvegarder l'abonné dans la base de données
            $abonne->save();

            // Rediriger vers la page d'accueil avec un message de succès
            return redirect()->route('home')->with('success', 'Vous êtes désormais abonné ! Merci.');
        }

        // Si l'utilisateur est déjà abonné, rediriger vers la page d'accueil avec un message d'information
        return redirect()->route('home')->with('info', 'Vous êtes déjà abonné.');
    }

    public function ecrireEmail(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $mailData = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Envoi de l'email
        Mail::to('ccdbassila@gmail.com')->send(new EcrireMail($mailData));

        return redirect()->back()->with('success', 'Votre e-mail a été envoyé avec succès ! Nous vous contacterons bientôt.');
    }

}
