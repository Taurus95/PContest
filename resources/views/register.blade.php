@extends('templates.appTemplate')

@section('content')
<section class="index">
    <div class="card text-center border-light transparent">
        <div class="card-header">
            <h3>{{ __('messages.registerform') }}</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Correo</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Contraseña</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Repeat Contraseña</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <button type="submit" class="btn btn-lg btn-success col-12">Sign in</button>
            </form>
        </div>
        <div class="card-footer">
            Photo Contest
        </div>
    </div>
    <img class="index-img" src="/img/view.jpg" alt="forest">
</section>
@endsection
