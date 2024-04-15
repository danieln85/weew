<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $blogs =  Blog::latest()->paginate(5);
        return view('blog-create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $fileName = time().'.'.$request->image_450x300->extension();

        $request->image_450x300->storeAs('public/images', $fileName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image_450x300 = $fileName;
        $blog->save();

        session()->flash('success', '¡El Post se creó exitosamente!');
        return redirect()->route('blog-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        return view('blog-edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
{
    // Verificar si se proporcionó una nueva imagen
    if ($request->hasFile('image_450x300')) {
        // Eliminar la imagen anterior si existe
        Storage::delete('public/images/'.$blog->image_450x300);

        // Guardar la nueva imagen
        $fileName = time().'.'.$request->image_450x300->extension();
        $request->image_450x300->storeAs('public/images', $fileName);

        // Actualizar el nombre de la imagen en la base de datos
        $blog->image_450x300 = $fileName;
    }

    // Actualizar los otros campos del blog
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->save();

    session()->flash('success', '¡El Post se actualizó exitosamente!');
    return redirect()->route('blog-create');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        session()->flash('success', '¡El Post se eliminó exitosamente!');
        return redirect()->route('blog-create');
    }
}
