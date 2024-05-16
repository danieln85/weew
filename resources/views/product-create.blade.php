@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

<div class="container mt-4 mb-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col text-center mt-2 mb-4">
                    <h1>Crear Producto</h1>
                </div>
            </div>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="referencia" class="form-label">Referencia:</label>
                        <input type="text" id="referencia" name="referencia" class="form-control">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="6"></textarea>
                </div>
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" id="precio" name="precio" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <select id="categoria" name="categoria" class="form-select">
                            <option value="kit">KIT</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" id="stock" name="stock" class="form-control">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="descuento" class="form-label">Descuento:</label>
                        <input type="number" id="descuento" name="descuento" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select id="estado" name="estado" class="form-select">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                            <option value="agotado">Agotado</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="reputacion" class="form-label">Reputación:</label>
                        <select id="reputacion" name="reputacion" class="form-select">
                            <option value="normal">Normal</option>
                            <option value="destacado">Destacado</option>
                            <option value="oferta">Oferta</option>
                        </select>
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" style="height: 45px;">
                </div>
        
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary-custom">Guardar</button>
                </div>
            </form>
        </div>
        
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col text-center mt-2 mb-4">
                        <h1>Productos</h1>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Título</th>
                            {{-- <th scope="col">Descripción</th> --}}
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->created_at->format('Y-m-d') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($product->nombre) }}</td>
                            {{-- <td>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $blog->description }}">
                                    {{ \Illuminate\Support\Str::limit($blog->description, 20) }}
                                </span>
                            </td> --}}
                            <td>
                                <div class="d-grid">
                                    <a href="{{ route('product.edit', $product) }}" class="btn btn-primary-custom btn-sm btn-block">Editar</a>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid">
                                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary-custom btn-sm btn-block w-100">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Todavía no has creado ningún registro</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
                
            {{$products->links()}}
            </div>
        </div>
    </div>
</div>







  @include('layouts._partials.footer')