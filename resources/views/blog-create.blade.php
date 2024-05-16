@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

<div class="container mt-5 mb-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col text-center mt-3 mb-4">
                    <h1>Crear Publicación</h1>
                </div>
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


            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea id="description" name="description" class="form-control" rows="6">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen:</label>
                    <input type="file" id="image" name="image_450x300" class="form-control" style="height: 45px;">
                </div>

                <div class="mb-3">
                    <label for="editor" class="form-label">Editor:</label>
                    <input type="text" id="editor" name="editor" class="form-control" value="{{ old('editor') }}">
                </div>

                <button type="submit" class="btn btn-primary-custom">Guardar</button>
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
                        <h1>Publicaciones</h1>
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
                        @forelse ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($blog->title) }}</td>
                            {{-- <td>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $blog->description }}">
                                    {{ \Illuminate\Support\Str::limit($blog->description, 20) }}
                                </span>
                            </td> --}}
                            <td>
                                <div class="d-grid">
                                    <a href="{{ route('blog.edit', $blog) }}" class="btn btn-primary-custom btn-primary-custom2 btn-sm">Editar</a>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid">
                                    <form action="{{ route('blog.destroy', $blog) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary-custom btn-primary-custom2 btn-sm w-100">Eliminar</button>
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
                
                
            {{$blogs->links()}}
            </div>
        </div>
    </div>
</div>



  @include('layouts._partials.footer')