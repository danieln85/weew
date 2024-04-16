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
        $blogs = Blog::paginate(9);
        $recent_posts = Blog::latest()->take(3)->get();
        return view('blog', compact('blogs', 'recent_posts'));
    }

    
    public function blogDetails($id = 1)
    {
        $blogs = Blog::find($id);
        
        if (!$blogs) {
            return redirect()->route('home');
        }
        
        // Obtén el ID del blog anterior
        $prevBlog = Blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
        
        // Obtén el ID del siguiente blog
        $nextBlog = Blog::where('id', '>', $id)->orderBy('id', 'asc')->first();
        
        return view('blog-details', compact('blogs', 'prevBlog', 'nextBlog'));
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

        $request->image_450x300->move(public_path('images/blog-post'), $fileName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image_450x300 = $fileName;
        $blog->editor = $request->editor;
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
            if ($blog->image_450x300) {
                $imagePath = public_path('images/blog-post/'.$blog->image_450x300);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            // Mover la nueva imagen al directorio publico
            $fileName = time().'.'.$request->image_450x300->extension();
            $request->image_450x300->move(public_path('images/blog-post'), $fileName);
    
            // Actualizar el nombre de la imagen en la base de datos
            $blog->image_450x300 = $fileName;
        }
    
        // Actualizar los otros campos del blog
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->editor = $request->editor;

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
