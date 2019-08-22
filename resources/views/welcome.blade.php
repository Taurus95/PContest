@extends('templates.appTemplate')

@section('content')
<section class="index">
    <div class="index-title">

        <h1>{{ __('messages.welcome') }} PhotoContest</h1>
        <p>{{ __('messages.welcomeM') }}</p>
        <button class="btn btn-outline-light" type="" name="button">{{ __('messages.enterNow') }}</button>

    </div>
    <img class="index-img" src="/img/front.jpg" alt="louvre">
</section>

<section id="about">
    <div class="about">
        <h1>{{ __('messages.about') }}PhotoContest</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

        <div class="container">
            <div class="row">
                <div class="col-sm" style="padding-top: 30px;">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/woman1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm" style="padding-top: 30px;">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/woman2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm" style="padding-top: 30px;">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/woman3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <button class="btn btn-outline-dark" type="" name="button">{{ __('messages.enterNow') }}</button>
    </div>

</section>

<section id="prices">
    <h1>Prices</h1>
</section>


<section id="entries">
    <h1>Entries</h1>
</section>

@endsection
