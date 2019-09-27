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
                <a href="#" class="display" data-toggle="modal" data-target=".bd-example-modal-lg" ><img class="icon-plus" src="/img/add.png" alt="submit a picture"></a>
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
                                <div class="container-fluid">
                                    @if($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $error }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif

                                    <form id="submitPhoto" action="{{ route('submitPhoto') }}" method="post" enctype=multipart/form-data>
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">{{ __('messages.title') }}</label><label style="color:red;">*</label>
                                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" placeholder="" name="title"
                                            value="{{ old('title') }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="description">{{ __('messages.description') }}</label><label style="color:red;">*</label>
                                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" rows="3" name="description"
                                            >{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">{{ __('messages.category') }}</label><label style="color:red;">*</label>
                                            <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" id="category" name="category">
                                                @isset($categories)
                                                    @foreach ($categories as $cat)
                                                        @php
                                                            if(old('category') != null && old('category') == $cat->id){
                                                                echo "<option value='".$cat->id."' selected >".$cat->name."</option>";
                                                            }else{
                                                                echo "<option value='".$cat->id."' >".$cat->name."</option>";
                                                            }
                                                        @endphp
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tagSearch">{{ __('messages.tag') }}</label>
                                                    <div class="input-group mb-3">
                                                        <input id="tagSearch" list="suggestions" class="form-control"
                                                        placeholder="{{ __('messages.typetag') }}" aria-describedby="enterTag" lang="es" >
                                                        <datalist id="suggestions">
                                                            <option value="Black">
                                                        </datalist>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button" id="enterTag" onclick="addTag();">{{ __('messages.add') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="tags">{{ __('messages.tag') }}</label>
                                                <ul id="tags" style="list-style: none;">
                                                    @if(old('tags') != null)

                                                        @foreach (old('tags') as $tag)
                                                            <li style=" display: inline;" onclick="this.parentNode.removeChild(this);">
                                                                <input name="tags[]" value="{{ $tag }}" type="hidden">{{ $tag }} <img class="dropImage" src="img/x-button.png" alt="">
                                                            </li>
                                                        @endforeach

                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custo$cat->idm-file-input {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="photo">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ __('messages.selectImage') }}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button id="closeFrame" type="button" class="btn btn-secondary" data-dismiss="modal" >{{ __('messages.close') }}</button>
                                <button id="submitPic" type="button" class="btn btn-primary" >{{ __('messages.submitPic') }}</button>
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
