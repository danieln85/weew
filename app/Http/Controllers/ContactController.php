<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Mail; // Agrega esta línea
use App\Mail\ContactFormMail; // Agrega esta línea

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        return view('contact-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactFormRequest $request): RedirectResponse
    {
        $contact = Contact::create($request->all()); // Corregido
        // Envía el correo electrónico al administrador
        Mail::to('weedwell.web@gmail.com')->send(new ContactFormMail($contact));

        session()->flash('success', '¡El formulario se envió exitosamente! Te responderemos a la brevedad.');

        return redirect()->route('contact-us');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
