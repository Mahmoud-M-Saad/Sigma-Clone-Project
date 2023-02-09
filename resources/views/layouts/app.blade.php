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
                    <
                        id="navbarDropdown"
                        class="btn btn-outline-secondary dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre="v-pre">
                        {{ Auth::user()->name }}
                    </>
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
            class="footer text-center"
            style="padding:50px 20px 10px 5px;background-color: black; color:white;">
            <div class="container">
                <div class="row">
                    {{--  Footer Location --}}
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            25 Esraa Elmoalmeen Elmohandseen
                            <br>
                            0233033099
                            <br>
                            Open Time: 11:00AM - 07:00PM
                        </p>
                    </div>
                    {{--  Footer Social Icons --}}
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!">
                            <i class="fab fa-fw fa-facebook-f">CATEGORIES</i>
                        </a><br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!">
                            <i class="fab fa-fw fa-twitter"></i>INFORMATION</a><br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!">
                            <i class="fab fa-fw fa-linkedin-in">SELLER</i>
                        </a><br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!">
                            <i class="fab fa-fw fa-dribbble">BRANDS</i>
                        </a><br><br>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!">
                            <i class="fab fa-fw fa-dribbble">SIGNUP FOR NEWSLETTER</i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END of Footer --}}

        {{-- BootStrap Js Link--}}
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"></script>

    </body>
</html>