<!-- Footer Start -->
<footer class="section-t-space footer-section-2">
    <div class="container-fluid-lg">
        <div class="main-footer">
            <div class="row g-md-4 gy-sm-5 gy-2">
                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <a href="{{ route('home') }}" class="foot-logo">
                        <img src="{{ asset('images/logo/weew-logo.png') }}" class="img-fluid" alt="">
                    </a>
                    <p class="information-text">it is a long established fact that a reader will be distracted
                        by the readable content.</p>
                    <ul class="social-icon">
                        <li>
                            <a href="www.facebook.com">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="www.goolge.com">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="www.twitter.com">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="www.instagram.com">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="www.pinterest.com">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>

                    {{-- <div class="social-app mt-sm-4 mt-3 mb-4">
                        <ul>
                            <li>
                                <a href="https://play.google.com/store/apps" target="_blank">
                                    <img src="{{ asset('images/playstore.svg') }}" class="blur-up lazyload" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.apple.com/in/app-store/" target="_blank">
                                    <img src="{{ asset('images/appstore.svg') }}" class="blur-up lazyload" alt="">
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>

                <div class="col-xxl-2 col-xl-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Weed Well</h4>
                    </div>
                    <ul class="footer-list footer-contact mb-sm-0 mb-3">
                        <li>
                            <a href="{{ route('about-us') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Terms & Coditions</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Privacy policies</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>FAQs</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-2 col-xl-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Useful Link</h4>
                    </div>
                    <ul class="footer-list footer-contact mb-sm-0 mb-3">
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Your Order</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Your Account</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Track Orders</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Your Wishlist</a>
                        </li>

                    </ul>
                </div>

                <div class="col-xxl-2 col-xl-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Categories</h4>
                    </div>
                    <ul class="footer-list footer-contact mb-sm-0 mb-3">
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Shop</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Store infomation</h4>
                    </div>
                    <ul class="footer-address footer-contact">
                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box flex-start-box">
                                    <i data-feather="map-pin"></i>
                                    <p>Weed Well, Bucaramanga - Colombia</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box">
                                    <i data-feather="phone"></i>
                                    <p>Call us: +57 3144213772</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box">
                                    <i data-feather="mail"></i>
                                    <p>Email Us: support@weedwell.com</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box">
                                    <i data-feather="printer"></i>
                                    <p>Tel: 607 123456</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="left-footer">
                <p>{{ \Carbon\Carbon::now()->year }} Copyright By Weed Well | Developed By PixelCodeLabs</p>
            </div>
            <div class="right-footer">
                <ul class="payment-box">
                    <li>
                        <img src="{{ asset('images/icon/paymant/visa.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/icon/paymant/discover.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/icon/paymant/american.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/icon/paymant/master-card.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/icon/paymant/giro-pay.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="{{ asset('images/product/category/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                            <h4 class="price">$36.99</h4>
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
                                <span class="ms-2">8 Reviews</span>
                                <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                            </div>

                            <div class="product-detail">
                                <h4>Product Details :</h4>
                                <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                    Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                    Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                    muffin I love carrot cake sugar plum dessert bonbon.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>Brand Name:</h5>
                                        <h6>Black Forest</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Code:</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Type:</h5>
                                        <h6>White Cream Cake</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>Cake Size :</h4>
                                <select class="form-select select-form-size">
                                    <option selected="">Select Size</option>
                                    <option value="1.2">1/2 KG</option>
                                    <option value="0">1 KG</option>
                                    <option value="1.5">1/5 KG</option>
                                    <option value="red">Red Roses</option>
                                    <option value="pink">With Pink Roses</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';" class="btn btn-md add-cart-button icon">Add
                                    To Cart</button>
                                <button onclick="location.href = 'product-left.html';" class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    View More Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View Modal Box End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                    <p class="mt-1 text-content">Recommended deals for you.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="{{ route('home') }}" class="deal-image">
                                    <img src="{{ asset('images/products/10.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <a href="{{ route('home') }}" class="deal-contain">
                                    <h5>Cannabis Pipe - Buy 1 Get 1 Free</h5>
                                    <h6>$52.700 <del>80.000</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="{{ route('home') }}" class="deal-image">
                                    <img src="{{ asset('images/products/10.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <a href="{{ route('home') }}" class="deal-contain">
                                    <h5>Cannabis Pipe - Buy 1 Get 1 Free</h5>
                                    <h6>$52.700 <del>80.000</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="{{ route('home') }}" class="deal-image">
                                    <img src="{{ asset('images/products/10.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <a href="{{ route('home') }}" class="deal-contain">
                                    <h5>Cannabis Pipe - Buy 1 Get 1 Free</h5>
                                    <h6>$52.700 <del>80.000</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="{{ route('home') }}" class="deal-image">
                                    <img src="{{ asset('images/products/10.png') }}" class="blur-up lazyload" alt="">
                                </a>

                                <a href="{{ route('home') }}" class="deal-contain">
                                    <h5>Cannabis Pipe - Buy 1 Get 1 Free</h5>
                                    <h6>$52.700 <del>80.000</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Cookie Bar Box Start -->
{{-- <div class="cookie-bar-box">
    <div class="cookie-box">
        <div class="cookie-image">
            <img src="{{ asset('images/cookie-bar.png') }}" class="blur-up lazyload" alt="">
            <h2>Cookies!</h2>
        </div>

        <div class="cookie-contain">
            <h5 class="text-content">We use cookies to make your experience better</h5>
        </div>
    </div>

    <div class="button-group">
        <button class="btn privacy-button">Privacy Policy</button>
        <button class="btn ok-button">OK</button>
    </div>
</div> --}}
<!-- Cookie Bar Box End -->

<!-- Items section Start -->
<div class="button-item">
    <button class="item-btn btn text-white">
        <i class="fa-solid fa-bag-shopping"></i>
    </button>
</div>
<div class="item-section">
    <button class="close-button">
        <i class="fas fa-times"></i>
    </button>
    <h6>
        <i class="fa-solid fa-bag-shopping"></i>
        <span>5 Items</span>
    </h6>
    <ul class="items-image">
        <li>
            <img src="{{ asset('images/veg-3/cate1/1.png') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('images/veg-3/cate1/2.png') }}" alt="">
        </li>
        <li>+3</li>
    </ul>
    <button onclick="location.href = 'cart.html';" class="btn item-button btn-sm fw-bold">$ 140.000</button>
</div>
<!-- Items section End -->

<!-- Tap to top and theme setting button start -->
<div class="theme-option">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>Color</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                <input type="color" class="form-control form-control-color" id="colorPick" value="#0da487" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    {{-- <li>
                        <div class="setting-name">
                            <h4>Dark</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">Dark</button>
                            <button class="btn btn-2 unline" id="lightButton">Light</button>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top and theme setting button end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->


{{-- JAVASCRIPT MODALS --}}

<!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Mostrar el modal de advertencia al cargar la página
    $(document).ready(function () {
        $('#modalAdvertencia').modal('show');
    });

    // Función para abrir el modal de advertencia para menores
    $('#btnMenorEdad').click(function () {
        $('#modalAdvertencia').modal('hide'); // Ocultar el modal actual
        $('#modalMenores').modal('show'); // Mostrar el modal para menores
    });

    // Función para cerrar el modal de advertencia para menores y permitir navegar por el sitio
    $('#btnAceptarMenores').click(function () {
        $('#modalMenores').modal('hide');
        // Si el usuario ha confirmado que es mayor de edad, podría continuar con la navegación aquí
        // Establecer la cookie para indicar que el usuario confirmó su edad
        document.cookie = "age_confirmed=true; expires=Sat, 01 Jan 2025 00:00:00 UTC; path=/";
    });

    // Función para redirigir a una página en blanco al salir del sitio
    $('#btnSalirSitio').click(function () {
        window.location.href = 'https://google.com.co';
    });

    // Función para cerrar el modal y permitir la navegación en el sitio
    $('#btnMayorEdad').click(function () {
        $('#modalAdvertencia').modal('hide');
        // Si el usuario ha confirmado que es mayor de edad, podría continuar con la navegación aquí
        // Establecer la cookie para indicar que el usuario confirmó su edad
        document.cookie = "age_confirmed=true; expires=Sat, 01 Jan 2025 00:00:00 UTC; path=/";
    });

    // Evitar que se cierre el modal al hacer clic fuera de él
    $('#modalAdvertencia, #modalMenores').on('click.bs.modal', function (e) {
        if ($(e.target).hasClass('modal')) {
            return false;
        }
    });
</script>

{{-- JAVASCRIPT MODALS END --}}

<!-- latest jquery-->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


<!-- jquery ui-->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('js/feather/feather.min.js') }}"></script>
<script src="{{ asset('js/feather/feather-icon.js') }}"></script>

<!-- Lazyload Js -->
<script src="{{ asset('js/lazysizes.min.js') }}"></script>

<!-- Slick js-->
<script src="{{ asset('js/slick/slick.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('js/slick/custom_slick.js') }}"></script>

<!-- Auto Height Js -->
<script src="{{ asset('js/auto-height.js') }}"></script>

<!-- Quantity Js -->
<script src="{{ asset('js/quantity.js') }}"></script>

<!-- Timer Js -->
<script src="{{ asset('js/timer1.js') }}"></script>
<script src="{{ asset('js/timer2.js') }}"></script>
<script src="{{ asset('js/timer3.js') }}"></script>
<script src="{{ asset('js/timer4.js') }}"></script>

<!-- Fly Cart Js -->
<script src="{{ asset('js/fly-cart.js') }}"></script>

<!-- WOW js -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom-wow.js') }}"></script>

<!-- script js -->
<script src="{{ asset('js/script.js') }}"></script>

<!-- theme setting js -->
<script src="{{ asset('js/theme-setting.js') }}"></script>

 
<style>
    img.btn-whatsapp {
    display: block !important;
    position: fixed;
    z-index: 9999999;
    bottom: 150px;
    right: 5px;
    cursor: pointer;
    border-radius:60px !important;
    }
    img.btn-whatsapp:hover{
    border-radius:60px !important;
    -webkit-box-shadow: 0px 0px 15px 0px rgba(7,94,84,1); 
    -moz-box-shadow: 0px 0px 15px 0px rgba(7,94,84,1);
    box-shadow: 0px 0px 15px 0px rgba(7,94,84,1);
    transition-duration: 1s;
    } 
 </style>
 <a href="https://api.whatsapp.com/send?phone=(+57)3164585454&text=Buen%20día,%20deseo%20contactar%20a%20un%20Asesor" target="_blank"><img class="btn-whatsapp" src="{{ asset('images/whatsapp.png') }}" width="54" height="54" alt="Whatsapp" target="_blank"></a>   
    
    
    
    
    
    
</body>

</html>