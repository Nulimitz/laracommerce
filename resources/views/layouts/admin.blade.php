<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div id="app">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <a data-bs-target="#sidebar" data-bs-toggle="collapse" class="fs-3 text-decoration-none text-dark"><i
                        class="bi bi-three-dots-vertical py-2 p-1"></i></a>

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-auto p-0">
                    <div id="sidebar" class="collapse collapse-horizontal show min-vh-100 shadow-sm">
                        <ul class="nav flex-column justify-content-center align-items-center">
                            <li class="nav-item">
                                <a href="/" class="nav-link link-secondary py-3 px-3 active">
                                    <i class="bi-house fs-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-secondary py-3 px-3">
                                    <i class="bi-gear fs-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-secondary py-3 px-3">
                                    <i class="bi-speedometer2 fs-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-secondary py-3 px-3">
                                    <i class="bi-table  fs-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-secondary py-3 px-3">
                                    <i class="bi-heart  fs-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-secondary py-3 px-3">
                                    <i class="bi-people fs-2"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- main -->
                <main class="col py-4">

                    <!-- content -->
                    @yield('content')
                </main>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    @livewireScripts
    @yield('script')
</body>

</html>
