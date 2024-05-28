@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout section Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                @if (session('success2'))
                    <div class="alert alert-success">
                        {{ session('success2') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    
                                    
                                        <div class="dashboard-order">
                                            <div class="title">
                                                <h2>Resumen de Facturación</h2>
                                                <span class="title-leaf title-leaf-gray">
                                                    <svg class="icon-width">
                                                        <use xlink:href="{{ asset('svg/leaf.svg#leaf') }}"></use>
                                                    </svg>
                                                </span>
                                            </div>
      
        
                                            <div class="order-contain">
                                               
        
                                            <div class="order-box dashboard-bg-box">
                                                <div class="order-container mb-4">
        
                                                    <div class="order-detail">
                                                        <h4>Verifica tus datos de facturación y envío. </h4><span class="success-bg"><a href="{{ route('summary') }}"> Editar</a></span>
                                                        {{-- <h6 class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Lorem ipsum, dolor sit amet consectetur adipisicing dipisicing elit, Lorem ipsum, dolor sit amet consectetur adipisicing elit sdsdsdd.</h6> --}}
                                                    </div>
                                                </div>
        
                                                <form action="">
                                                    
                                                    <div class="mb-4">
                                                        <label for="name_fac" class="form-label">Nombre en la factura</label>
                                                        <h3>{{ Auth::user()->name_fac ?: Auth::user()->name }}</h3>
                                                    </div>
                                                
                                                    <div class="mb-4">
                                                        <label for="address" class="form-label">Dirección</label>
                                                        <h3>{{ Auth::user()->address }}</h3>
                                                    </div>
                                                
                                                    <div class="mb-4">
                                                        <label for="comments" class="form-label">Observaciones</label>
                                                        <h3>{{ Auth::user()->comments }}</h3>
                                                    </div>
                                                
                                                    <div class="row mb-4">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="state" class="form-label">* Departamento</label>
                                                            <h3>{{ Auth::user()->state }}</h3>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="city" class="form-label">* Ciudad</label>
                                                            <h3>{{ Auth::user()->city }}</h3>
                                                        </div>
                                                    </div>
        
                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="id_number" class="form-label">* Número de Identificación</label>
                                                            <h3>{{ Auth::user()->id_number }}</h3>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="email_fac" class="form-label">* Email de Facturación</label>
                                                            <h3>{{ Auth::user()->email_fac ?: Auth::user()->email }}</h3>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="mobile_number" class="form-label">* Celular:</label>
                                                            <h3>{{ Auth::user()->mobile_number }}</h3>
                                                        </div>
                                                    </div>
                                                
                                                </form>
                                                
                                                
        
                                                </div>  
                                            </div>
                                        </div>
                                    
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3>Resumen de la orden</h3>
                            </div>
                
                            <ul class="summery-contain">
                                @foreach($cart->items as $item)
                                @php
                                    $precioOriginal = $item->product->precio;
                                    $precioConDescuento = $precioOriginal - (($precioOriginal * $item->product->descuento) / 100);
                                    $precioFinal = (!empty($item->product->descuento) && is_numeric($item->product->descuento) && $item->product->descuento > 0) ? $precioConDescuento : $item->price;
                                @endphp
                                <li>
                                    <img src="{{ asset('images/products/'.$item->product->imagen) }}" class="img-fluid blur-up lazyloaded checkout-image" alt="{{ $item->product->nombre }}">
                                    <h4>{{ $item->product->nombre }} <span>X {{ $item->quantity }}</span></h4>
                                    <h4 class="price">${{ number_format($item->quantity * $precioFinal, 0, '.', '.') }}</h4>
                                </li>
                                @endforeach
                            </ul>
                
                            <ul class="summery-total">
                                @if(!empty($totalAhorrado) && $totalAhorrado > 0)
                                <li>
                                    <h4>Ahorraste</h4>
                                    <h4 class="price theme-color">(-) ${{ number_format($totalAhorrado, 0, '.', '.') }}</h4>
                                </li>
                                @endif

                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">${{ number_format($subtotal, 0, '.', '.') }}</h4>
                                </li>
                
                                <li>
                                    <h4>Envío</h4>
                                    <h4 class="price">${{ number_format($costoEnvio, 0, '.', '.') }}</h4>
                                </li>
                
                
                                <li class="list-total">
                                    <h4>Total (COP)</h4>
                                    <h4 class="price theme-color">${{ number_format($subtotal + $costoEnvio, 0, '.', '.') }}</h4>
                                </li>
                            </ul>
                        </div>
                
                        {{-- <div class="checkout-offer">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <img src="../assets/images/inner-page/offer.svg" class="img-fluid" alt="">
                                </div>
                                <div class="offer-name">
                                    <h6>Available Offers</h6>
                                </div>
                            </div>
                
                            <ul class="offer-detail">
                                <li>
                                    <p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>
                                </li>
                                <li>
                                    <p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>
                                </li>
                            </ul>
                        </div> --}}
                
                        
                    @php
                        $user = auth()->user();
                    @endphp
                    
                    <form>
                        <script
                            src="https://checkout.wompi.co/widget.js"
                            data-render="button"
                            data-public-key="pub_test_BO7gva7pH8AR5j0hFYyVUVTxXZ0vFifH"
                            data-currency="COP"
                            data-amount-in-cents="{{ $amountInCents }}"
                            data-reference="{{ $reference }}"
                            data-signature:integrity="{{ $integrity }}"
                            data-redirect-url="{{ route('confirmation') }}"
                            data-customer-data:email="{{ Auth::user()->email_fac ?: Auth::user()->email }}"
                            data-customer-data:full-name="{{ Auth::user()->name_fac ?: Auth::user()->name }}"
                            data-customer-data:phone-number="{{ Auth::user()->mobile_number }}"
                            data-customer-data:phone-number-prefix="+57"
                            data-customer-data:legal-id="{{ Auth::user()->id_number }}"
                            data-customer-data:legal-id-type="CC"
                            data-shipping-address:address-line-1="{{ Auth::user()->address }}"
                            data-shipping-address:address-line-2="{{ Auth::user()->comments }}"
                            data-shipping-address:country="CO"
                            data-shipping-address:city="{{ Auth::user()->city }}"
                            data-shipping-address:phone-number="{{ Auth::user()->mobile_number }}"
                            data-shipping-address:region="{{ Auth::user()->state }}"
                            data-shipping-address:name="{{ Auth::user()->name_fac ?: Auth::user()->name }}"
                        ></script>
                    </form>
                    
                    
                    </div>
                </div>
                

                
                
                
    </section>

    @include('layouts._partials.footer')