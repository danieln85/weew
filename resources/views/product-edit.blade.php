@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

<div class="container mt-4 mb-5">

    <div class="row justify-content-center">
        
            <div class="container mb-4"><a href="{{route('product-create')}}"><i class="fa-solid fa-arrow-left"></i> Regresar</a></div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
      <div class="col-md-8">
        <div class="container">
            <div class="row">
                <div class="col text-center mt-2 mb-4">
                    <h1>Actualizar Producto</h1>
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
            <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="referencia" class="form-label">Referencia:</label>
                        <input type="text" id="referencia" name="referencia" class="form-control" value="{{ $product->referencia }}">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $product->nombre }}">
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="6">{{ $product->descripcion }}</textarea>
                </div>
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" id="precio" name="precio" class="form-control" value="{{ $product->precio }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <select id="categoria" name="categoria" class="form-select">
                            <option value="kit">KIT</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="descuento" class="form-label">Descuento:</label>
                        <input type="number" id="descuento" name="descuento" class="form-control" value="{{ $product->descuento }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select id="estado" name="estado" class="form-select">
                            <option value="activo" {{ $product->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ $product->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                            <option value="agotado" {{ $product->estado == 'agotado' ? 'selected' : '' }}>Agotado</option>
                        </select>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="reputacion" class="form-label">Reputación:</label>
                        <select id="reputacion" name="reputacion" class="form-select">
                            <option value="normal" {{ $product->reputacion == 'normal' ? 'selected' : '' }}>Normal</option>
                            <option value="destacado" {{ $product->reputacion == 'destacado' ? 'selected' : '' }}>Destacado</option>
                            <option value="oferta" {{ $product->reputacion == 'oferta' ? 'selected' : '' }}>Oferta</option>
                        </select>
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="imagen" class="form-label"><strong>Imagen Principal:</strong></label>
                    <input type="file" id="imagen" name="imagen" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen Principal Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="imagen2" class="form-label"><strong>Imagen 2:</strong></label>
                    <input type="file" id="imagen2" name="imagen2" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen 2 Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen2) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="imagen3" class="form-label"><strong>Imagen 3:</strong></label>
                    <input type="file" id="imagen3" name="imagen3" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen 3 Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen3) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="imagen4" class="form-label"><strong>Imagen 4:</strong></label>
                    <input type="file" id="imagen4" name="imagen4" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen 4 Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen4) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="imagen5" class="form-label"><strong>Imagen 5:</strong></label>
                    <input type="file" id="imagen5" name="imagen5" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen 5 Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen5) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="imagen6" class="form-label"><strong>Imagen 6:</strong></label>
                    <input type="file" id="imagen6" name="imagen6" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                <div class="mb-4">
                    <label class="form-label">Imagen 6 Actual:</label>
                    <img src="{{ asset('images/products/'.$product->imagen6) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>
        
                <div class="d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-primary-custom">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>



  @include('layouts._partials.footer')