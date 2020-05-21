@extends('AdminLTE.layout')

@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banner <small> - Formulario de ingreso</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Banner</a></li>
                <li class="breadcrumb-item active">Crear</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

@endsection

@section('content')

<div class="row">
    <div class="col-md-7">
        <div class="card card-outline card-gray">
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label> Selecciones las los banners a publicar: </label>
                        <input id="input-id" @error('banner') is-invalid @enderror name="banner[]" type="file" multiple>
                        @error('banner')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Publicar y registrar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-outline card-gray">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Imagenes actuales</label>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    Aun esta en desarollo me llevaron a fumigar
                </div>
            </div>
        </>
    </div>

</div>

@endsection
