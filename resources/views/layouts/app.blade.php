<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- BootStrap CSS link --}}
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">

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
                aria-expanded="false">
                <x-forkawesome-user style="width: 20px" />
            </button>
            <ul class="dropdown-menu">
                {{-- Login & Register --}}
                <li class="nav-item dropdown-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif @if (Route::has('register'))
                <li class="nav-item dropdown-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                            class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
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
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <span></span>
                    <a class="navbar-brand" href="{{ route('products.index') }}">
                        <h4>
                            <b>Sigma<sup>2</sup>
                            </b>
                        </h4>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto"></ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">CATEGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SPECIAL OFFER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SELLER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BUILD YOUR OWN BUNDLE</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        {{--  Footer --}}
        <footer
            class="footer"
            style="padding:30px 50px 30px 0px;background-color: black; color:white;">
            <div class="container">
                <div class="row">
                    {{-- Main Footer --}}
                    <div class="footer-parts">
                        <a href="{{ route('products.index') }}"><img style="margin-left:30px" src="https://www.sigma-computer.com/image/catalog/logo-footer.png"  alt="image"></a><br><br>
                        <ul>
                            <li class="list-group-item">
                                <x-entypo-location style="width: 24px"/>&nbsp;      
                                25 Esraa Elmoalmeen Elmohandseen
                            </li><br>
                            <li class="list-group-item">
                                <x-tabler-headset style="width: 24px" />&nbsp;
                                0233033099
                            </li><br>
                            <li class="list-group-item">
                                <x-majestic-mail-open-line style="width:24px" />&nbsp;
                                Sigmapc@gmail.Com
                            </li><br>
                            <li class="list-group-item">
                                <x-zondicon-timer style="width: 24px" />&nbsp;
                                Open Time: 11:00AM - 07:00PM
                            </li><br>
                        </ul>
                    </div>
                    {{-- Information --}}
                    <div class="footer-parts">
                        <h3>INFORMATION</h3>
                        <p style="width:95px; height:2px; border-top:2px solid #58a3da">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our branches</a>
                            </li>
                        </ul>
                    </div>
                    {{-- BRANDS --}}
                    <div class="footer-parts">
                        <h3>BRANDS</h3>
                        <p style="width:95px; height:2px; border-top:2px solid #58a3da">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Western Digital</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Western Digital</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lenovo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Canon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BENQ</a>
                            </li>
                        </ul>
                    </div>

                    {{-- CATEGORIES --}}
                    <div class="footer-parts">
                        <h3>BRANDS</h3>
                        <p style="width:95px; height:2px; border-top:2px solid #58a3da">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Desktop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Storage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Network</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Network</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BENQ</a>
                            </li>
                        </ul>
                    </div>
                    {{-- SELLER --}}
                    <div class="footer-parts">
                        <h3>SELLER</h3>
                        <p style="width:95px; height:2px; border-top:2px solid #58a3da">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">sigma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">aula</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ingco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">msi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">c-m</a>
                            </li>
                        </ul>
                    </div>
                    {{-- SIGNUP FOR NEWSLETTER --}}
                    <div class="footer-parts">
                        <h3>SIGNUP FOR NEWSLETTER</h3>
                        <p style="width:95px; height:2px; border-top:2px solid #58a3da">
                            <p>We'll never share your email address with a third-party.</p>                            
                    </div>
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