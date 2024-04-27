@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>About Us</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Fresh Vegetable Section Start -->
    <section class="fresh-vegetable-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="col-xl-6 col-12">
                    <div class="row g-sm-4 g-2">
                        <div class="col-6">
                            <div class="fresh-image-2">
                                <div>
                                    <img src="{{ ('images/inner-page/about-us/1.png') }}" class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fresh-image">
                                <div>
                                    <img src="{{ ('images/inner-page/about-us/2.png') }}" class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-12">
                    <div class="fresh-contain p-center-left">
                        <div>
                            <div class="review-title">
                                <h4>Quiénes somos?</h4>
                                <h2>Somos la comunidad más grande de consumo responsable</h2>
                            </div>

                            <div class="delivery-list">
                                <p class="text-content">En WEEW promovemos el consumo consciente y responsable del cannabis, priorizamos la salud y el bienestar de los consumidores. Cambiamos el estigma negativo y la desinformación empoderando a los consumidores para tomar decisiones informadas.</p>

                                <ul class="delivery-box">
                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{ ('svg/3/delivery.svg') }}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Free delivery for all orders</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="{{ ('svg/3/leaf.svg') }}" class="blur-up lazyload" alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Only fresh products</h5>
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
    </section>
    <!-- Fresh Vegetable Section End -->

    <!-- Client Section Start -->
    <section class="client-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title text-center">
                            <h4>¿Qué hacemos?</h4>
                        <h2 class="center">Los clientes confían en nosotros</h2>
                    </div>

                    <div class="slider-3_1 product-wrapper">
                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{ ('svg/3/work.svg') }}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>+2</h2>
                                <h4>Años de Experiencia</h4>
                                <p>Llevamos más de dos años desarollando productos enfocados en el bienestar de los consumidores.<br><br></p>
                            </div>
                        </div>

                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{ ('svg/3/buy.svg') }}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>1.000 +</h2>
                                <h4>El Mejor Servicio</h4>
                                <p>Somos un eCommerce que promueve el consumo responsable y las buenas prácticas para consumir marihuana.</p>
                            </div>
                        </div>

                        <div>
                            <div class="clint-contain">
                                <div class="client-icon">
                                    <img src="{{ ('svg/3/user.svg') }}" class="blur-up lazyload" alt="">
                                </div>
                                <h2>100%</h2>
                                <h4>Clientes Satisfechos</h4>
                                <p>Nuestros productos son desarrollados por consumidores para consumidores. Vamos a elevar el nivel en tus sesiones de consumo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->

    <!-- Team Section Start -->
    <section class="team-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="about-us-title text-center">
                <h4 class="text-content">Nuestro Equipo</h4>
                <h2 class="center">Integrantes</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-user product-wrapper">
                        <div>
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="{{ ('images/inner-page/user/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Anna</h3>
                                    <h5>CBO</h5>
                                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="{{ ('images/inner-page/user/2.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Danna</h3>
                                    <h5>CCO</h5>
                                    {{-- <p> Atque exercitationem eaque labore suscipit quis, ducimus similique nam.</p> --}}
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="{{ ('images/inner-page/user/3.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Juan Felipe Oviedo</h3>
                                    <h5>CEO</h5>
                                    {{-- <p>Debitis dicta corrupti nostrum dolores sed rem iure et inventore nihil facilis!</p> --}}
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Review Section Start -->
    <section class="review-section section-lg-space">
        <div class="container-fluid">
            <div class="about-us-title text-center">
                <h4 class="text-content">Latest Testimonials</h4>
                <h2 class="center">What people say</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-half product-wrapper">
                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"I usually try to keep my sadness pent up inside where it can fester quietly as a
                                    mental illness. There, now he's trapped in a book I wrote: a crummy world of plot
                                    holes and spelling errors! As an interesting side note."</p>

                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/1.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Betty J. Turner</h4>
                                        <h6>CTO, Company</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"My busy schedule leaves little, if any, time for blogging and social media. The
                                    Lorem Ipsum Company has been a huge part of helping me grow my business through
                                    organic search and content marketing."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/2.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Alfredo S. Rocha</h4>
                                        <h6>Project Manager</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Professional, responsive, and able to keep up with ever-changing demand and tight
                                    deadlines: That's how I would describe Jeramy and his team at The Lorem Ipsum
                                    Company. When it comes to content marketing."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/3.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Donald C. Spurr</h4>
                                        <h6>Sale Agents</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"After being forced to move twice within five years, our customers had a hard time
                                    finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our
                                    brand."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/4.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Terry G. Fain</h4>
                                        <h6>Photographer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company
                                    not only proved itself financially speaking, but the response I have received from
                                    customers is incredible."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/1.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Gwen J. Geiger</h4>
                                        <h6>Designer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Jeramy and his team at the Lorem Ipsum Company whipped my website into shape just in
                                    time for tax season. I was excited by the results and am proud to direct clients to
                                    my website once again."</p>

                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/2.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Constance K. Whang</h4>
                                        <h6>CEO, Company</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put
                                    on your good vestments." What are their names? Yep, I remember. They came in last at
                                    the Olympics!"</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/3.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Christopher R. Lee</h4>
                                        <h6>Managing Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
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
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Good man. Nixon's pro-war and pro-family. Hey, tell me something. You've got all
                                    this money. How come you always dress like you're doing your laundry? So, how 'bout
                                    them Knicks? What kind of a father would I be if I said no?."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{ ('images/inner-page/user/4.jpg') }}" class="blur-up lazyload" alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Eileen R. Chu</h4>
                                        <h6>Marketing Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section End -->

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

    <!-- Blog Section Start -->
    {{-- <section class="section-lg-space">
        <div class="container-fluid-lg">
            <div class="about-us-title text-center">
                <h4 class="text-content">Our Blog</h4>
                <h2 class="center">Our Latest Blog</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-5 ratio_87">
                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{ ('images/veg-2/blog/1.png') }}" class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Lorem</h6>
                                    <h5>Lorem ipsum</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{ ('images/veg-2/blog/2.png') }}" class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Lorem</h6>
                                    <h5>Lorem ipsum</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{ ('images/veg-2/blog/3.png') }}" class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Lorem</h6>
                                    <h5>Lorem ipsum</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{ ('images/veg-2/blog/4.png') }}" class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Lorem</h6>
                                    <h5>Lorem ipsum</h5>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="rounded-3">
                                            <img src="{{ ('images/veg-2/blog/5.png') }}" class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>

                                <a href="blog-detail.html" class="blog-detail d-block">
                                    <h6>Lorem</h6>
                                    <h5>Lorem ipsum</h5>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Blog Section End -->

@include('layouts._partials.footer')