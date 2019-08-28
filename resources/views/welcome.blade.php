@extends('templates.appTemplate')

@section('content')
<section class="index">
    <div class="index-title">

        <h1>{{ __('messages.welcome') }} PhotoContest</h1>
        <p>{{ __('messages.welcomeM') }}</p>
        <button class="btn btn-outline-light grow" type="" name="button">{{ __('messages.enterNow') }}</button>

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
                <div class="col-sm grow">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/woman1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm grow">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/woman2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm grow">
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

<section id="prizes">
    <div class="prizes">
        <h1>{{ __('messages.prizes') }} </h1>

        <ul class="list-group list-group-flush">
            <li class="list-group-item margen">
                <h3>Wow Photo of The Year 2019</h3>
                <ul>
                    <li>
                        Viaje Internacional Sorpresa
                    </li>
                    <li>
                        US $ 2000 Grand
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                </ul>
            </li>
            <li class="list-group-item margen">
                <h3>Premio Ojo Creativo WOW 2019</h3>
                <ul>
                    <li>
                        Viaje Internacional Sorpresa
                    </li>
                    <li>
                        US $ 2000 Grand
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                </ul>
            </li>
            <li class="list-group-item margen">
                <h3>6 Premios Explorer</h3>
                <ul>
                    <li>
                        Viaje Internacional Sorpresa
                    </li>
                    <li>
                        US $ 2000 Grand
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                    <li>
                        Trofeo de premios de fotos WOW
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<section id="terms">
    <div class="terms">
        <h1>{{ __('messages.terms&conditions') }} </h1>
        <p>a participación en este concurso
            implica la aceptación de esta
            s bases.
            Fundación Málaga se reserva el der
            echo de descartar y excluir d
            el Concurso a
            los participantes:
            
            Cuando se inscriban con datos falsos o haya indicios que razona
            blemente
            pudieran llevar a pensar que los datos son falsos.
            
            Cuando se considere que las fot
            ografías contienen elementos que
            de
            cualquier forma puedan considerar
            se contrarios a los derechos
            fundamentales y las libertades
            públicas, induzcan, inciten o pr
            omuevan
            actuaciones delictivas, denigrat
            orias, violentas o, en general,
            contrarias a
            la ley, a la moral y buenas cos
            tumbres generalmente aceptadas o
            al orden
            público; se encuentren protegidas
            por cualesquiera derechos de
            propiedad
            intelectual o industrial pertenec
            ientes a terceros, sin que el
            participante
            haya obtenido previamente de sus
            titulares la autorización nece
            saria para
            llevar a cabo el uso que efectúa
            o pretende efectuar; sea contr
            ario al
            derecho al honor, a la intimidad
            personal y familiar o a la pro
            pia imagen de
            las personas; pueda constituir publicidad o que incorpore virus
            u otros
            elementos que puedan dañar el norma
            l funcionamiento de la red,
            del
            sistema o de equipos informáticos.
            
            Cuando aparezcan
            menores de edad.
            
            Cuando se incumplan las present
            es bases en cualquier forma. </p>
    <button class="btn btn-success btn-lg grow" type="" name="button">Leer bases completas</button>
    </div>
</section>

<section id="entries">
    <h1>{{ __('messages.gallery') }}</h1>
    <br>
    <div class="container">
        <div class="home-carrousel">
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman2.jpg" class="carrousel-img grow" alt="...">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="home-carrousel">
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="home-carrousel">
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
            </div>
            <div>
                <img src="/img/woman3.jpg" class="carrousel-img grow" alt="...">
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
                    <lf="#">Last time</a></li>
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
