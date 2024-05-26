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

                                {{-- <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="../../oaflahpk.json" trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div class="form-check custom-form-check hide-check-box">
                                                                    <input class="form-check-input" type="radio" name="standard" id="standard" checked="">
                                                                    <label class="form-check-label" for="standard">Standard
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div class="form-check mb-0 custom-form-check show-box-checked">
                                                                    <input class="form-check-input" type="radio" name="standard" id="future">
                                                                    <label class="form-check-label" for="future">Future
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 future-box">
                                                    <div class="future-option">
                                                        <div class="row g-md-0 gy-4">
                                                            <div class="col-md-6">
                                                                <div class="delivery-items">
                                                                    <div>
                                                                        <h5 class="items text-content"><span>3
                                                                                Items</span>@
                                                                            $693.48</h5>
                                                                        <h5 class="charge text-content">Delivery Charge
                                                                            $34.67
                                                                            <button type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Charge">
                                                                                <i class="fa-solid fa-circle-exclamation"></i>
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <form class="form-floating theme-form-floating date-box">
                                                                    <input type="date" class="form-control">
                                                                    <label>Select Date</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="../../qmcsqnle.json" trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a" class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Payment Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="accordion accordion-flush custom-accordion" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingFour">
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="cash"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="cash" checked=""> Cash
                                                                    On Delivery</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p class="cod-review">Pay digitally with SMS Pay
                                                                Link. Cash may not be accepted in COVID restricted
                                                                areas. <a href="javascript:void(0)">Know more.</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingOne">
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="credit"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="credit">
                                                                    Credit or Debit Card</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row g-2">
                                                                <div class="col-12">
                                                                    <div class="payment-method">
                                                                        <div class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                            <input type="text" class="form-control" id="credit2" placeholder="Enter Credit & Debit Card Number">
                                                                            <label for="credit2">Enter Credit & Debit
                                                                                Card Number</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control" id="expiry" placeholder="Enter Expiry Date">
                                                                        <label for="expiry">Expiry Date</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control" id="cvv" placeholder="Enter CVV Number">
                                                                        <label for="cvv">CVV Number</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                                                        <label for="password">Password</label>
                                                                    </div>
                                                                </div>

                                                                <div class="button-group mt-0">
                                                                    <ul>
                                                                        <li>
                                                                            <button class="btn btn-light shopping-button">Cancel</button>
                                                                        </li>

                                                                        <li>
                                                                            <button class="btn btn-animation">Use This
                                                                                Card</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingTwo">
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="banking"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="banking">Net
                                                                    Banking</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <h5 class="text-uppercase mb-4">Select Your Bank
                                                            </h5>
                                                            <div class="row g-2">
                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank1">
                                                                        <label class="form-check-label" for="bank1">Industrial & Commercial
                                                                            Bank</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank2">
                                                                        <label class="form-check-label" for="bank2">Agricultural Bank</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank3">
                                                                        <label class="form-check-label" for="bank3">Bank
                                                                            of America</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank4">
                                                                        <label class="form-check-label" for="bank4">Construction Bank Corp.</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank5">
                                                                        <label class="form-check-label" for="bank5">HSBC
                                                                            Holdings</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="bank6">
                                                                        <label class="form-check-label" for="bank6">JPMorgan Chase & Co.</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="select-option">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <select class="form-select theme-form-select">
                                                                                <option value="hsbc">HSBC Holdings
                                                                                </option>
                                                                                <option value="loyds">Lloyds Banking
                                                                                    Group</option>
                                                                                <option value="natwest">Nat West Group
                                                                                </option>
                                                                                <option value="Barclays">Barclays
                                                                                </option>
                                                                                <option value="other">Others Bank
                                                                                </option>
                                                                            </select>
                                                                            <label>Select Other Bank</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingThree">
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="wallet"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="wallet">My
                                                                    Wallet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <h5 class="text-uppercase mb-4">Select Your Wallet
                                                            </h5>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <label class="form-check-label" for="amazon"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="amazon">Amazon Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="gpay">
                                                                        <label class="form-check-label" for="gpay">Google Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="airtel">
                                                                        <label class="form-check-label" for="airtel">Airtel Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="paytm">
                                                                        <label class="form-check-label" for="paytm">Paytm Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="jio">
                                                                        <label class="form-check-label" for="jio">JIO
                                                                            Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="free">
                                                                        <label class="form-check-label" for="free">Freecharge</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
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
                            data-redirect-url="https://www.weew.com.co/gracias"
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