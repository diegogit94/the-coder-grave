<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Coder Grave') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        {{-- tailwind --}}
        <div>
            <nav class="flex items-center justify-between flex-wrap bg-lime-500 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <a class="font-semibold text-xl tracking-tight" href="{{ route('product.index') }}">
                        {{ config('app.name', 'The Coder Grave') }}
                    </a>
                    </div>
                    <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-black border-lime-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                    </div>
                    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                        @if (Auth::user())
                            <a href="{{ route('history.user') }}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4">
                                Transacciones
                            </a>
                        @endif

                        @if (Auth::user() && Auth::user()['is_admin'])
                            <a href="{{ route('history.admin') }}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4">
                                Admin
                            </a>
                        @endif
                    </div>
                    <div>
                        <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto right-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-lime-500 hover:bg-white mt-4 lg:mt-0">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-lime-500 hover:bg-white mt-4 lg:mt-0">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-lime-500 hover:bg-white mt-4 lg:mt-0">
                            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-lime-500 hover:bg-white mt-4 lg:mt-0">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                        </li>

                        {{-- end tailwind --}}

                            <form  id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
