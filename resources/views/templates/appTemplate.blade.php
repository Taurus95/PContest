<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Photo Contest</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Istok+Web&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="MainNav" class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="#">Photo Contest</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{ __('messages.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prices">{{ __('messages.prices') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#entries">{{ __('messages.gallery') }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('messages.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('messages.register') }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{  ('home') }}">
                            My home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

    </header>

    @yield('content')

    <script src="/js/app.js" charset="utf-8"></script>
    <script src="/js/myjs.js" charset="utf-8"></script>
</body>

</html>
