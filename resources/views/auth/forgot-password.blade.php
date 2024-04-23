@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{ __('logueo.forgot_password') }}</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('logueo.forgot_password')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section section-b-space forgot-section">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('images/inner-page/forgot.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>{{ __('menu.welcome_to_weew') }}</h3>
                                <h4>{{ __('logueo.forgot_password') }}</h4>
                            </div>

                            <div class="input-box">

                                <x-guest-layout>
                                    <x-authentication-card>
                                        <x-slot name="logo">
                                            <x-authentication-card-logo />
                                        </x-slot>
                                
                                        <div class="mb-4 text-sm text-gray-600">
                                            {{ __('logueo.forgot_your_password_no_problem') }}
                                        </div>
                                
                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                
                                        <x-validation-errors class="mb-4" />
                                
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                
                                            <div class="block">
                                                <x-label for="email" value="{{ __('Email') }}" />
                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            </div>
                                
                                            <div class="flex items-center justify-end mt-4">
                                                <x-button>
                                                    {{ __('logueo.email_password_reset_link') }}
                                                </x-button>
                                            </div>
                                        </form>
                                    </x-authentication-card>
                                </x-guest-layout>
                                
                                
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

    @include('layouts._partials.footer')