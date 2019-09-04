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
        <form class="" action="#" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">{{ __('messages.name') }}</label>
                <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                 id="name" placeholder="{{ __('messages.name') }}" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">{{ __('messages.mail') }}</label>
                <input name="mail" type="email" class="form-control {{ $errors->has('mail') ? 'is-invalid' : '' }}"
                 id="mail" placeholder="{{ __('messages.mail') }}" value="{{ old('mail') }}">
            </div>
        </form>
    </div>
</body>

</html>
