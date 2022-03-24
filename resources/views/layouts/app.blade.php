<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/fontawesome.js') }}" defer></script>
    <script src="{{ asset('js/links.js') }}" defer></script>
    
    <script src="{{ asset('js/livewire-timer.js') }}"></script>
    <script src="{{ asset('js/crud-table.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    @livewireStyles
</head>

<body>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="{{ url('/') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-solid fa-house w-100 fa-xl"></i>
                                </div>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('laravel') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-brands fa-laravel w-100 fa-xl"></i>
                                </div>
                                Laravel
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('livewire') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-brands fa-php w-100 fa-xl"></i>
                                </div>
                                Livewire
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('javascript') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-brands fa-js w-100 fa-xl"></i>
                                </div>
                                Javascript
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('alpinejs') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-solid fa-mountain w-100 fa-xl"></i>
                                </div>
                                AlpineJS
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cssheets') }}" class="nav-link text-white">
                                <div class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <i class="fa-brands fa-css3 w-100 fa-xl"></i>
                                </div>
                                css
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-light text-dark me-2" data-bs-toggle="modal"
                        data-bs-target="#login">Login</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#register">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#"><i class="fa-solid fa-arrow-up fa-3x fa-fw"></i></a>
            </p>
            <p class="mb-1">
                <i class="fa-solid fa-envelope fa-3x fa-fw"></i>
                <i class="fa-brands fa-facebook fa-3x fa-fw"></i>
                <i class="fa-brands fa-twitter fa-3x fa-fw"></i>
                <i class="fa-brands fa-instagram fa-3x fa-fw"></i>
                <i class="fa-brands fa-tiktok fa-3x fa-fw"></i>
            </p>
        </div>
    </footer>

    {{-- Login Modals --}}
    @include('modals/login/login-modal')
    @include('modals/login/register-modal')

    {{-- JS Modals --}}
    @include('modals/js/js-timer-modal')
    
    {{-- Livewire Modals --}}
    @include('modals/livewire/livewire-alpinejs-timer-modal')
    @include('modals/livewire/livewire-crud-table-modal')

    @livewireScripts

</body>

</html>
