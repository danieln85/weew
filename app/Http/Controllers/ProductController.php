<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products =  Product::latest()->paginate(5);
        return view('product-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = time().'.'.$request->imagen->extension();

        $request->imagen->move(public_path('images/products'), $fileName);

        $product = new Product;
        $product->nombre = $request->nombre;
        $product->referencia = $request->referencia;
        $product->descripcion = $request->descripcion;
        $product->imagen = $fileName;
        $product->precio = $request->precio;
        $product->categoria = $request->categoria;
        $product->stock = $request->stock;
        $product->descuento = $request->descuento;
        $product->estado = $request->estado;
        $product->reputacion = $request->reputacion;
        
        $product->save();

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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
