<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        // return view('contact-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::latest()->paginate(3);
        return view('contact-us', compact('contacts'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactFormRequest $request): RedirectResponse
    {
        Contact::create($request->all());
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
