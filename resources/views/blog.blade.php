@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Blog</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Blog Grid</li>
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

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog1.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    <label><i class="fa-solid fa-bolt-lightning"></i> popular</label>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-02-10</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>¿Cómo realizar un consumo responsable del Canabis?</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog2.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    {{-- <label><i class="fa-solid fa-bolt-lightning"></i> popular</label> --}}
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-03-25</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>Tips a la hora de comprar un Kit Canabico</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog3.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    {{-- <label><i class="fa-solid fa-bolt-lightning"></i> popular</label> --}}
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-03-25</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>Ten cuidado con la calidad del producto eliges</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog1.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    {{-- <label><i class="fa-solid fa-bolt-lightning"></i> popular</label> --}}
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-02-10</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>¿Cómo realizar un consumo responsable del Canabis?</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog2.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    <label><i class="fa-solid fa-bolt-lightning"></i> popular</label>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-03-25</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>Tips a la hora de comprar un Kit Canabico</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp" data-wow-delay="0.45s">
                                <div class="blog-image">
                                    <a href="blog-detail.html">
                                        <img src="{{ asset('images/weew-blog3.png') }}" class="bg-img blur-up lazyload" alt="">
                                    </a>
                                    {{-- <label><i class="fa-solid fa-bolt-lightning"></i> popular</label> --}}
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>2024-03-25</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Juan F. Oviedo</span></span>
                                    </div>
                                    <a href="blog-detail.html">
                                        <h3>Ten cuidado con la calidad del producto eliges</h3>
                                    </a>
                                    <button onclick="location.href = 'blog-detail.html';" class="blog-button">Leer
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <nav class="custom-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

@include('layouts.includes.blog-left-section')
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    @include('layouts._partials.footer')