<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- BootStrap CSS link --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

        {{-- Our CSS style --}}
        <link rel="stylesheet" href="/css/app.css">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- titlle --}}
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body id="page-top">
        <!-- Authentication Links -->
        <div style="margin:20px 0px 0px 20px">
            @guest @if (Route::has('login'))
            <button
                class="btn btn-outline-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="border: 0px">
                <x-forkawesome-user style="width: 15px"/> My Account 
            </button>
            <ul class="dropdown-menu">
                {{-- Login & Register --}}
                <li class="nav-item dropdown-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <x-forkawesome-user style="width: 13px"/>
                        {{ __('Login') }}</a>
                </li>
                @endif @if (Route::has('register'))
                <li class="nav-item dropdown-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <x-fas-edit style="width: 13px" />
                        {{ __('Register') }}</a>
                </li>
                @endif @else
            </ul>
            <ul>
                <li class="nav-item dropdown-item dropdown">
                    <a
                        id="navbarDropdown"
                        class="btn btn-outline-secondary dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre="v-pre">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a 
                        class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <x-fas-edit style="width: 13px"/>
                        {{ __('Logout') }}
                        </a>
                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none ">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        {{-- Navbar --}}        
        <div class="navbar" style="padding: 0px 30px 0px 30px">            
            <div class="navbar-nav me-auto"  >
                <a class="navbar-brand" href="{{ route('products.index') }}">
                    <img src="https://www.sigma-computer.com/image/catalog/logo2.png">
                </a>
            </div>           
            <div class="navbar-nav ms-auto" style="display: flex; flex-direction:row;">
                <div class="for-flex-"><x-heroicon-o-shopping-bag style="width: 40px;"/></div>
                <div class="for-flex-">
                   <span><b>My cart</b></span><br>
                    <span style="color: blue">2595 LE</span>
                </div>
                 
            </div>
        </div>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark shadow-sm" 
            style="background-color:black; --bs-navbar-color: white;">                
                <div class="container">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                        style="border: 0px; color:white">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li>
                                <a class="nav-link" href="#">CATEGORIES</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('products.index') }}">HOME</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('about_us') }}">ABOUT US</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">CONTACT US</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">BLOG</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">SPECIAL OFFER</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">SELLER</a>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">                            
                            <li>
                                <a class="nav-link" href="#">BUILD YOUR OWN BUNDLE</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                <div style="padding: 20px 70px 20px 70px">
                    <a href="{{ route('products.index') }}" style="text-decoration: none;">
                        <x-fas-home style="width: 15px; color: gray;" />
                    </a>
                    <x-ri-arrow-right-s-line style="width: 20px; color: gray;" />
                    @yield('page_name')
                    <br><br>                
                    @yield('content')
                </div>
            </main>
        </div>

        {{--  Footer --}}
        <footer >
            <div class="Footer-Body">                
                {{-- Main Info --}}
                <div class="footer-parts">
                    <p>
                    <a href="{{ route('products.index') }}">
                        <img src="https://www.sigma-computer.com/image/catalog/logo-footer.png" style="margin:10px 0px 10px 30px" alt="image">
                    </a>
                    </p>
                    
                    <ul>
                        <li class="footer-main-info">
                            <x-entypo-location style="width: 24px"/>&nbsp;      
                            25 Esraa Elmoalmeen Elmohandseen
                        </li>
                        <li class="footer-main-info">
                            <x-tabler-headset style="width: 24px" />&nbsp;
                            0233033099
                        </li>
                        <li class="footer-main-info">
                            <x-majestic-mail-open-line style="width:24px" />&nbsp;
                            Sigmapc@gmail.Com
                        </li>
                        <li class="footer-main-info">
                            <x-zondicon-timer style="width: 24px" />&nbsp;
                            Open Time: 11:00AM - 07:00PM
                        </li>
                    </ul>
                </div>

                {{-- Information --}}
                <div class="footer-parts"> 
                    <ul>
                        <h3>INFORMATION</h3>
                        <p class="blue_Line"></p>
                        <li>                            
                            <a href="{{ route('about_us') }}"><x-css-edit-black-point class="dotPoint"/>About Us</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Login</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Register</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy_policy') }}"><x-css-edit-black-point class="dotPoint"/>Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ route('branches') }}"><x-css-edit-black-point class="dotPoint"/>Our branches</a>
                        </li>
                    </ul>
                </div>

                {{-- BRANDS --}}
                <div class="footer-parts">                        
                    <ul>
                        <h3>BRANDS</h3>
                        <p class="blue_Line"></p>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Western Digital</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Western Digital</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Lenovo</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Dell</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Canon</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>BENQ</a>
                        </li>
                    </ul>
                </div>

                {{-- CATEGORIES --}}
                <div class="footer-parts">                        
                    <ul>
                        <h3>BRANDS</h3>
                        <p class="blue_Line"></p>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Desktop</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Notebook</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Storage</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Network</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>Network</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>BENQ</a>
                        </li>
                    </ul>
                </div>

                {{-- SELLER --}}
                <div class="footer-parts">                        
                    <ul>
                        <h3>SELLER</h3>
                        <p class="blue_Line"></p>
                        <li>                                
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>sigma</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>aula</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>ingco</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>msi</a>
                        </li>
                        <li>
                            <a href="#"><x-css-edit-black-point class="dotPoint"/>c-m</a>
                        </li>
                    </ul>
                </div>

                {{-- SIGNUP FOR NEWSLETTER --}}
                <div class="footer-parts">
                    <h3>SIGNUP FOR NEWSLETTER</h3>
                    <p class="blue_Line"></p>
                    <p> We'll never share your email address with a third-party.</p>                            
                </div>
                
            </div>
        </footer>
        {{-- END of Footer --}}

        {{-- Copyrights --}}
        {{-- <div style="background-color: #222222; color:white; text-align:center;">
            Sigma Computer © 2019 All Rights Reserved. Designed by Sigma Computer
             Footer Social Icons
             <button type="button" class="btn btn-outline-secondary">
                <x-ri-facebook-fill style="width: 24px" />
            </button>
             <button type="button" class="btn btn-outline-secondary">
                twitter <x-bi-twitter style="width: 24px" />
            </button>
             <button type="button" class="btn btn-outline-secondary">
                YouTube <x-bi-youtube style="width: 24px" /> 
            </button>
             <button type="button" class="btn btn-outline-secondary">
                linkedin <x-ri-linkedin-fill style="width: 24px" />
            </button>
        </div> --}}
        
        {{-- BootStrap Js Link--}}
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"></script>

    </body>
</html>