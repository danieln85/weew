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

                <div class="col-xxl-3 col-xl-4 col-lg-5 order-lg-1">
                    <div class="left-sidebar-box wow fadeInUp">
                        <div class="left-search-box">
                            <div class="search-box">
                                <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Buscar post">
                            </div>
                        </div>

                        <div class="accordion left-accordion-box" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
                                        Recent Post
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body pt-0">
                                        <div class="recent-post-box">
                                            <div class="recent-box">
                                                <a href="blog-detail.html" class="recent-image">
                                                    <img src="{{ asset('images/weew-blog1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="blog-detail.html">
                                                        <h5 class="recent-name">¿Cómo Realizar Un Consumo Responsable Del Canabis?</h5>
                                                    </a>
                                                    <h6>2024-04-07 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="blog-detail.html" class="recent-image">
                                                    <img src="{{ asset('images/weew-blog2.png') }}" class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="blog-detail.html">
                                                        <h5 class="recent-name">Tips A La Hora De Comprar Un Kit Canabico</h5>
                                                    </a>
                                                    <h6>2024-03-28 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="blog-detail.html" class="recent-image">
                                                    <img src="{{ asset('images/weew-blog3.png') }}" class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="blog-detail.html">
                                                        <h5 class="recent-name">Ten Cuidado Con La Calidad Del Producto Eliges</h5>
                                                    </a>
                                                    <h6>2024-03-05 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="blog-detail.html" class="recent-image">
                                                    <img src="{{ asset('images/weew-blog1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="blog-detail.html">
                                                        <h5 class="recent-name">¿Cómo Realizar Un Consumo Responsable Del Canabis?</h5>
                                                    </a>
                                                    <h6>2024-02-13 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo">Category</button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse collapse show">
                                    <div class="accordion-body p-0">
                                        <div class="category-list-box">
                                            <ul>
                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Latest Recipes</h5>
                                                            <span>10</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Diet Food</h5>
                                                            <span>6</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Low calorie Items</h5>
                                                            <span>8</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Cooking Method</h5>
                                                            <span>9</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Dairy Free</h5>
                                                            <span>12</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="blog-list.html">
                                                        <div class="category-name">
                                                            <h5>Vegetarian Food</h5>
                                                            <span>10</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree">Product Tags</button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse collapse show">
                                    <div class="accordion-body pt-0">
                                        <div class="product-tags-box">
                                            <ul>

                                                <li>
                                                    <a href="javascript:void(0)">Fruit Cutting</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">Meat</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">organic</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">cake</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">pick fruit</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">backery</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">organix food</a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">Most Expensive Fruit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour">Trending Products</button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse collapse show">
                                    <div class="accordion-body">
                                        <ul class="product-list product-list-2 border-0 p-0">
                                            <li>
                                                <div class="offer-product">
                                                    <a href="shop-left-sidebar.html" class="offer-image">
                                                        <img src="../assets/images/vegetable/product/23.png" class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="offer-detail">
                                                        <div>
                                                            <a href="shop-left-sidebar.html">
                                                                <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                            </a>
                                                            <span>450 G</span>
                                                            <h6 class="price theme-color">$ 70.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="offer-product">
                                                    <a href="shop-left-sidebar.html" class="offer-image">
                                                        <img src="../assets/images/vegetable/product/24.png" class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="offer-detail">
                                                        <div>
                                                            <a href="shop-left-sidebar.html">
                                                                <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                            </a>
                                                            <span>450 G</span>
                                                            <h6 class="price theme-color">$ 40.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="mb-0">
                                                <div class="offer-product">
                                                    <a href="shop-left-sidebar.html" class="offer-image">
                                                        <img src="../assets/images/vegetable/product/26.png" class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="offer-detail">
                                                        <div>
                                                            <a href="shop-left-sidebar.html">
                                                                <h6 class="name">Apple Red Premium Imported</h6>
                                                            </a>
                                                            <span>1 KG</span>
                                                            <h6 class="price theme-color">$ 80.00</h6>
                                                        </div>
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
    </section>
    <!-- Blog Section End -->

    @include('layouts._partials.footer')