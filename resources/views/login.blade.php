<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
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
    </div>
</body>

</html>
