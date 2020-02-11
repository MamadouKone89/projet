<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/min/dropzone.min.css') }}" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item"  href="{{route('admin.users.index')}}">Liste des utilisateurs</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
     <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/coreui.min.js') }}"></script>
 <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('js/pdfmake.min.js') }}"></script>
 <script src="{{ asset('js/vfs_fonts.js') }}"></script>
 <script src="{{ asset('js/jszip.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.select.min.js') }}"></script>
 <script src="{{ asset('js/ckeditor.js') }}"></script>
 <script src="{{ asset('js/moment.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
 <script src="{{ asset('js/select2.full.min.js') }}"></script>
 <script src="{{ asset('js/min/dropzone.min.js') }}"></script>
</body>
</html>
