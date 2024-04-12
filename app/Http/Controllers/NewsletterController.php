<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NewsletterFormRequest;
use Illuminate\Support\Facades\Mail; // Agrega esta línea
use App\Mail\NewsletterFormMail; // Agrega esta línea



class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsletterFormRequest $request): RedirectResponse
    {
        $newsletter = Newsletter::create($request->all()); // Corregido
        
        Mail::to('weedwell.web@gmail.com')->send(new NewsletterFormMail($newsletter));
        session()->flash('success', '¡Te suscribiste exitosamente a nuestro informativo!');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
