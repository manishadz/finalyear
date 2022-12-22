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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .fa-bell {
            margin: 10px;
            cursor: pointer;

        }

        .num {
            color: red;

        }

        .notification-dropdown {
            position: absolute;
            left: -341px !important;
            width: 500px !important;

        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Products
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">
                                    {{ __('Car') }}
                                </a>
                                <a class="dropdown-item" href="">
                                    {{ __('Coin') }}
                                </a>
                            </div>
                        </li>
                        <!-- search -->

                    </ul>

                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item justify-content-md-center">
                            <form class="form-inline my-2 my-lg-0 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="search"
                                    aria-label="Search" style="width: 600px;">

                                {{-- <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button> --}}
                            </form>
                        </li>
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
                            <li class="nav-item">
                                <a href="{{ route('products.index') }}" class="nav-link">MY Product</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('biddings.index') }}" class="nav-link">MY Bid</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    {{-- for password change --}}
                                    <a class="dropdown-item" href="{{ route('updateform') }}">
                                        change password
                                    </a>
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
                            {{-- notification --}}
                            @php
                                $totalNotification = auth()
                                    ->user()
                                    ->unreadNotifications->count();
                            @endphp
                            <div class="dropdown">
                                <span id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-bell"> <span class="num">{{ $totalNotification }}</span></i>

                                </span>


                                <ul class="dropdown-menu notification-dropdown" aria-labelledby="dropdownMenuButton1">
                                    @if ($totalNotification > 0)
                                        @foreach ( auth()
                                        ->user()
                                        ->unreadNotifications as $key => $notification)
                                            <li>
                                                {{ @$notification->data['order_id'] }}
                                            </li>
                                        @endforeach
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>

                                </ul>
                            </div>

                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!----alert message on edit add and delete the product--->
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (session('success'))
        <script>
            toastr.success(" {{ session('success') }}")
        </script>
    @endif


</body>

</html>
