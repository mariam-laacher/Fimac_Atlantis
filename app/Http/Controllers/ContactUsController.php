<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Appartement;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $appartements = Appartement::where('status', 'active')->get();
        $categories = Category::with('subCategories')->get();
        return view('contactus',compact('categories','appartements'));
    }

    public function send(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
            'appartement_id' => 'required|exists:appartements,id',
        ]);

        // Récupérer l'appartement sélectionné
        $appartement = Appartement::find($request->appartement_id);

        // Préparer les données
        $data = [
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'message'      => $request->message,
            'appartement'  => $appartement, // on passe l'objet complet
        ];

        // Envoyer l'email à l'admin
        Mail::send('emails.contact', ['data' => $data], function($message) {
            $message->to('fimacatlantis@fimacatlantis.com')
                    ->subject('Nouveau message de prise de rendez-vous');
        });

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }

}
