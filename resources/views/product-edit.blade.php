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
            <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data" class="mt-4">
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
                    <input type="file" id="imagen" name="imagen" class="form-control" style="height: 45px;"> <!-- Ajusta este valor según necesites -->
                </div>
                
        
                <div class="d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-primary-custom">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>



  @include('layouts._partials.footer')