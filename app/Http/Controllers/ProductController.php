<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

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
        $products =  Product::latest()->paginate(10);
        return view('product-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
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

    
    public function productDetails($id = 1)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->route('home');
        }
        
        // Obtén el ID del blog anterior
        $prevProduct = Product::where('id', '<', $id)->orderBy('id', 'desc')->first();
        
        // Obtén el ID del siguiente blog
        $nextProduct = Product::where('id', '>', $id)->orderBy('id', 'asc')->first();

        
        
        return view('product-details', compact('product', 'prevProduct', 'nextProduct'));
    }


    public function edit(Product $product)
    {
        return view('product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product){

    // Verificar si hay una nueva imagen en la petición
    if ($request->hasFile('imagen')) {
        // Si hay una nueva imagen, subirla y actualizar el nombre de archivo
        $fileName = time() . '.' . $request->imagen->extension();
        $request->imagen->move(public_path('images/products'), $fileName);

        // Asignar el nuevo nombre de archivo al producto
        $product->imagen = $fileName;
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
