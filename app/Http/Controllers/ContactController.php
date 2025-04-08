<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Préparer les données
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
        ];

        // Envoyer l'email à l'admin
        Mail::send('emails.contact', ['data' => $data], function($message) {
            $message->to('fimacatlantis@fimacatlantis.com')
                    ->subject('Nouveau message de prise de rendez-vous');
        });
        

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
