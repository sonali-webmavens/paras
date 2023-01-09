<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<<<<<<< Updated upstream
=======
        
>>>>>>> Stashed changes
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<<<<<<< Updated upstream
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
=======
    
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
>>>>>>> Stashed changes
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
<<<<<<< Updated upstream
                <a href="{{ route('EmpResource.index') }}" class="navbar-brand">Employee</a>
                <a href="{{ route('CompanyResource.index') }}" class="navbar-brand">Company</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

=======
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Scripts -->
                  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        @if (Route::has('login'))
                           @endif
                        @else 
                        <a href="{{ route('EmpResource.index' , app() -> getLocale()) }}" class="navbar-brand">{{__('Employee') }}</a>
                
                        <a href="{{ route('CompanyResource.index' , app() -> getLocale()) }}" class="navbar-brand">{{__('Company') }}</a>
                        <a href="{{ route('EmpResource.show' , app() -> getLocale()) }}" class="navbar-brand">{{__('Employee Table') }}</a>
                        <a href="{{ route('CompanyResource.show' , app() -> getLocale()) }}" class="navbar-brand">{{__('Company Table') }}</a>
                        @endguest
>>>>>>> Stashed changes
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
<<<<<<< Updated upstream
=======
                        
                        @foreach (config('app.available_locales') as $locale)    
                        <li class="nav-item">
                            <a class="nav-link" 
                                @if (app()->getLocale() == $locale)
                                style="text-decoration:underline" @endif
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),$locale) }}">
                            {{ strtoupper($locale) }}</a>
                        </li>
                        @endforeach
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
                           

>>>>>>> Stashed changes
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
<<<<<<< Updated upstream
                        @endguest
=======
                        
                        @endguest
                    
                                </div>
                           
                            </div>
                        </li>
>>>>>>> Stashed changes
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
<<<<<<< Updated upstream
        </main>
=======
            
        </main>
        
>>>>>>> Stashed changes
    </div>
</body>
</html>
