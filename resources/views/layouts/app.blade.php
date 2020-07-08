<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
    html, body {
            background-color: gainsboro;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    }
   table {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 1px solid #baca;
    border-collapse: collapse;
    width: 800px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
table th {
    text-align: left;
    width: 300px;
    border: 1px solid #baca;
    padding: 10px;
    background-color: #f19780;
    color: #110f0f;
}
table td {
    border: 1px solid #baca;
    padding:10px;
    background-color: #f0eeee;
    .cen{
        text-align: center;
    }
    #tbh {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 20px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #btn {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 14px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #tbh:hover,#btn:hover {
        background-color: pink;
    }
    #app{
        border-radius: 50px;
    }

    }




    </style>
</head>
<body>
    <div id="header">
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a id="app" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else



                            <li>
                                 <a class="nav-link" href="{{ url('/artist') }}">Artis</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/album') }}">Album</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/track') }}">Track</a>
                            </li>

                           
                            <ul class="nav navbar-nav navbar-right">
                             <li class="nav-item active ">
                                <a class="nav-link disable" href="#" role="button" aria-disabled="true">Hi
                                    {{ Auth::user()->name }} ! <span class="caret"></span>
                                </a>
                            </li>
                                
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
