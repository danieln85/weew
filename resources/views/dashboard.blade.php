@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{__('menu.info')}}</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('menu.info')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- User Dashboard Section Start -->
    <section class="user-dashboard-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="dashboard-left-sidebar">
                        <div class="close-button d-flex d-lg-none">
                            <button class="close-sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="{{ asset('images/inner-page/cover-img.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="{{ asset('images/icon/user-icon.jpg') }}" class="blur-up lazyload update_img" alt="">
                                        {{-- <div class="cover-icon">
                                            <i class="fa-solid fa-pen">
                                                <input type="file" onchange="readURL(this,0)">
                                            </i>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <h6 class="text-content">{{ Auth::user()->email }}</h6>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button"><i data-feather="home"></i>
                                    {{__('menu.info')}}</button>
                            </li>

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-card-tab" data-bs-toggle="pill" data-bs-target="#pills-card" type="button" role="tab"><i data-feather="credit-card"></i> Saved Card</button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('profile.show') }}" class="nav-link"></i>
                                  <i data-feather="user"></i>{{__('perfil.profile')}}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-facturacion-tab" data-bs-toggle="pill" data-bs-target="#pills-facturacion" type="button" role="tab"><i data-feather="map-pin"></i>{{__('menu.billing')}}</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"><i data-feather="user"></i>
                                    Profile</button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button"><i data-feather="shopping-bag"></i>{{__('menu.orders')}}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#pills-wishlist" type="button"><i data-feather="heart"></i>{{__('menu.whishlist')}}</button></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab"><i data-feather="shield"></i>{{__('menu.privacy')}}</button></li>


                            @if(auth()->check())
                            @if(auth()->user()->role == 'admin')
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-crear-editar-tab" data-bs-toggle="pill" data-bs-target="#pills-crear-editar" type="button" role="tab"><i data-feather="edit"></i>{{__('menu.create_edit')}}</button>
                            </li>
                                
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-download-tab" data-bs-toggle="pill" data-bs-target="#pills-download" type="button" role="tab"><i data-feather="download"></i>{{__('menu.download')}}</button>
                            </li>
                            @elseif(auth()->user()->role == 'editor')
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-crear-editar-tab" data-bs-toggle="pill" data-bs-target="#pills-crear-editar" type="button" role="tab"><i data-feather="edit"></i>Crear | Editar</button>
                            </li>
                            @endif
                        @endif

                        </ul>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <div class="d-flex justify-content-around">
                        <a href="{{ route('user-dashboard') }}#pills-dashboard">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.info')}}</button>
                        </a>
                        <a href="{{ route('profile.show') }}">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('perfil.profile')}}</button>
                        </a>
                        <a href="{{ route('user-dashboard') }}#pills-facturacion">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.billing')}}</button>
                        </a>
                        
                    </div>

                    <div class="d-flex justify-content-around">
                        <a href="{{ route('user-dashboard') }}#pills-order">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.orders')}}</button>
                        </a>

                        <a href="{{ route('user-dashboard') }}#pills-wishlist">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.whishlist')}}</button>
                        </a>
                    
                        <a href="{{ route('user-dashboard') }}#pills-security">
                            <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.privacy')}}</button>
                        </a>
                    </div>
                    <div class="d-flex justify-content-around">
                    @if(auth()->check())
                        @if(auth()->user()->role == 'admin')
                       
                            <a href="{{ route('user-dashboard') }}#pills-crear-editar">
                                <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.create_edit')}}</button>
                            </a>
                            
                            <a href="{{ route('user-dashboard') }}#pills-download">
                                <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">{{__('menu.download')}}</button>
                            </a>
                        @elseif(auth()->user()->role == 'editor')
                            <a href="{{ route('user-dashboard') }}#pills-crear-editar">
                                <button class="btn btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Crear | Editar</button>
                            </a>
                        @endif
                    @endif
                    

                    </div>
                    
                     
                    <div class="dashboard-right-sidebar">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                                <div class="dashboard-home">
                                    <div class="title">
                                        <h2>{{__('menu.info')}}</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="dashboard-user-name">
                                        <h6 class="text-content">Hola, <b class="text-title">{{ Auth::user()->name }}</b></h6>
                                        <p class="text-content">Desde este tablero de información puedes ver tu actividad más reciente y consultar el estado de tus pedidos.</p>
                                    </div>

                                    <div class="total-box">
                                        <div class="row g-sm-4 g-3">
                                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                <div class="total-contain">
                                                    <img src="{{ asset('images/svg/pending.svg') }}" class="img-1 blur-up lazyload" alt="">
                                                    <img src="{{ asset('images/svg/pending.svg') }}" class="blur-up lazyload" alt="">
                                                    <div class="total-detail">
                                                        <h5>Compras recibidas</h5>
                                                        <h3>1</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                <div class="total-contain">
                                                    <img src="{{ asset('images/svg/order.svg') }}" class="img-1 blur-up lazyload" alt="">
                                                    <img src="{{ asset('images/svg/order.svg') }}" class="blur-up lazyload" alt="">
                                                    <div class="total-detail">
                                                        <h5>Pedidos pendientes</h5>
                                                        <h3>0</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                <div class="total-contain">
                                                    <img src="{{ asset('images/svg/wishlist.svg') }}" class="img-1 blur-up lazyload" alt="">
                                                    <img src="{{ asset('images/svg/wishlist.svg') }}" class="blur-up lazyload" alt="">
                                                    <div class="total-detail">
                                                        <h5>Compra confirmada</h5>
                                                        <h3>1</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- Order Detail Section Start -->
    <section class="order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">

                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i data-feather="package" class="text-content"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">Tracking Code</h5>
                                    <h2 class="theme-color">MH4285UY</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i data-feather="truck" class="text-content"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">Service</h5>
                                    <img src="../assets/images/inner-page/brand-name.svg" class="img-fluid blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i class="text-content" data-feather="info"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">Package Info</h5>
                                    <h4>Letter</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i class="text-content" data-feather="crosshair"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">From</h5>
                                    <h4>STR. Smardan 9, Bucuresti, romania.</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i class="text-content" data-feather="map-pin"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">Destination</h5>
                                    <h4>Flokagata 24, 105 Reykjavik, Iceland</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="order-details-contain">
                                <div class="order-tracking-icon">
                                    <i class="text-content" data-feather="calendar"></i>
                                </div>

                                <div class="order-details-name">
                                    <h5 class="text-content">Estimated Time</h5>
                                    <h4>7 Frb, 05:05pm</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 overflow-hidden">
                            <ol class="progtrckr">
                                <li class="progtrckr-done">
                                    <h5>Order Processing</h5>
                                    <h6>05:43 AM</h6>
                                </li>
                                <li class="progtrckr-done">
                                    <h5>Pre-Production</h5>
                                    <h6>01:21 PM</h6>
                                </li>
                                <li class="progtrckr-done">
                                    <h5>In Production</h5>
                                    <h6>Processing</h6>
                                </li>
                                <li class="progtrckr-todo">
                                    <h5>Shipped</h5>
                                    <h6>Pending</h6>
                                </li>
                                <li class="progtrckr-todo">
                                    <h5>Delivered</h5>
                                    <h6>Pending</h6>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Detail Section End -->
                                </div>
                                
                            </div>

                            <div class="tab-pane fade" id="pills-wishlist" role="tabpanel">
                                <div class="dashboard-wishlist">
                                    <div class="title">
                                        <h2>Mis favoritos</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                            <div class="product-box-3 theme-bg-white h-100">
                                                <div class="product-header">
                                                    <div class="product-image">
                                                        <a href="product-left-thumbnail.html">
                                                            <img src="{{ asset('images/veg-3/cate1/1.png') }}" class="img-fluid blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="product-header-top">
                                                            <button class="btn wishlist-button close_button">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-footer">
                                                    <div class="product-detail">
                                                        <span class="span-name">Vegetable</span>
                                                        <a href="product-left-thumbnail.html">
                                                            <h5 class="name">Kit canabico amarillo</h5>
                                                        </a>
                                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet
                                                            cheesy grin brie. Mascarpone cheese and wine hard cheese the
                                                            big cheese everyone loves smelly cheese macaroni cheese
                                                            croque monsieur.</p>
                                                        <h6 class="unit mt-1">Kit</h6>
                                                        <h5 class="price">
                                                            <span class="theme-color">$160.000</span>
                                                            <del>180.000</del>
                                                        </h5>
                                                        <div class="add-to-cart-box mt-2">
                                                            <button class="btn btn-add-cart addcart-button" tabindex="0">Ver
                                                            </button>
                                                            <div class="cart_qty qty-box">
                                                                <div class="input-group">
                                                                    <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                                    <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                                        <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-order" role="tabpanel">
                                <div class="dashboard-order">
                                    <div class="title">
                                        <h2>Mis compras</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="order-contain">
                                        

                                        <div class="order-box dashboard-bg-box">
                                            <div class="order-container">
                                                <div class="order-icon">
                                                    <i data-feather="box"></i>
                                                </div>

                                                <div class="order-detail">
                                                    <h4>Entrega <span class="success-bg">Exitosa</span></h4>
                                                    <h6 class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h6>
                                                </div>
                                            </div>

                                            <div class="product-order-detail">

                                                <div class="order-wrap">
                                                    <a href="product-left-thumbnail.html">
                                                        <h3>No de comprobante de compra: 5456554545</h3>
                                                    </a>
                                                    <p class="text-content"><strong>Fecha de la compra: 2024/05/20</strong></p>
                                                    <ul class="product-size">
                                                        <li>
                                                            <div class="size-box">
                                                                <h4 class="text-content"><strong>Total de la compra:&nbsp;</strong> </h4>
                                                                <h4> $180.000</h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="text-content"><strong>Dirección de envío: Cra. 21A # 105 - 29 Conjunto Torres de Asturias, Torre 5 Apto 301, Barrio Provenza </strong></h5>
                                                        </li>    
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-box dashboard-bg-box">
                                            <div class="order-container">
                                                <div class="order-icon">
                                                    <i data-feather="box"></i>
                                                </div>

                                                <div class="order-detail">
                                                    <h4>Entrega <span>Pendiente</span></h4>
                                                    <h6 class="text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                                </div>
                                            </div>
                                            <div class="product-order-detail">
                                                <a href="product-left-thumbnail.html" class="order-image">
                                                    <img src="../assets/images/vegetable/product/1.png" class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="order-wrap">
                                                    <a href="product-left-thumbnail.html">
                                                        <h3>No de comprobante de compra: 5456554545</h3>
                                                    </a>
                                                    <p class="text-content"><strong>Fecha de la compra: 2024/05/20</strong></p>
                                                    <ul class="product-size">
                                                        <li>
                                                            <div class="size-box">
                                                                <h4 class="text-content"><strong>Total de la compra:&nbsp;</strong> </h4>
                                                                <h4> $180.000</h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="text-content"><strong>Dirección de envío: Cra. 21A # 105 - 29 Conjunto Torres de Asturias, Torre 5 Apto 301, Barrio Provenza </strong></h5>
                                                        </li>    
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-box dashboard-bg-box">
                                            <div class="order-container">
                                                <div class="order-icon">
                                                    <i data-feather="box"></i>
                                                </div>

                                                <div class="order-detail">
                                                    <h4>Entrega <span class="success-bg">Exitosa</span></h4>
                                                    <h6 class="text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                                </div>
                                            </div>

                                            <div class="product-order-detail">
                                                <a href="product-left-thumbnail.html" class="order-image">
                                                    <img src="../assets/images/vegetable/product/1.png" class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="order-wrap">
                                                    <a href="product-left-thumbnail.html">
                                                        <h3>No de comprobante de compra: 5456554545</h3>
                                                    </a>
                                                    <p class="text-content"><strong>Fecha de la compra: 2024/05/20</strong></p>
                                                    <ul class="product-size">
                                                        <li>
                                                            <div class="size-box">
                                                                <h4 class="text-content"><strong>Total de la compra:&nbsp;</strong> </h4>
                                                                <h4> $180.000</h4>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="text-content"><strong>Dirección de envío: Cra. 21A # 105 - 29 Conjunto Torres de Asturias, Torre 5 Apto 301, Barrio Provenza </strong></h5>
                                                        </li>    
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-facturacion" role="tabpanel">
                                <div class="dashboard-order">
                                    <div class="title">
                                        <h2>Datos de Facturación</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="{{ asset('svg/leaf.svg#leaf') }}"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <a id="pills-facturacion"></a> 
                                            <div id="redirect" data-url="{{ route('user-dashboard') }}"></div>
                        
                                            <a id="pills-facturacion"></a>
                                            <div id="redirect" data-url="{{ route('user-dashboard') }}"></div>

                                            @if (session('success'))
                                                <script>
                                                    window.onload = function() {
                                                        var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                                                        window.location.href = redirectUrl + '#pills-facturacion';
                                                    }
                                                </script>
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif


                                           @if ($errors->any())
        
                                            <script>
                                                window.onload = function() {
                                                    var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                                                    window.location.href = redirectUrl + '#pills-facturacion';
                                                }
                                            </script>
                            
                                                <div class="alert alert-danger">
                                                    <strong>Debes diligenciar correctamente todos los campos del formulario marcados con (*) para poder guardarlo.</strong><br><br>
                                                    {{-- <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li></br>
                                                        @endforeach
                                                    </ul> --}}
                                                </div>
                                            @endif

                                    <div class="order-contain">
                                       

                                    <div class="order-box dashboard-bg-box">
                                        <div class="order-container mb-4">

                                            <div class="order-detail">
                                                <h4>Diligencia el formulario con la información de envío y facturación con la que deseas realizar tus compras. <span class="success-bg">Completa</span></h4>
                                                {{-- <h6 class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Lorem ipsum, dolor sit amet consectetur adipisicing dipisicing elit, Lorem ipsum, dolor sit amet consectetur adipisicing elit sdsdsdd.</h6> --}}
                                            </div>
                                        </div>

                                        <form action="{{route('user-profile.update') }}" method="POST">
                                            @csrf 
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="name_fac" class="form-label">* Nombre en la factura</label>
                                                <input type="text" class="form-control" id="name_fac" name="name_fac" value="{{ Auth::user()->name_fac ?: Auth::user()->name }}" required>

                                            </div>
                                        
                                            <div class="mb-3">
                                                <label for="address" class="form-label">* Dirección</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ Auth::user()->address }}" required>
                                            </div>
                                        
                                            <div class="mb-3">
                                                <label for="comments" class="form-label">Observaciones</label>
                                                <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Barrio, Torre, Apartamento y cualquier otra observación para la entrega del producto">{{ Auth::user()->comments }}</textarea>
                                            </div>
                                        
                                            <div class="row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label for="state" class="form-label">* Departamento</label>
                                                    <input type="text" class="form-control" id="state" name="state" value="{{ Auth::user()->state }}" >
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="city" class="form-label">* Ciudad</label>
                                                    <input type="text" class="form-control" id="city" name="city" value="{{ Auth::user()->city }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-4 mb-3">
                                                    <label for="id_number" class="form-label">* Número de Identificación</label>
                                                    <input type="number" class="form-control" id="id_number" name="id_number" value="{{ Auth::user()->id_number }}" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="email_fac" class="form-label">* Email de Facturación</label>
                                                    <input type="email" class="form-control" id="email_fac" name="email_fac" value="{{ Auth::user()->email_fac ?: Auth::user()->email }}" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="mobile_number" class="form-label">* Celular:</label>
                                                    <input type="tel" class="form-control" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" value="{{ Auth::user()->mobile_number }}">
                                                </div>
                                            </div>
                                        
                                            
                                        
                                            <button type="submit" class="mt-4 mb-4 btn btn-primary-custom btn-block">Guardar</button>
                                        </form>
                                        
                                        

                                        </div>  
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="tab-pane fade" id="pills-facturacion" role="tabpanel">
                                <div class="dashboard-address">
                                    <div class="title title-flex">
                                        <div>
                                            <h2>Datos de facturacion</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{asset('svg/leaf.svg#leaf') }}"></use>
                                                </svg>
                                            </span>
                                        </div>

                                        <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3" data-bs-toggle="modal" data-bs-target="#add-address"><i data-feather="plus" class="me-2"></i> Add New Address</button>
                                    </div>

                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault2" checked="">
                                                    </div>

                                                    <div class="label">
                                                        <label>Home</label>
                                                    </div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">Jack Jennas</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p>8424 James Lane South San Francisco, CA 94080
                                                                        </p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pin Code :</td>
                                                                    <td>+380</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td>+ 812-710-3798</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                        Remove</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault3">
                                                    </div>

                                                    <div class="label">
                                                        <label>Office</label>
                                                    </div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">Terry S. Sutton</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p>2280 Rose Avenue Kenner, LA 70062</p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pin Code :</td>
                                                                    <td>+25</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td>+ 504-228-0969</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                        Remove</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault4">
                                                    </div>

                                                    <div class="label">
                                                        <label>Neighbour</label>
                                                    </div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">Juan M. McKeon</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p>1703 Carson Street Lexington, KY 40593</p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pin Code :</td>
                                                                    <td>+78</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td>+ 859-257-0509</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                        Remove</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault5">
                                                    </div>

                                                    <div class="label">
                                                        <label>Home 2</label>
                                                    </div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">Gary M. Bailey</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p>2135 Burning Memory Lane Philadelphia, PA
                                                                            19135</p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pin Code :</td>
                                                                    <td>+26</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td>+ 215-335-9916</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                        Remove</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault1">
                                                    </div>

                                                    <div class="label">
                                                        <label>Home 2</label>
                                                    </div>

                                                    <div class="table-responsive address-table">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2">Gary M. Bailey</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>
                                                                        <p>2135 Burning Memory Lane Philadelphia, PA
                                                                            19135</p>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pin Code :</td>
                                                                    <td>+26</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Phone :</td>
                                                                    <td>+ 215-335-9916</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editProfile"><i data-feather="edit"></i>
                                                        Edit</button>
                                                    <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                        Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="tab-pane fade" id="pills-card" role="tabpanel">
                                <div class="dashboard-card">
                                    <div class="title title-flex">
                                        <div>
                                            <h2>My Card Details</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                                </svg>
                                            </span>
                                        </div>

                                        <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3" data-bs-toggle="modal" data-bs-target="#editCard"><i data-feather="plus" class="me-2"></i> Add New Card</button>
                                    </div>

                                    <div class="row g-4">
                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                            <div class="payment-card-detail">
                                                <div class="card-details">
                                                    <div class="card-number">
                                                        <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                    </div>

                                                    <div class="valid-detail">
                                                        <div class="title">
                                                            <span>valid</span>
                                                            <span>thru</span>
                                                        </div>
                                                        <div class="date">
                                                            <h3>08/05</h3>
                                                        </div>
                                                        <div class="primary">
                                                            <span class="badge bg-pill badge-light">primary</span>
                                                        </div>
                                                    </div>

                                                    <div class="name-detail">
                                                        <div class="name">
                                                            <h5>Audrey Carol</h5>
                                                        </div>
                                                        <div class="card-img">
                                                            <img src="../assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="edit-card">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#removeProfile"><i class="far fa-minus-square"></i> delete</a>
                                                </div>
                                            </div>

                                            <div class="edit-card-mobile">
                                                <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                            <div class="payment-card-detail">
                                                <div class="card-details card-visa">
                                                    <div class="card-number">
                                                        <h4>XXXX - XXXX - XXXX - 1536</h4>
                                                    </div>

                                                    <div class="valid-detail">
                                                        <div class="title">
                                                            <span>valid</span>
                                                            <span>thru</span>
                                                        </div>
                                                        <div class="date">
                                                            <h3>12/23</h3>
                                                        </div>
                                                        <div class="primary">
                                                            <span class="badge bg-pill badge-light">primary</span>
                                                        </div>
                                                    </div>

                                                    <div class="name-detail">
                                                        <div class="name">
                                                            <h5>Leah Heather</h5>
                                                        </div>
                                                        <div class="card-img">
                                                            <img src="../assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="edit-card">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#removeProfile"><i class="far fa-minus-square"></i> delete</a>
                                                </div>
                                            </div>

                                            <div class="edit-card-mobile">
                                                <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                            <div class="payment-card-detail">
                                                <div class="card-details debit-card">
                                                    <div class="card-number">
                                                        <h4>XXXX - XXXX - XXXX - 1366</h4>
                                                    </div>

                                                    <div class="valid-detail">
                                                        <div class="title">
                                                            <span>valid</span>
                                                            <span>thru</span>
                                                        </div>
                                                        <div class="date">
                                                            <h3>05/21</h3>
                                                        </div>
                                                        <div class="primary">
                                                            <span class="badge bg-pill badge-light">primary</span>
                                                        </div>
                                                    </div>

                                                    <div class="name-detail">
                                                        <div class="name">
                                                            <h5>mark jecno</h5>
                                                        </div>
                                                        <div class="card-img">
                                                            <img src="../assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="edit-card">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#removeProfile"><i class="far fa-minus-square"></i> delete</a>
                                                </div>
                                            </div>

                                            <div class="edit-card-mobile">
                                                <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                <div class="dashboard-profile">
                                    <div class="title">
                                        <h2>My Profile</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="profile-detail dashboard-bg-box">
                                        <div class="dashboard-title">
                                            <h3>Profile Name</h3>
                                        </div>
                                        <div class="profile-name-detail">
                                            <div class="d-sm-flex align-items-center d-block">
                                                <h3>Vicki E. Pope</h3>
                                                <div class="product-rating profile-rating">
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
                                                </div>
                                            </div>

                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editProfile">Edit</a>
                                        </div>

                                        <div class="location-profile">
                                            <ul>
                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="map-pin"></i>
                                                        <h6>Downers Grove, IL</h6>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="mail"></i>
                                                        <h6>vicki.pope@gmail.com</h6>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="check-square"></i>
                                                        <h6>Licensed for 2 years</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="profile-description">
                                            <p>Residences can be classified by and how they are connected to
                                                neighbouring residences and land. Different types of housing tenure can
                                                be used for the same physical type.</p>
                                        </div>
                                    </div>

                                    <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <div class="dashboard-title mb-3">
                                                    <h3>Profile About</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Gender :</td>
                                                                <td>Female</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Birthday :</td>
                                                                <td>21/05/1997</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"> +91 846 - 547 -
                                                                        210</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>549 Sulphur Springs Road, Downers, IL</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="dashboard-title mb-3">
                                                    <h3>Login Details</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Email :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)">vicki.pope@gmail.com
                                                                        <span data-bs-toggle="modal" data-bs-target="#editProfile">Edit</span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)">●●●●●●
                                                                        <span data-bs-toggle="modal" data-bs-target="#editProfile">Edit</span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xxl-5">
                                                <div class="profile-image">
                                                    <img src="../assets/images/inner-page/dashboard-profile.png" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-crear-editar" role="tabpanel">
                                <div class="dashboard-download">
                                    <div class="title">
                                        <h2>Crear | Editar | Eliminar</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="download-detail dashboard-bg-box">


                                        <div class="select-filter-box">

                                            <ul class="nav nav-pills filter-box" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-data-tab" data-bs-toggle="pill" data-bs-target="#pills-data" type="button">Crear | Editar | Eliminar</button>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="" id="pills-data" role="tabpanel">
                                                <div class="download-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    
                                                                    <th>Descripción</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Productos</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn btn-primary-custom btn-block" type="button" onclick="window.location.href = '{{ route('product-create') }}'">Ir</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                

                                                                
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Publicaciones</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn btn-primary-custom btn-block" type="button" onclick="window.location.href = '{{ route('blog.create') }}'">Ir</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                

                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Usuarios</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn btn-primary-custom btn-block" type="button">Ir</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>3</td>

                                                                    <td>Ventas</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn btn-primary-custom btn-block" type="button">Ir</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-download" role="tabpanel">
                                <div class="dashboard-download">
                                    <div class="title">
                                        <h2>Descargas</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="download-detail dashboard-bg-box">


                                        <div class="select-filter-box">

                                            <ul class="nav nav-pills filter-box" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-data-tab" data-bs-toggle="pill" data-bs-target="#pills-data" type="button">Descargas</button>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="" id="pills-data" role="tabpanel">
                                                <div class="download-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    
                                                                    <th>Descripción</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Usuarios registrados</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Productos existentes</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>

                                                                    <td>Ventas y números de compra Wompi</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>

                                                                    <td>Usuarios en Formulario de Contacto</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>

                                                                    <td>Usuarios inscritos en el Informativo</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>

                                                                    <td>Posts del blog</td>
                                                                    <td>
                                                                        <div class="dropdown download-dropdown">
                                                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Descargar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-security" role="tabpanel">
                                <div class="dashboard-privacy">
                                    <div class="dashboard-bg-box">
                                        <div class="dashboard-title mb-4">
                                            <h3>Política de tratamiento de datos</h3>
                                        </div>

                                        <div class="privacy-box">
                                            <div class="d-flex align-items-start">
                                                <h6>Allows others to see my profile , Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum debitis recusandae, expedita, doloremque earum asperiores distinctio obcaecati harum nihil, illum saepe. Libero animi saepe eaque excepturi error nisi recusandae illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque maxime facilis animi doloribus totam beatae quas, veniam amet maiores deleniti officia illo exercitationem corporis ducimus quos commodi harum explicabo ut?</h6>

                                            </div>
                                        </div>

                                       

                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Leer</button>
                                    </div>

                                    <div class="dashboard-bg-box mt-4">
                                        <div class="dashboard-title mb-4">
                                            <h3>Términos y condiciones</h3>
                                        </div>

                                        <div class="privacy-box">
                                            <div class="d-flex align-items-start">
                                                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi neque unde magni consectetur voluptatibus dolore nihil quod? Recusandae possimus tenetur atque soluta iste harum doloribus modi, illo accusantium? Illo, debitis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi omnis magnam iure architecto porro aut a inventore quas, dolorem repellat ipsam nisi corrupti minima laudantium sit eius. Rerum, non vel!</h6>
 
                                        </div>


                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Leer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- User Dashboard Section End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Función para activar el panel correspondiente al hash
            function activatePanel(hash) {
                // Oculta todos los paneles
                document.querySelectorAll('.tab-pane').forEach(function(pane) {
                    pane.classList.remove('show', 'active');
                });
                // Muestra el panel correspondiente al hash
                let tabPane = document.querySelector(hash);
                if (tabPane) {
                    tabPane.classList.add('show', 'active');
                }
            }
        
            // Monitorea el cambio en la URL
            window.addEventListener('hashchange', function() {
                // Obtiene el nuevo hash de la URL
                let newHash = window.location.hash;
                // Activa el panel correspondiente al nuevo hash
                activatePanel(newHash);
            });
        
            // Activa el panel correspondiente al hash actual cuando se carga la página
            let currentHash = window.location.hash;
            if (!currentHash) {
                // Si no hay ningún hash, activa el panel por defecto (#pills-dashboard)
                activatePanel('#pills-dashboard');
            } else {
                // Si hay un hash, activa el panel correspondiente
                activatePanel(currentHash);
            }
        });
        </script>
    @include('layouts._partials.footer')