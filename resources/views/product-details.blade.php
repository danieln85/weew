@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Detalles del producto</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">Detalles del producto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">
                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/'.$product->imagen) }}" id="img-1" data-zoom-image="{{ asset('images/product/category/1.jpg') }}" class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" data-zoom-image="../assets/images/product/category/2.jpg" class="img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" data-zoom-image="../assets/images/product/category/3.jpg" class="img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" data-zoom-image="../assets/images/product/category/4.jpg" class="img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" data-zoom-image="../assets/images/product/category/5.jpg" class="img-fluid image_zoom_cls-4 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" data-zoom-image="../assets/images/product/category/6.jpg" class="img-fluid image_zoom_cls-5 blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/'.$product->imagen) }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('images/products/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                @if ($product->reputación == 'oferta')
                                <h6 class="offer-top">{{ $product->reputacion }}</h6>
                                @endif
                                <h2 class="name">{{ $product->nombre }}</h2>
                                <div class="price-rating">
                                    @if (!is_null($product->descuento) && is_numeric($product->descuento))
                                    <h3 class="theme-color price">${{ number_format($product->precio - (($product->precio * $product->descuento) / 100), 0, '.', '.') }} <del class="text-content">${{ number_format($product->precio, 0, '.', '.') }}</del> 
                                    
                                        <span class="offer theme-color">({{ $product->descuento }}% OFF)</span>
                                    </h3>
                                    @else
                                    <del class="text-content">${{ number_format($product->precio, 0, '.', '.') }}</del></h3>
                                    @endif
                                    <div class="product-rating custom-rate">
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
                                        <span class="review">Reputación</span>
                                    </div>
                                </div>

                                {{-- <div class="product-contain">
                                    <p>descripcion
                                    </p>
                                </div> --}}

                                {{-- <div class="product-package">
                                    <div class="product-title">
                                        <h4>Weight</h4>
                                    </div>
                                    <ul class="select-package">
                                        <li>
                                            <a href="javascript:void(0)" class="active">1/2 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">1 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">1.5 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Red Roses</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">With Pink Roses</a>
                                        </li>
                                    </ul>
                                </div> --}}

                                <div class="pickup-box">
                                    <div class="product-title">
                                        <h4>Descripción</h4>
                                    </div>

                                    <div class="pickup-detail">
                                        <h4 class="text-content">{{ $product->descripcion }}.</h4>
                                    </div>

                                    {{-- <div class="product-info">
                                        <ul class="product-info-list product-info-list-2">
                                            <li>Type : <a href="javascript:void(0)">Black Forest</a></li>
                                            <li>SKU : <a href="javascript:void(0)">SDFVW65467</a></li>
                                            <li>MFG : <a href="javascript:void(0)">Jun 4, 2022</a></li>
                                            <li>Stock : <a href="javascript:void(0)">2 Items Left</a></li>
                                            <li>Tags : <a href="javascript:void(0)">Cake,</a> <a href="javascript:void(0)">Backery</a></li>
                                        </ul>
                                    </div> --}}
                                </div>

                                {{-- <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <div class="product-title">
                                        <h4>Hurry up! Sales Ends In</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="days d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Days</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="hours d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Hours</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="minutes d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Min</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="seconds d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Sec</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}

                                <div class="note-box product-package">
                                    <div class="cart_qty qty-box product-qty">
                                        <div class="input-group">
                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                            <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <button onclick="location.href = 'cart.html';" class="btn btn-md bg-dark cart-button text-white w-100">Agregar</button>
                                </div>

                                <div class="progress-sec">
                                    <div class="left-progressbar">
                                        <h6>¡Por favor, apúrate! Solo quedan {{ $product->descuento }} en stock</h6>
                                        <div role="progressbar" class="progress warning-progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="buy-box">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                        <span>Add To Wishlist</span>
                                    </a>

                                    {{-- <a href="compare.html">
                                        <i data-feather="shuffle"></i>
                                        <span>Add To Compare</span>
                                    </a> --}}
                                </div>
                                

                                <div class="payment-option">
                                    <div class="product-title">
                                        <h4>¡Pago seguro garantizado!</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/product/payment/1.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/product/payment/2.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/product/payment/3.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/product/payment/4.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/product/payment/5.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                                    </li>

                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Additional info</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care" type="button" role="tab">Care
                                            Instructions</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab">Review</button>
                                    </li> --}}
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        <div class="product-description">
                                            <div class="nav-desh">
                                                <p>{{ $product->descripcion }}</p>
                                            </div>
                                
                                            <div class="nav-desh">
                                                <div class="desh-title">
                                                    <h5>Información de interes:</h5>
                                                </div>
                                                <p>Devoluciones Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque est illum, repellendus labore doloribus illo eveniet fugiat dolore ea laborum delectus ab suscipit placeat, ducimus aspernatur doloremque dolor neque distinctio. Garantías Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet asperiores voluptas cum consequatur incidunt voluptatem voluptate ipsam magni facere animi voluptatum laboriosam, iusto voluptatibus in doloremque necessitatibus, error ad? Rem?.</p>

                                                <p>Envíos Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus illum doloribus maiores! Quibusdam amet dignissimos quos earum alias asperiores omnis obcaecati itaque sit possimus ea, veritatis, numquam molestiae. Cum, magni..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box">


                        <!-- Trending Product -->
                        <div class="pt-25">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="../assets/images/vegetable/product/23.png" class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
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
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="../assets/images/vegetable/product/24.png" class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="../assets/images/vegetable/product/25.png" class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Good Life Walnut Kernels</h6>
                                                    </a>
                                                    <span>200 G</span>
                                                    <h6 class="price theme-color">$ 52.00</h6>
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
    </section>
    <!-- Product Left Sidebar End -->

    @include('layouts.includes.our-products')

    

@include('layouts._partials.footer')