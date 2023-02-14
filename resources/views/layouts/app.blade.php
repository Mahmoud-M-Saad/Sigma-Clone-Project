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
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-user"
                    width="24"
                    height="24"
                    viewbox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                </svg>
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
            style="padding:30px 50px 50px 5px;background-color: black; color:white;">
            <div class="container">
                <div class="row">
                    {{-- Main Footer --}}
                    <div class="footer-parts">
                        <a href="{{ route('products.index') }}"><img src="https://www.sigma-computer.com/image/catalog/logo-footer.png"  alt="image"></a><br><br>
                        <ul>
                            <li class="list-group-item">
                                <svg
                                 xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 11m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                 </svg>
                                 25 Esraa Elmoalmeen Elmohandseen</li><br>
                            <li class="list-group-item">
                                <svg
                                 xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 14v-3a8 8 0 1 1 16 0v3"></path>
                                    <path d="M18 19c0 1.657 -2.686 3 -6 3"></path>
                                    <path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"></path>
                                    <path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z"></path>
                                 </svg>
                                0233033099</li><br>
                            <li class="list-group-item">
                                <svg
                                 xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6"></path>
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"></path>
                                    <path d="M3 19l6 -6"></path>
                                    <path d="M15 13l6 6"></path>
                                 </svg>
                                Sigmapc@gmail.Com</li><br>
                            <li class="list-group-item">
                                <svg
                                 xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 12l-2 3"></path>
                                    <path d="M12 7v5"></path>
                                 </svg>
                                Open Time: 11:00AM - 07:00PM</li><br>
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
                <svg
                 xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
            </button>
             <button type="button" class="btn btn-outline-secondary">
                Secondary
            </button>
             <button type="button" class="btn btn-outline-secondary">
                Secondary
            </button>
             <button type="button" class="btn btn-outline-secondary">
                Secondary
            </button>
        </div> --}}
        
        {{-- BootStrap Js Link--}}
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"></script>

    </body>
</html>