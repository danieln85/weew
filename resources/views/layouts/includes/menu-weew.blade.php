<!-- Loader Start -->
    {{-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> --}}
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="header-2">
        <div class="header-notification theme-bg-color overflow-hidden py-2">
            <div class="notification-slider">
                <div>
                    <div class="timer-notification text-center">
                        <h6><strong class="me-1">{{ __('menu.welcome_to_weew') }}</strong>{{ __('menu.responsible_use_of_cannabis') }}
                        </h6>
                    </div>
                </div>

                <div>
                    <div class="timer-notification text-center">
                        <h6><strong class="ms-1">{{ __('menu.new_cupon_code') }}
                        </strong>
                        </h6>
                    </div>
                </div>

                <div>
                    <div class="timer-notification text-center">
                        <h6>{{ __('menu.something_you_love') }}<a href="{{ route('home') }}" class="text-white">{{ __('menu.buy_now') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
            <button class="btn close-notification"><span>{{ __('menu.close') }}</span> <i class="fas fa-times"></i></button>
        </div>
        <div class="top-nav top-header sticky-header sticky-header-3">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-block p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-list"></i>
                                </span>
                            </button>
                            <a href="{{route('home')}}" class="web-logo nav-logo">
                                <img src="{{ asset('images/logo/weew-logo.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="middle-box">
                                <div class="center-box">
                                    <div class="searchbar-box order-xl-1 d-none d-xl-block">
                                        <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="{{__('menu.search_for_products_we_deliver_to')}}">
                                        <button class="btn search-button">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>

                                    {{-- <div class="location-box-2">
                                        <button class="btn location-button" data-bs-toggle="modal" data-bs-target="#locationModal">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span class="locat-name"> Your Location</span>
                                            <i class="fa-solid fa-angle-down down-arrow"></i>
                                        </button>
                                    </div> --}}
                                    
                                </div>
                            </div>

                            <div class="rightside-menu">
                                <div class="dropdown-dollar">
                                    {{-- <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                            <span>Language</span> <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a id="eng" class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-heart"></i> English</a>
                                            </li>
                                            <li>
                                                <a id="hin" class="dropdown-item" href="javascript:void(0)">Hindi</a>
                                            </li>
                                            <li>
                                                <a id="guj" class="dropdown-item" href="javascript:void(0)">Gujarati</a>
                                            </li>
                                            <li>
                                                <a id="arb" class="dropdown-item" href="javascript:void(0)">Arabic</a>
                                            </li>
                                            <li>
                                                <a id="rus" class="dropdown-item" href="javascript:void(0)">Russia</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Chinese</a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                    {{-- <div class="dropdown">
                                        <button class="dropdown-toggle m-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                                            <span>Dollar</span> <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a id="usd" class="dropdown-item" href="javascript:void(0)">USD</a>
                                            </li>
                                            <li>
                                                <a id="inr" class="dropdown-item" href="javascript:void(0)">INR</a>
                                            </li>
                                            <li>
                                                <a id="eur" class="dropdown-item" href="javascript:void(0)">EUR</a>
                                            </li>
                                            <li>
                                                <a id="aud" class="dropdown-item" href="javascript:void(0)">AUD</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>

                                <div class="option-list">
                                    <ul> 
                                        @include('layouts.includes.lang')

                                        <li class="right-side d-none d-md-inline">
                                            <a href="{{ route('user-dashboard')}}#pills-wishlist" class="header-icon search-box search-icon">
                                                <small class="badge-number">2</small>
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="right-side onhover-dropdown d-none d-md-inline">
                                            <a href="{{ route('cart.index')}}" class="header-icon search-box search-icon">
                                                <small class="badge-number">2</small>
                                                <i class="fa-solid fa-cart-shopping "></i>
                                            </a>
                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    <li>
                                                        <div class="drop-cart">
                                                            <a href="{{ route('home') }}" class="drop-image">
                                                                <img src="{{ asset('images/vegetable/product/1.png') }}" class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="{{ route('home') }}">
                                                                    <h5>Cannabis Pipe</h5>
                                                                </a>
                                                                <h6><span>2 x</span> $80.000</h6>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="drop-cart">
                                                            <a href="{{ route('home') }}" class="drop-image">
                                                                <img src="{{ asset('images/vegetable/product/2.png') }}" class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="{{ route('home') }}">
                                                                    <h5>Kit cannabis pipelin
                                                                    </h5>
                                                                </a>
                                                                <h6><span>1 x</span> 149.900</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>


                                                <div class="price-box">
                                                    <h5>Total:</h5>
                                                    <h4 class="theme-color fw-bold">$320.000</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="{{ route('cart.index') }}" class="btn btn-sm cart-button"><strong>Carrito</strong></a>
                                                    <a href="{{ route('checkout.index') }}" class="btn btn-sm cart-button theme-bg-color
                                                    text-white"><strong>Ir a pagar</strong></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="right-side onhover-dropdown">
                                            <a class="header-icon user-box user-icon">                                                
                                            <i class="fa-solid fa-user"></i>
                                            </a>
                                            
                                            <div class="category-dropdown category-dropdown2 onhover-div">

                                                @auth
                                                <ul class="cart-list">
                                                    <li>
                                                        <div class="drop-cart">
                                                            <div class="drop-contain">

                                                                <img src="{{ asset('images/avatar/avatar.png') }}" height="50px">
                                                                <h6 class="mt-1"><img href=""> <strong> {{ Auth::user()->name }}</strong></h6><br>

                                                                <a href="{{route('user-dashboard')}}#pills-dashboard">
                                                                    <h5 class="pb-2">{{__('menu.info')}}</h5>
                                                                </a>
                                                                <a href="{{route('profile.show')}}">
                                                                    <h5 class="pb-2">{{__('perfil.profile')}}</h5>
                                                                </a>
                                                                <a href="{{route('user-dashboard')}}#pills-order">
                                                                    <h5 class="pb-2">{{__('menu.orders')}}</h5>
                                                                </a>
                                                                <a href="{{route('user-dashboard')}}#pills-facturacion">
                                                                    <h5 class="pb-2">{{__('menu.billing')}}</h5>
                                                                </a>
                                                                <a href="{{route('user-dashboard')}}#pills-wishlist">
                                                                    <h5 class="pb-2">{{__('menu.whishlist')}}</h5>
                                                                </a>






                                                                @if(auth()->check())
                                                                @if(auth()->user()->role == 'admin')

                                                                <a href="{{route('user-dashboard')}}#pills-crear-editar">
                                                                    <h5 class="pb-2">{{__('menu.create_edit')}}</h5>
                                                                </a>
                                                                <a href="{{route('user-dashboard')}}#pills-download">
                                                                    <h5 class="pb-2">{{__('menu.download')}}</h5>
                                                                </a>

                                                                
                                                                    
                                            
                                                                @elseif(auth()->user()->role == 'editor')
                                                                <a href="{{route('user-dashboard')}}#pills-download">
                                                                    <h5 class="pb-2">{{__('menu.download')}}</h5>
                                                                </a>
                                                                @endif
                                                            @endif



                                                                
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn-reset mt-2">
                                                                        <h5><i class="fa-solid fa-door-open"></i> {{__('menu.logout')}}</h5>
                                                                    </button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>   
                                                @endauth

                                                @guest
                                                <ul class="cart-list">
                                                    <li>
                                                        <div class="drop-cart">
                                                            <div class="drop-contain2">
                                                                <a href="{{route('login')}}">
                                                                    <h5 class="pb-2">{{__('logueo.login')}}</h5>
                                                                </a>
                                                                <a href="{{route('register')}}">
                                                                    <h5>{{__('logueo.register')}}</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>   
                                                @endguest
                                                

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
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="main-nav">
                        <div class="header-nav-left">
                            {{-- <button class="dropdown-category dropdown-category-2">
                                
                                <!-- Agrega un espacio entre el icono y el texto -->
                                <span class="category-name"><strong>All Categories</strong></span>
                            </button> --}}
                            

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <ul class="category-list">
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <img src="{{ asset('svg/1/cannabis.svg') }}" alt="">
                                            <h6>Medicinal</h6>
                                        </a>
                                    </li>

                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <img src="{{ asset('svg/1/cannabis.svg') }}" alt="">
                                            <h6>Recreational</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link ps-xl-2 ps-0 {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}"><strong>{{ __('menu.home') }}</strong></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('nosotros') ? 'active' : '' }}" href="{{ route('about-us') }}"><strong>{{ __('menu.about_us') }}</strong></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('contactanos') ? 'active' : '' }}" href="{{ route('contact-us') }}"><strong>{{ __('menu.contact_us') }}</strong></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('consumo-responsable') ? 'active' : '' }}" href="{{ route('blog') }}"><strong>{{ __('menu.blog') }}</strong></a>
                                        </li>

                                        <li class="nav-item new-nav-item">
                                            {{-- <label class="new-dropdown">{{ __('menu.new') }}</label> --}}
                                            <a class="nav-link {{ request()->is('tienda') ? 'active' : '' }}" href="{{ route('shop') }}#nuestros-productos"><strong>{{ __('menu.shop') }}</strong></a>
                                        </li>

                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="right-nav">
                            <div class="nav-number">
                                <img src="{{ asset('images/icon/music.png') }}" class="img-fluid blur-up lazyload" alt="">
                                <span><strong><a href="tel:+573164585454">(+57) 316 458 5454</a></strong></span>
                            </div>



                            @if (auth()->check())
                            <a href="javascript:void(0)" class="btn theme-bg-color ms-3 fire-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                                <div class="fire">
                                    <img src="{{ asset('images/icon/hot-sale.png') }}" class="img-fluid" alt="">
                                </div>
                                <span>{{__('menu.hot_deals')}}</span>
                            </a>
                            @endif



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            {{-- <li class="active"> --}}
            <li>
                <a href="{{ route('home') }}">
                    <i class="icli fa-solid fa-house white-icon"></i>
                    <span>{{ __('menu.home') }}</span>
                </a>
            </li>

            {{-- <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="icli fa-solid fa-list white-icon"></i>
                    <span>Category</span>
                </a>
            </li> --}}

            <li>
                <a href="{{ route('blog') }}" class="search-box">
                    

                    <i class="icli fa-solid fa-smoking"></i>
                    <span>CR</span>
                </a>
            </li>

            <li>
                <a href="{{ route('search') }}" class="search-box">
                    <i class="icli fa-solid fa-magnifying-glass"></i>
                    <span>{{ __('menu.search') }}</span>
                </a>
            </li>

            <li>
                <a href="{{route('user-dashboard')}}#pills-wishlist" class="">
                    <i class="icli fa-regular fa-heart white-icon"></i>
                    <span>{{ __('menu.whishlist') }}</span>
                </a>
            </li>

            <li>
                <a href="{{ route('cart.index') }}">
                    <i class="icli fly-cate fa-solid fa-cart-shopping white-icon"></i>
                    <span>{{ __('menu.cart') }}</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->