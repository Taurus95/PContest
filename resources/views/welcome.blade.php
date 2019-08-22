@extends('templates.appTemplate')

@section('content')
<section class="index">
    <div class="index-title">

        <h1>{{ __('messages.welcome') }}</h1>
        <p>{{ __('messages.welcomeM') }}</p>
        <button class="btn btn-outline-light" type="" name="button">{{ __('messages.enterNow') }}</button>

    </div>
    <img class="index-img" src="/storage/front.jpg" alt="louvre">
</section>

<section id="about">
<h1>About</h1>
</section>

<section id="prices">
<h1>Prices</h1>
</section>


<section id="entries">
<h1>Entries</h1>
</section>

@endsection
