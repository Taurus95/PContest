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
                <ul class="navbar-nav ">
                    @guest
                    <li class="nav-item">
                        <p class="mb-0">
                            <a data-fancybox data-animation-duration="700" data-src="#animatedModal" href="javascript:;" class="nav-link" id="loginDisplay">{{ __('messages.login') }}</a>
                        </p>
                        <div style="display: none;" id="animatedModal" class="animated-modal">
                            <div class="container">
                                <form class="" action="{{ route('login') }}" method="post" style="padding-top:10px;">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"><h3>{{ __('messages.mail') }}</h3>
                                            @php
                                                if ($errors->has('noValid')) {
                                                    echo "<span class='text-danger'>". __("messages.errorLogin") ."</span>";
                                                }
                                            @endphp
                                        </label>
                                        <input name="email" type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                         id="email" placeholder="{{ __('messages.mail') }}" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><h3>{{ __('messages.password') }}</h3></label>
                                        <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                         id="password" placeholder="{{ __('messages.password') }}" value="{{ old('password') }}">
                                    </div>
                                    <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="login" value="{{ __('messages.login') }}">
                                </form>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h5>¿No estas registrado?</h5>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('register') }}" target="_top" class="btn btn-outline-success btn-sm">{{ __('messages.register') }}</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h5>¿Olvidaste tu contraseña?</h5>
                                    </div>
                                    <div class="col">
                                        <a href="#" target="_top" class="btn btn-outline-success btn-sm">{{ __('messages.register') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    @yield('content')

    <script src="/js/app.js" charset="utf-8"></script>
    <script src="/js/jquery.fancybox.min.js" charset="utf-8"></script>
    <script src="/js/myjs.js" charset="utf-8"></script>
    <script src="/js/slick.min.js" charset="utf-8"></script>

    <script type="text/javascript">
    @php
    if ($errors->has('noValid')) {
        echo '$(document).ready(function(){
            $("#loginDisplay").click();
        });';
    }
    @endphp
    </script>
</body>

</html>
