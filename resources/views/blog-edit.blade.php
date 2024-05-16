@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

<div class="container mt-4 mb-5">

    <div class="row justify-content-center">
        <div class="container mb-4"><a href="{{route('blog-create')}}"><i class="fa-solid fa-arrow-left"></i> Regresar</a></div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-md-8">
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
            <form action="{{ route('blog.update', $blog) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" id="title" name="title" class="form-control"  value="{{ $blog->title }}">
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea id="description" name="description" class="form-control" rows="6">{{ $blog->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Imagen:</label>
                    <input type="file" id="image" name="image_450x300" class="form-control" style="height: 45px;">
                </div>

                <div class="mb-4">
                    <label class="form-label">Imagen Actual:</label>
                    <img src="{{ asset('images/blog-post/'.$blog->image_450x300) }}" alt="Imagen Actual" width="100px" class="img-fluid">
                </div>

                <div class="mb-3">
                    <label for="editor" class="form-label">Editor:</label>
                    <input type="text" id="editor" name="editor" class="form-control"  value="{{ $blog->editor }}">
                </div>

                <button type="submit" class="btn btn-primary-custom btn-block">Actualizar</button>
            </form>
        </div>
    </div>
</div>


  @include('layouts._partials.footer')