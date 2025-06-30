<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactForm;
use App\Mail\ContactConfirmation;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'service' => 'required|in:Développement Web,Design UI/UX,Identité Visuelle,Optimisation SEO',
            'message' => 'required|string|max:1000',
        ]);

        // Enregistrement
        Contact::create($validated);

        // Envoi des e-mails
        Mail::to('alexis07ki@gmail.com')->send(new ContactForm($validated));
        Mail::to($validated['email'])->send(new ContactConfirmation($validated));

        return response()->json(['message' => 'Message envoyé avec succès !']);
    }
}
