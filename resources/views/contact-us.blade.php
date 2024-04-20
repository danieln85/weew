@include('layouts._partials.header')
@include('layouts.includes.menu-weew')



    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Contact Us</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Box Section Start -->
    <section class="contact-box-section mb-4">
        <div class="container-fluid-lg">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-6">
                    <div class="left-sidebar-box">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-image">
                                    <img src="{{ asset('images/contact/weew-monster-contactanos.png') }}" class="img-fluid blur-up lazyloaded" alt="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-title">
                                    <h3>Ponte en contacto</h3>
                                </div>

                                <div class="contact-detail">
                                    <div class="row g-4">
                                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-phone"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Celular</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p><a href="tel:+573164585454">(+57) 316 458 5454</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Email</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p><a href="mailto:info@weew.com.co">info@weew.com.co</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>London Office</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p>Cruce Casa de Postas 29</p>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-building"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Bournemouth Office</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p>Visitación de la Encina 22</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="col-lg-6">
                    
                    <a id="diligencia-correctamente"></a> 
                    <div id="redirect" data-url="{{ route('contact-us') }}"></div>

                    <a id="envio-exitoso"></a>
                    <div id="redirect" data-url="{{ route('contact-us') }}"></div>
          
                    @if ($errors->any())

                    <script>
                        window.onload = function() {
                            var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                            window.location.href = redirectUrl + '#diligencia-correctamente';
                        }
                    </script>
                    
                        <div class="alert alert-danger">
                            <strong>Por favor diligencia correctamente el formulario.</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li></br>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                    <script>
                        window.onload = function() {
                            var redirectUrl = document.getElementById('redirect').getAttribute('data-url');
                            window.location.href = redirectUrl + '#envio-exitoso';
                        }
                    </script>
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                    <div class="title d-block">
                        <h2>¡Te escuchamos!</h2>
                    </div>
                    <div class="right-sidebar-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput" class="form-label">Nombre</label>
                                    <div class="custom-input">
                                        <input type="text" class="form-control" id="exampleFormControlInput" name="name" placeholder="Nombre" value="{{ old('name')}}" >
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput2" class="form-label">Email</label>
                                    <div class="custom-input">
                                        <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="email" value="{{ old('email')}}" required >
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput3" class="form-label">Celular</label>
                                    <div class="custom-input">
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Celular" pattern="[0-9]{10}" value="{{ old('mobile')}}" >
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlTextarea" class="form-label">Mensaje</label>
                                    <div class="custom-textarea">
                                        <textarea class="form-control" id="exampleFormControlTextarea" name="message" placeholder="Escribe tu mensaje" rows="6" >{{ old('message') }}</textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-animation btn-md fw-bold ms-auto">Enviar mensaje</button>
                    </div>
                </form>
                </div>
            
            </div>
        </div>
    </section>
    <!-- Contact Box Section End -->

    <!-- Map Section Start -->
    {{-- <section class="map-section">
        <div class="container-fluid p-0">
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2994.3803116994895!2d55.29773782339708!3d25.222534631321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!3m2!1d25.2048493!2d55.2707828!4m0!5e1!3m2!1sen!2sin!4v1652217109535!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section> --}}
    <!-- Map Section End -->

    <script>
        document.getElementById('mobile').addEventListener('input', function (e) {
    // Remover cualquier carácter no numérico del valor del campo
    this.value = this.value.replace(/\D/g, '');
    
    // Limitar la longitud del campo a 10 dígitos
    if (this.value.length > 10) {
        this.value = this.value.slice(0, 10);
    }
});
        </script>

    @include('layouts._partials.footer')    