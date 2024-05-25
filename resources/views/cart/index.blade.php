@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>Carrito</h2>
                    <nav>
                        <ol class="d-flex mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Carrito</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Cart Section Start -->
{{-- aviso sesion --}}
<div class="container ">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-3">
            @if (session('success2'))
                <div class="alert alert-success">
                    {{ session('success2') }}
                </div>
            @endif
        </div>
    </div>
</div>
{{-- aviso sesion ends--}}
    <div class="container-fluid-lg">
        <div class="row g-sm-5 g-3">

            @if($cart->items->isEmpty())
                <h2>¡Tu carrito está vacío!</h2>
            @else

            <div class="col-xxl-9">
                <div class="cart-table">
                    <div class="table-responsive-xl">

                        
                        <table class="table">
                            <tbody>
                                @foreach($cart->items as $item)
                                @php
                                    $precioConDescuento = $item->product->precio - (($item->product->precio * $item->product->descuento) / 100);
                                    $precioFinal = (!empty($item->product->descuento) && is_numeric($item->product->descuento) && $item->product->descuento > 0) ? $precioConDescuento : $item->price;
                                @endphp
                                <tr class="product-box-contain">
                                    <td class="product-detail">
                                        <div class="product border-0 mt-4">
                                            <a href="{{ route('product-details', ['id' => $item->product->id]) }}" class="product-image">
                                                <img src="{{ asset('images/products/'.$item->product->imagen) }}" class="img-fluid blur-up lazyload" alt="{{ $item->product->nombre }}">
                                            </a>
                                            <div class="product-detail">
                                                <ul>
                                                    <li class="text-content d-inline-block">
                                                        <a href="{{ route('product-details', ['id' => $item->product->id]) }}">{{ $item->product->nombre }}</a>
                                                    </li>
                                                    @if (!empty($item->product->descuento) && is_numeric($item->product->descuento) && $item->product->descuento > 0)
                                                    <li>
                                                        <h5 class="text-content d-inline-block">Precio:</h5>
                                                        <span>${{ number_format($precioConDescuento, 0, '.', '.') }}</span>
                                                    </li>
                                                    <li>
                                                        <h5 class="price d-inline-block">{{ $item->product->descuento }}%</h5>
                                                        <span><del>${{ number_format($item->price, 0, '.', '.') }}</del></span>
                                                    </li>
                                                    @else
                                                    <li>
                                                        <h5 class="text-content d-inline-block">Precio:</h5>
                                                        <span>${{ number_format($item->price, 0, '.', '.') }}</span>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                        
                                    <td class="quantity">
                                        
                                        <div class="quantity-price">
                                            <div class="cart_qty">
                                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus" data-type="minus" data-field="quantity[{{ $item->id }}]">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="number" name="quantity" class="form-control input-number qty-input" value="{{ $item->quantity }}" min="1" max="{{ $item->product->stock }}">
                                                        <button type="button" class="btn qty-right-plus" data-type="plus" data-field="quantity[{{ $item->id }}]">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <button type="submit" class="btn btn-update" style="
                                                    padding-left: 65px;"><strong>Actualizar</strong></button>

                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                        
                                    <td class="subtotal">
                                        <h4 class="table-title text-content mb-4">Total</h4>
                                        <h5>${{ number_format($item->quantity * $precioFinal, 0, '.', '.') }}</h5>
                                    </td>
                        
                                    <td class="save-remove">
                                        <h4 class="table-title text-content mb-3 mt-4">Acción</h4>
                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="display: inline; padding-left: 0px!important">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-update mt-0 pt-0" style="
                                            padding-left: 0px;"><strong>Remover</strong></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                        
                        

                        
                        
                    </div>
                </div>
            </div>

            <div class="col-xxl-3">
                <div class="summery-box p-sticky">
                    <div class="summery-header">
                        <h3>Cart Total</h3>
                    </div>

                    <div class="summery-contain">
                        <div class="coupon-cart">
                            <h6 class="text-content mb-2">Coupon Apply</h6>
                            <div class="mb-3 coupon-box input-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Coupon Code Here...">
                                <button class="btn-apply">Apply</button>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <h4>Subtotal</h4>
                                <h4 class="price">${{ number_format($cart->items->sum('price'), 0, '.', '.') }}</h4>
                            </li>

                            <li>
                                <h4>Descuento</h4>
                                <h4 class="price">(-) 0.00</h4>
                            </li>

                            <li class="align-items-start">
                                <h4>Envío</h4>
                                <h4 class="price text-end">$6.90</h4>
                            </li>
                        </ul>
                    </div>

                    <ul class="summery-total">
                        <li class="list-total border-top-0">
                            <h4>Total (COP)</h4>
                            <h4 class="price theme-color">${{ number_format($cart->items->sum('quantity') * $cart->items->first()->price, 0, '.', '.') }}</h4>
                        </li>
                    </ul>

                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button onclick="location.href = '{{ route('checkout.index') }}';" class="btn btn-animation proceed-btn fw-bold">Ir a pagar</button>
                            </li>

                            <li>
                                <button onclick="location.href = '{{ route('shop') }}';" class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>Volver a la tienda</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</section>
<!-- Cart Section End -->

@include('layouts._partials.footer')





