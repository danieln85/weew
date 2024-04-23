@include('layouts._partials.header')
@include('layouts.includes.menu-weew')


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2 class="mb-2">Log In</h2>
                        <nav>
                            <ol class="d-flex mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Log In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('images/inner-page/log-in.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome to Weew</h3>
                            <h4>Log in your Account</h4>
                        </div>

                        <div class="input-box">

                            <x-guest-layout>
                                <x-authentication-card>
                                    <x-slot name="logo">
                                        <x-authentication-card-logo />
                                    </x-slot>
                            
                                    <x-validation-errors class="mb-4" />
                            
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                            
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                            
                                        <div>
                                            <x-label for="email" value="{{ __('Email') }}" />
                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        </div>
                            
                                        <div class="mt-4">
                                            <x-label for="password" value="{{ __('Password') }}" />
                                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                        </div>
                            
                                        <div class="block mt-4">
                                            <label for="remember_me" class="flex items-center">
                                                <x-checkbox id="remember_me" name="remember" />
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                            
                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                            
                                            <x-button class="ms-4">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </x-authentication-card>
                            </x-guest-layout>
                            
                            
                            



                        </div>

                        {{-- <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src="{{ asset('images/inner-page/google.png') }}" class="blur-up lazyload" alt=""> Log In with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="{{ asset('images/inner-page/facebook.png') }}" class="blur-up lazyload" alt=""> Log In with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Don't have an account?</h4>
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

@include('layouts._partials.footer')