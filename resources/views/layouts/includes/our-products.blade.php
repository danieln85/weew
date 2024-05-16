<!-- Product Section Start -->
    <section class="product-section mt-3" id="nuestros-productos">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Productos</h2>
                <ul class="nav nav-tabs tab-style-color-2 tab-style-color" id="myTab">
                    <li class="nav-item">
                        <button class="nav-link btn active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button">Todos</button>
                    </li>

                    {{-- <li class="nav-item">
                        <button class="nav-link btn" id="cooking-tab" data-bs-toggle="tab" data-bs-target="#cooking" type="button"> Pipes</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="fruits-tab" data-bs-toggle="tab" data-bs-target="#fruits" type="button">Kits</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="beverage-tab" data-bs-toggle="tab" data-bs-target="#beverage" type="button">Rolling Paper</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="dairy-tab" data-bs-toggle="tab" data-bs-target="#dairy" type="button">Bong</button>
                    </li> --}}
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="row g-8">


                        @foreach($products_all as $product)
                        <div class="col-xxl-4 col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.05s">
                            <div class="product-box-4">
                                <div class="label-flex">
                                    @if (!is_null($product->descuento) && is_numeric($product->descuento))
                                        <label class="label-flex2"><i class="fa-solid fa-bolt-lightning"></i> {{ $product->descuento }}% OFF por Lanzamiento</label>
                                    @endif
                                    
                                </div>
                                <div class="product-image">

                                    {{-- <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div> --}}

                                    <a href="{{ route('product-details', ['id' => $product->id]) }}">
                                        <img src="{{ asset('images/products/'.$product->imagen) }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{ asset('images/products/'.$product->imagen) }}">
                                        <h5 class="name"><strong>{{ $product->nombre }}</strong></h5>
                                    </a>
                                    <h5 class="price theme-color">
                                        @if($product->descuento)
                                            <strong>{{ number_format($product->precio - (($product->precio * $product->descuento) / 100), 0, '.', '.') }}</strong>
                                            <del>{{ number_format($product->precio, 0, '.', '.') }}</del>
                                        @else
                                            <strong>{{ number_format($product->precio, 0, '.', '.') }}</strong>
                                        @endif
                                    </h5>
                                    
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-plus white-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                     
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    {{ $products_all->links() }}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="cooking" role="tabpanel">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Kit cannabis</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/2.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Yellow Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/5.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/6.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Organic Cannabis</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Bong</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/2.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling Paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/8.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Grinder</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="fruits" role="tabpanel">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/8.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"  class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"  class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Dab rig</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/6.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/8.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/7.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"  class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"  class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"  class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name"><strong>Cannabis Pipe</strong></h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="beverage" role="tabpanel">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Kit pipes</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/2.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Kit Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Grinder</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>

                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/5.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/6.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Organic Cannabis</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Bong</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/5.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipes</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/7.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/8.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Grinder</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="dairy" role="tabpanel">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Kit Bongs</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/2.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Kit Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/3.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Vaporizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/5.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/6.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Organic Cannabis</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Pipe</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/4.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
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
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Rolling paper</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/5.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Bong</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>

                                    <a href="{{  route('home') }}">
                                        <img src="{{ asset('images/veg-3/cate1/8.png') }}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{  route('home') }}">
                                        <h5 class="name">Grinder</h5>
                                    </a>
                                    <h5 class="price theme-color">$70.000<del>$98.000</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Product Section End -->