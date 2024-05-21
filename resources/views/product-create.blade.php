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
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Por favor diligencia correctamente el formulario.</strong><br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li></br>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
            
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="referencia" class="form-label">Referencia:</label>
                        <input type="text" id="referencia" name="referencia" class="form-control" value="{{ old('referencia') }}">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="6">{{ old('descripcion') }}</textarea>
                </div>
            
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" id="precio" name="precio" class="form-control" value="{{ old('precio') }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <select id="categoria" name="categoria" class="form-select">
                            <option value="kit" {{ old('categoria') == 'kit' ? 'selected' : '' }}>KIT</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock') }}">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="descuento" class="form-label">Descuento:</label>
                        <input type="number" id="descuento" name="descuento" class="form-control" value="{{ old('descuento') }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select id="estado" name="estado" class="form-select">
                            <option value="activo" {{ old('estado') == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                            <option value="agotado" {{ old('estado') == 'agotado' ? 'selected' : '' }}>Agotado</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="reputacion" class="form-label">Reputación:</label>
                        <select id="reputacion" name="reputacion" class="form-select">
                            <option value="normal" {{ old('reputacion') == 'normal' ? 'selected' : '' }}>Normal</option>
                            <option value="destacado" {{ old('reputacion') == 'destacado' ? 'selected' : '' }}>Destacado</option>
                            <option value="oferta" {{ old('reputacion') == 'oferta' ? 'selected' : '' }}>Oferta</option>
                        </select>
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen principal:</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" style="height: 45px;">
                </div>
                <div class="mb-3">
                    <label for="imagen2" class="form-label">Imagen 2:</label>
                    <input type="file" id="imagen2" name="imagen2" class="form-control" style="height: 45px;">
                </div>
                <div class="mb-3">
                    <label for="imagen3" class="form-label">Imagen 3:</label>
                    <input type="file" id="imagen3" name="imagen3" class="form-control" style="height: 45px;">
                </div>
                <div class="mb-3">
                    <label for="imagen4" class="form-label">Imagen 4:</label>
                    <input type="file" id="imagen4" name="imagen4" class="form-control" style="height: 45px;">
                </div>
                <div class="mb-3">
                    <label for="imagen5" class="form-label">Imagen 5:</label>
                    <input type="file" id="imagen5" name="imagen5" class="form-control" style="height: 45px;">
                </div>
                <div class="mb-3">
                    <label for="imagen6" class="form-label">Imagen 6:</label>
                    <input type="file" id="imagen6" name="imagen6" class="form-control" style="height: 45px;">
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