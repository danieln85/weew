@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{ __('menu.blog') }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Publicaciones</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-9 col-xl-8 col-lg-7 order-lg-2">
                    <div class="row g-4 ratio_65">
                        @foreach($blogs as $blog)
                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="{{ route('blog-details', ['id' => $blog->id]) }}">
                                        <img src="{{ asset('images/blog-post/'.$blog->image_450x300) }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    <label><i class="fa-solid fa-bolt-lightning"></i> popular</label>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>{{ $blog->created_at->format('Y-m-d') }}</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>{{ $blog->editor }}</span></span>
                                    </div>
                                    <a href="{{ route('blog-details', ['id' => $blog->id]) }}">
                                        <h3>{{ $blog->title }}</h3>
                                    </a>
                                    <button onclick="location.href = '{{ route('blog-details', ['id' => $blog->id]) }}';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    {{ $blogs->links() }}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

@include('layouts.includes.blog-left-section')
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    @include('layouts._partials.footer')