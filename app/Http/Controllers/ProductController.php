<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recent_posts = Blog::latest()->take(3)->get();
        return view('shop', compact('recent_posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products =  Product::latest()->paginate(10);
        return view('product-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
{
    // Función para subir imagen y devolver el nombre de archivo
    $uploadImage = function($image) {
        $fileName = time() . '_' . uniqid() . '.' . $image->extension();
        $image->move(public_path('images/products'), $fileName);
        return $fileName;
    };

    // Crear una nueva instancia de Product
    $product = new Product;

    // Verificar y subir imagen principal
    if ($request->hasFile('imagen')) {
        $product->imagen = $uploadImage($request->file('imagen'));
    }

    // Verificar y subir imagen2
    if ($request->hasFile('imagen2')) {
        $product->imagen2 = $uploadImage($request->file('imagen2'));
    }

    // Verificar y subir imagen3
    if ($request->hasFile('imagen3')) {
        $product->imagen3 = $uploadImage($request->file('imagen3'));
    }

    // Verificar y subir imagen4
    if ($request->hasFile('imagen4')) {
        $product->imagen4 = $uploadImage($request->file('imagen4'));
    }

    // Verificar y subir imagen5
    if ($request->hasFile('imagen5')) {
        $product->imagen5 = $uploadImage($request->file('imagen5'));
    }

    // Verificar y subir imagen6
    if ($request->hasFile('imagen6')) {
        $product->imagen6 = $uploadImage($request->file('imagen6'));
    }

    // Asignar los otros campos del producto
    $product->nombre = $request->nombre;
    $product->referencia = $request->referencia;
    $product->descripcion = $request->descripcion;
    $product->precio = $request->precio;
    $product->categoria = $request->categoria;
    $product->stock = $request->stock;
    $product->descuento = $request->descuento;
    $product->estado = $request->estado;
    $product->reputacion = $request->reputacion;

    // Guardar el producto en la base de datos
    $product->save();

    // Redireccionar al usuario con un mensaje de éxito
    session()->flash('success', '¡El Producto se creó exitosamente!');
    return redirect()->route('product-create');
}


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    
    public function productDetails($id = 1)
    {
        $recent_posts = Blog::latest()->take(3)->get();
        
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->route('home');
        }
        
        // Obtén el ID del blog anterior
        $prevProduct = Product::where('id', '<', $id)->orderBy('id', 'desc')->first();
        
        // Obtén el ID del siguiente blog
        $nextProduct = Product::where('id', '>', $id)->orderBy('id', 'asc')->first();

        
        
        return view('product-details', compact('product', 'prevProduct', 'nextProduct', 'recent_posts'));
    }


    public function edit(Product $product)
    {
        return view('product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
{
    // Función para subir imagen y devolver el nombre de archivo
    $uploadImage = function($image) {
        $fileName = time() . '_' . uniqid() . '.' . $image->extension();
        $image->move(public_path('images/products'), $fileName);
        return $fileName;
    };

    // Verificar y subir imagen principal
    if ($request->hasFile('imagen')) {
        $product->imagen = $uploadImage($request->file('imagen'));
    }

    // Verificar y subir imagen2
    if ($request->hasFile('imagen2')) {
        $product->imagen2 = $uploadImage($request->file('imagen2'));
    }

    // Verificar y subir imagen3
    if ($request->hasFile('imagen3')) {
        $product->imagen3 = $uploadImage($request->file('imagen3'));
    }

    // Verificar y subir imagen4
    if ($request->hasFile('imagen4')) {
        $product->imagen4 = $uploadImage($request->file('imagen4'));
    }

    // Verificar y subir imagen5
    if ($request->hasFile('imagen5')) {
        $product->imagen5 = $uploadImage($request->file('imagen5'));
    }

    // Verificar y subir imagen6
    if ($request->hasFile('imagen6')) {
        $product->imagen6 = $uploadImage($request->file('imagen6'));
    }

    // Actualizar los otros campos del producto
    $product->nombre = $request->nombre;
    $product->referencia = $request->referencia;
    $product->descripcion = $request->descripcion;
    $product->precio = $request->precio;
    $product->categoria = $request->categoria;
    $product->stock = $request->stock;
    $product->descuento = $request->descuento;
    $product->estado = $request->estado;
    $product->reputacion = $request->reputacion;

    // Guardar los cambios
    $product->save();

    // Redireccionar al usuario con un mensaje de éxito
    session()->flash('success', '¡El Producto ha sido actualizado exitosamente!');
    return redirect()->route('product-create');
}

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
