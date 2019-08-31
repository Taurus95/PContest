@extends('templates.appTemplate')

@section('content')
<section class="index">
    <div class="card text-center border-light transparent">
        <div class="card-header">
            <h3>{{ __('messages.registerform') }}</h3>
            <!-- ejemplo para desplegar errores -->
            @if ($errors->any())
              <div class="container">

              @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error!</strong> {{ $error }}
                </div>
              @endforeach

              </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('registerNew') }}" method="POST" >
                @csrf
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
                <div class="form-group">
                    <label for="formGroupExampleInput2">{{ __('messages.password') }}</label>
                    <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                     id="password" placeholder="{{ __('messages.password') }}" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">{{ __('messages.confirmPass') }}</label>
                    <input name="confirmPassword" type="password" class="form-control {{ $errors->has('confirmPassword') ? 'is-invalid' : '' }}"
                     id="confirmPassword" placeholder="{{ __('messages.confirmPass') }}" >
                </div>
                <button type="submit" class="btn btn-lg btn-success col-12">{{ __('messages.singIn') }}</button>
            </form>
        </div>
        <div class="card-footer">
            Photo Contest
        </div>
    </div>
    <img class="index-img" src="/img/view.jpg" alt="forest">
</section>
@endsection
