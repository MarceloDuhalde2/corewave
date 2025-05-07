<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Aquí puedes guardar el mensaje o enviar un email
        // Ejemplo: \App\Models\Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Mensaje enviado con éxito.');
    }
}
