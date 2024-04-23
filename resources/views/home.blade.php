@include('layouts._partials.header')
@include('layouts.includes.menu-weew')
  
    <!-- home section start -->
    <section class="home-section-2 home-section-small section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-6 col-md-8">
                    <div class="home-contain h-100">
                        <img src="{{ asset('images/veg-3/home/1.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                        <div class="home-detail home-width p-center-left position-relative">
                            <div>
                                <h6 class="ls-expanded theme-color m-0 p-0">WEEW</h6>
                                <h1 class="fw-bold w-100 m-0 p-0">Somos</h1>
                                <h3 class="text-content fw-light">la comunidad más grande de consumidores responsables de cannabis.</h3>
                                {{-- <p class="d-sm-block d-none">más grande de consumidores responsable de cannabis.</p> --}}
                                <button onclick="location.href = '{{  route('home') }}';" class="btn mt-sm-4 btn-2 theme-bg-color text-white mend-auto btn-2-animation">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-4 ratio_medium d-md-block d-none">
                    <div class="home-contain home-small h-100">
                        <div class="h-100">
                            <img src="{{ asset('images/veg-3/home/2.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="home-detail text-center p-top-center w-100 text-white">
                            <div>
                                <h4 class="fw-bold">!Nos encanta lo que hacemos!</h4>
                                {{-- <h5 class="text-center">Best products</h5> --}}
                                <button class="btn bg-white theme-color mt-3 home-button mx-auto btn-2" onclick="location.href = '{{  route('home') }}';">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 ratio_65 d-xxl-block d-none">
                    <div class="row g-3">
                        <div class="col-xxl-12 col-sm-6">
                            <div class="home-contain">
                                <a href="{{  route('home') }}">
                                    <img src="{{ asset('images/veg-3/home/3.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="home-detail text-white p-center text-center">
                                    <div>
                                        <h4 class="text-center">Organic Lifestyle</h4>
                                        <h5 class="text-center">Best Weekend Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12 col-sm-6">
                            <div class="home-contain">
                                <a href="{{  route('home') }}">
                                    <img src="{{ asset('images/veg-3/home/4.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="home-detail text-white w-50 p-center-left home-p-sm">
                                    <div>
                                        <h4 class="fw-bold">Safe products saves lives</h4>
                                        <h5>Discount Offer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Category Section Start -->
    {{-- <section class="category-section-2 mt-2 mb-2">
        <div class="container-fluid-lg">
            <div class="title">
                <h2 class="mb-2 text-unchanged">¿Qué trae el Kit WEEW?</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider arrow-slider">
                        <div>
                            <div class="shop-category-box border-0 wow fadeIn">
                                <a href="{{  route('home') }}" class="circle-1">
                                    <img src="{{ asset('images/veg-3/category/1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Kit Cannabis</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.05s">
                                <a href="{{  route('home') }}" class="circle-2">
                                    <img src="{{ asset('images/veg-3/category/2.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Clothes</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.1s">
                                <a href="{{  route('home') }}" class="circle-3">
                                    <img src="{{ asset('images/veg-3/category/3.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Medicinal</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.15s">
                                <a href="{{  route('home') }}" class="circle-4">
                                    <img src="{{ asset('images/veg-3/category/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Cannabis Paper</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.2s">
                                <a href="{{  route('home') }}" class="circle-4">
                                    <img src="{{ asset('images/veg-3/category/5.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Pipes</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.25s">
                                <a href="{{  route('home') }}" class="circle-1">
                                    <img src="{{ asset('images/veg-3/category/6.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Cannabis Case</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.3s">
                                <a href="{{  route('home') }}" class="circle-2">
                                    <img src="{{ asset('images/veg-3/category/7.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Cannabis Info</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.35s">
                                <a href="{{  route('home') }}" class="circle-3">
                                    <img src="{{ asset('images/veg-3/category/8.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Candies</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.15s">
                                <a href="{{  route('home') }}" class="circle-4">
                                    <img src="{{ asset('images/veg-3/category/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Cannabis Paper</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Category Section End -->


    @include('layouts.includes.our-products')

<!-- Banner Section Start -->
<section class="banner-section mt-1 mb-3">
    <div class="container-fluid-lg">
        <div class="row gy-lg-0 gy-3">
            <div class="col-lg-8">
                <div class="banner-contain-3 h-100 pt-sm-5 hover-effect">
                    <img src="{{ asset('images/grocery/banner/8.png') }}" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-detail banner-p-sm p-center-right position-relative banner-minus-position banner-detail-deliver">
                        <div>
                            <h3 class="fw-bold banner-contain">No te preocupes por el envío</h3>
                            <h4 class="delivery-contain m-0 p-0">En WEEW queremos que tengas una experiencia completa,<h4 class="delivery-contain m-0 p-0"></h4><h4 class="delivery-contain"> sin sorpresas o sobrecargos.
                            </h4>
                            <ul class="banner-list mt-4">
                                <li>
                                    <div class="delivery-box">
                                        <div class="check-icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>

                                        <div class="check-contain">
                                            <h5>ENVÍO GRATIS A BOGOTÁ</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="check-icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>

                                        <div class="check-contain">
                                            <h5>60% OFF</h5>
                                            <h5>FUERA DE BOGOTÁ</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn theme-bg-color text-white mt-sm-4 mt-3 fw-bold" onclick="location.href = '{{  route('home') }}';">Contáctanos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="banner-contain-3 pt-lg-4 h-100 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('images/grocery/banner/9.jpg') }}" class="img-fluid social-image blur-up lazyload w-100" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
    
