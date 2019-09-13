@extends('templates.appTemplate')

@section('content')

<section class="dash">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                {{ __('messages.home') }}
            </div>
            <div class="card-body">
                @isset($submissions)
                @if (count($submissions) > 0)
                {{-- las listo --}}
                @else
                <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img class="icon-plus" src="/img/add.png" alt="submit a picture"></a>
                <p>{{ __('messages.submitYourPicture') }}</p>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('messages.submitYourPicture') }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><label style="color:red;">*</label> Necesaries</p>
                                <div class="container-fluid">
                                    <form>
                                        <div class="form-group">
                                            <label for="titulo">{{ __('messages.title') }}</label><label style="color:red;">*</label>
                                            <input type="text" class="form-control" id="titulo" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion">{{ __('messages.description') }}</label><label style="color:red;">*</label>
                                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">{{ __('messages.category') }}</label><label style="color:red;">*</label>
                                            <select class="form-control" id="category" name="category">
                                                @isset($categories)
                                                @foreach ($categories as $cat)
                                                @php
                                                echo "<option value='".$cat->id."'>".$cat->name."</option>";
                                                @endphp
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">{{ __('messages.tag') }}</label>
                                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ __('messages.selectImage') }}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.close') }}</button>
                                <button type="button" class="btn btn-primary">{{ __('messages.submitPic') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endisset
            </div>
            <div class="card-footer text-muted">
                {{ Auth::user()->name }}
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $("#MainNav").removeClass('bg-transparent');
        $("#MainNav").addClass('bg-dark');
    });
</script>
@endsection
