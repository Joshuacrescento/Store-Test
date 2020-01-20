@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/prod" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Subir producto</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Titulo</label>

                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="path" class="col-md-4 col-form-label">Imagen</label>

                    <input type="file" class="form-control-file" id="path" name="path">

                    @if ($errors->has('path'))
                        <strong>{{ $errors->first('path') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Agregar</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