<!-- Deal Section Start -->
        {{-- <section class="deal-section">
            <div class="container-fluid-lg">
                <div class="title">
                    <h2>Deal Of The Day</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="three-slider-1 arrow-slider">
                            <div>
                                <div class="deal-box wow fadeInUp">
                                    <a href="{{  route('home') }}" class="category-image order-sm-2">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
    
                                    <div class="deal-detail order-sm-1">
                                        <button class="buy-box btn theme-bg-color text-white btn-cart">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                        <div class="hot-deal">
                                            <span>Hot Deals</span>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <a href="{{  route('home') }}" class="text-title">
                                            <h5>Cannabis Pipe</h5>
                                        </a>
                                        <h5 class="price">$54.000 <span>$68.000</span></span></span></h5>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 50%" role="progressbar"></div>
                                        </div>
                                        <h4 class="item">Sold: <span>30 Items</span></h4>
                                        <h4 class="offer">Hurry up offer end in</h4>
                                        <div class="timer" id="clockdiv-4" data-hours="1" data-minutes="2" data-seconds="3">
                                            <ul>
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div>
                                <div class="deal-box wow fadeInUp" data-wow-delay="0.05s">
                                    <a href="{{  route('home') }}" class="category-image order-sm-2">
                                        <img src="{{ asset('images/veg-3/cate1/2.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
    
                                    <div class="deal-detail order-sm-1">
                                        <button class="buy-box btn theme-bg-color text-white btn-cart">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                        <div class="hot-deal">
                                            <span>Hot Deals</span>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <a href="{{  route('home') }}" class="text-title">
                                            <h5>Cannabis Pipe</h5>
                                        </a>
                                        <h5 class="price">$54.000 <span>$68.000</span></span></span></h5>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 50%" role="progressbar"></div>
                                        </div>
                                        <h4 class="item">Sold: <span>30 Items</span></h4>
                                        <h4 class="offer">Hurry up offer end in</h4>
                                        <div class="timer" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                            <ul>
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div>
                                <div class="deal-box wow fadeInUp" data-wow-delay="0.1s">
                                    <a href="{{  route('home') }}" class="category-image order-sm-2">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
    
                                    <div class="deal-detail order-sm-1">
                                        <button class="buy-box btn theme-bg-color text-white btn-cart">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                        <div class="hot-deal">
                                            <span>Hot Deals</span>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <a href="{{  route('home') }}" class="text-title">
                                            <h5>Cannabis Pipe</h5>
                                        </a>
                                        <h5 class="price">$54.000 <span>$68.000</span></span></span></h5>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 50%" role="progressbar"></div>
                                        </div>
                                        <h4 class="item">Sold: <span>30 Items</span></h4>
                                        <h4 class="offer">Hurry up offer end in</h4>
                                        <div class="timer" id="clockdiv-2" data-hours="1" data-minutes="2" data-seconds="3">
                                            <ul>
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- Deal Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section mt-3 mb-0">
        <div class="container-fluid-lg">
            <div class="title">
                <h2 class="mt-1">Blog</h2>
            </div>

            <div class="slider-3 arrow-slider">
                @foreach ($recent_posts as $recent_post)
                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="{{ route('blog-details', ['id' => $recent_post->id]) }}">
                                <img src="{{ asset('images/blog-post/'.$recent_post->image_450x300) }}" class="img-fluid bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Recent posts</label>
                            <a href="{{ route('blog-details', ['id' => $recent_post->id]) }}">
                                <h2>{{ $recent_post->title }}</h2>
                            </a>
                            <div class="blog-list">
                                <span>{{ $recent_post->created_at->format('Y-m-d') }}</span>
                                <span>By {{ $recent_post->editor }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- weew monster Section Start -->

    <section class="home-section-2 home-section-small section-b-space mt-0">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-12 col-md-12">
                    <div class="home-contain h-100">
                        <img src="{{ asset('images/bg/weew-monster-bg2.png') }}" class="img-fluid blur-up lazyload" width="auto" alt="">
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- weew monster Section End -->

    <!-- Value Section Start -->
    <section class="">
        <div class="container-fluid-lg">
            <div class="title">
                <h2 class="mb-2">Kits Canábicos</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="three-slider arrow-slider ratio_65">
                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="{{ asset('images/veg-3/value/1.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">15% OFF</h5>
                                    <h6>Oferta Limitada</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = '{{  route('home') }}';" class="btn-category btn theme-bg-color text-white">Comprar</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="{{ asset('images/veg-3/value/2.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">15% OFF</h5>
                                    <h6>Oferta Limitada</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = '{{  route('home') }}';" class="btn-category btn theme-bg-color text-white">Comprar</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="{{ asset('images/veg-3/value/3.png') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">15% OFF</h5>
                                    <h6>Oferta Limitada</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = '{{  route('home') }}';" class="btn-category btn theme-bg-color text-white">Comprar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Value Section End -->


    <!-- Newsletter Section Start -->
    <section class="newsletter-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box hover-effect">
                        <img src="{{ asset('images/veg-3/shape/weew-suscribirse.png') }}" class="img-fluid bg-img" alt="">

                        <div class="row">
                            <a id="diligencia-correctamente"></a> 
                            <div id="redirect" data-url="{{ route('home') }}"></div>
        
                            <a id="envio-exitoso"></a>
                            <div id="redirect" data-url="{{ route('home') }}"></div>
                  
                            @if ($errors->any())
        
                            <script>
                                window.onload = function() {
                                    var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                                    window.location.href = redirectUrl + '#diligencia-correctamente';
                                }
                            </script>
                            
                                <div class="alert alert-danger">
                                    <strong>Por favor escribe un email valido.</strong><br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li></br>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success'))
                            <script>
                                window.onload = function() {
                                    var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                                    window.location.href = redirectUrl + '#envio-exitoso';
                                }
                            </script>
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="col-xxl-8 col-xl-7">
                                <div class="newsletter-detail p-center-left text-white">
                                    <div>
                                        <h2>Suscribete a nuestro informativo</h2>
                                        <h4>Recibirás información para que puedas llevar un consumo responsable del cannabis. Conocerás nuestros lanzamientos, descuentos e información sobre nuestra comunidad.</h4>
                                        <form action="{{ route('newsletter.store') }}" method="POST" class="row g-2">
                                            @csrf
                                        
                                            <div class="col-sm-10 col-12">
                                                <div class="newsletter-form">
                                                    <input type="email" class="form-control text-white on-focus" id="email" name="email" placeholder="Escribe tu email" value="{{ old('email')}}" required >
                                                    <button type="submit" class="btn bg-white theme-color btn-md fw-500
                                                        submit-button">Suscribirme</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->


    

    @include('layouts._partials.footer')