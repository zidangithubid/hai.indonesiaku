<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('img/static/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</head>
<body>
    <header class="@yield('header-class')">
        <nav class="navbar navbar-expand-md navbar-light bg-white bg-white shadow-sm px-md-5 pl-5">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/static/favicon.png') }}" width="30px" id="image_nav" class="position-relative" alt="sidescript logo png">
                <p class="m-0 d-inline position-relative" id="title_nav">{{ env('APP_NAME') }}</p>
            </a>
            <div class="btn-group btn-menu-nav position-relative">
                {{-- <button class="border-0 bg-white d-md-none position-relative search-toggle px-2">
                    <i class="fas fa-search"></i>
                </button> --}}
                <button class="bg-white border-0 d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <form method="POST" class="search-nav d-none">
                <div class="input-group positon-relative h-100 w-75">
                    <input type="text" class="form-search-nav border-0 positon-relative h-100 w-50 px-3" placeholder="Cari sesuatu...">
                    <div class="input-group-append">
                        <span class="input-group-text bg-white border-0" id="basic-addon2">
                            <i class="fas fa-search text-gray"></i>
                        </span>
                    </div>
                </div>
            </form>
            <div class="collapse navbar-collapse pr-5 pr-md-0" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto my-0 mt-lg-0 position-relative">
                    <li class="nav-item position-relative menu-item @yield('home')">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item position-relative menu-item @yield('destinations')">
                        <a class="nav-link" href="{{ url('destinations') }}">DESTINATIONS</a>
                    </li>
                    <li class="nav-item position-relative menu-item @yield('festivals')">
                        <a class="nav-link" href="{{ url('festivals') }}">FESTIVAL</a>
                    </li>
                    <li class="nav-item position-relative menu-item @yield('contact')">
                        <a class="nav-link" href="{{ url('contact') }}">CONTACT</a>
                    </li>
                    {{-- <li class="nav-item border-0 pt-2 bg-white position-relative search-toggle search-lg-toggle px-2">
                        <i class="fas fa-search"></i>
                    </li> --}}
                    <li class="nav-item position-relative ml-md-2">
                        <a class="btn btn-danger text-light px-3" href="{{ url('login') }}" role="button" id="btn-login">
                            <i class="fas fa-user"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid bg-danger py-3 search-small-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 position-relative">
                        <form method="POST" class="w-100 position-absolute form-search-small">
                            <div class="input-group rounded-pill shadow overflow-hidden positon-relative h-100 w-100">
                                <input type="text" class="form-search-nav-small border-0 w-100 positon-relative h-100 py-2 rounded px-3" placeholder="Cari sesuatu...">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white position-absolute icon-semu-nav-small border-0" id="basic-addon2">
                                        <i class="fas fa-search text-gray"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="container-fluid bg-dark text-white position-relative">
        <div class="container py-3">
            <div class="row text-center">
                <div class="col-md-6">
                    Developed by Sidescript_dev <img src="{{ asset('img/static/sidescript.png') }}" width="25px" alt="">
                </div>
                <div class="col-md-6 span-email" data-toggle="tooltip" data-placement="top" title="Click to copy">
                    <i class="far fa-envelope"></i> hai.indonesiaku@gmail.com
                </div>
            </div>
        </div>
    </div>
</body>
</html>
