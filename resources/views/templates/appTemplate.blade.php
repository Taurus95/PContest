<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Photo Contest</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/mycss.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Istok+Web&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="MainNav" class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="/#">Photo Contest</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">{{ __('messages.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#prizes">{{ __('messages.prizes') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#terms">{{ __('messages.terms&conditions') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#entries">{{ __('messages.gallery') }}</a>
                    </li>

                </ul>
                <ul class="navbar-nav mr-auto">
                    @guest
                    <li class="nav-item">
                        <a data-fancybox data-type="iframe" class="nav-link" href="javascript:;"
                        data-src="{{ route('login') }}"  >
                            {{ __('messages.login') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{  route('dashboard') }}">{{ __('messages.home') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">{{ __('messages.updateProfile') }}</a>

                            <div class="dropdown-divider"></div>

                                <form action="{{ route('logOut') }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="dropdown-item" type="submit" name="" value="{{ __('messages.logOut') }}">
                                </form>

                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

    </header>

    @yield('content')

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/app.js" charset="utf-8"></script>
    <script src="/js/jquery.fancybox.min.js" charset="utf-8"></script>
    <script src="/js/myjs.js" charset="utf-8"></script>
    <script src="/js/slick.min.js" charset="utf-8"></script>
</body>

</html>
