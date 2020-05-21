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
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Notificación!</h5>
    {{ Session::get('success') }}
</div>
@endif


<div class="row">
    <div class="col-md-7">
        <div class="card card-outline card-gray">
            <div class="card-body">
                <form method="POST" action="{{ route('crear.banner') }}" enctype="multipart/form-data">
                    @csrf
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
                    @foreach ($b as $foto)
                    <form action="{{ route('eliminar.banner', $foto) }}" method="post">
                        @method('DELETE') @csrf
                        <div class="col-md-5 mb-2">
                            <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-ban"></i></button>
                            <img class="img-responsive" width="100%" src="/storage/{{ $foto->banner }}" alt="">
                        </div>
                    </form>
                    @endforeach
                </div>
                <h2>Me falta validar y vincular a la tienda</h2>
            </div>
        </div>

    </div>

    @endsection
