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
            <form action="{{ route('blog.update', $blog) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" id="title" name="title" class="form-control"  value="{{ $blog->title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea id="description" name="description" class="form-control" rows="6">{{ $blog->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen:</label>
                    <input type="file" id="image" name="image_450x300" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagen Actual:</label>
                    <img src="{{ asset('storage/images/'.$blog->image_450x300) }}" alt="Imagen Actual" width="60px" class="img-fluid">
                </div>

                <button type="submit" class="btn btn-primary-custom btn-block">Actualizar</button>
            </form>
        </div>
    </div>
</div>


  @include('layouts._partials.footer')