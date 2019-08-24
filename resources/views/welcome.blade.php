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
        <h1>{{ __('messages.about') }} PhotoContest</h1>
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
    <h1>{{ __('messages.prices') }} </h1>
</section>


<section id="entries">
    <h1>{{ __('messages.gallery') }}</h1>
    <br>
    <div class="container" >
        <div class="home-carrousel">
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img" alt="...">
            </div>
        </div>
    </div>
    <br>
    <div class="container" >
        <div class="home-carrousel">
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
        </div>
    </div>
    <br>
    <div class="container" >
        <div class="home-carrousel">
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img" alt="...">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
             veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
               velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa
               ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
    </div>

</section>
    <div class="container">
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <small>PhotoContest</small>
            <small class="d-block mb-3 text-muted">&copy; 2019</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

@endsection
