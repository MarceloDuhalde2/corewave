<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactAutoResponse;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Send email to CoreWave
            Mail::to('contacto@corewave.com.ar')->send(new ContactMessage($validated));

            // Send auto-response to sender
            Mail::to($validated['email'])->send(new ContactAutoResponse($validated));

            return redirect()->route('contact')->with('success', '¡Mensaje enviado con éxito! Te responderemos a la brevedad.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.');
        }
    }
}