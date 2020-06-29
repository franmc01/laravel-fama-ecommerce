@extends('AdminLTE.layout')

@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banner principal<small> - Formulario de ingreso</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Banner</a></li>
                <li class="breadcrumb-item active">Crear - Banner Principal</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

@endsection


@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-gray">
            <div class="card-body">
                <form method="POST" action="{{ route('crear.pbanner') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input id="input-b1" name="inputb1" type="file" class="file" data-browse-on-zone-click="true">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Publicar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-gray">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Banner principal actual</label>
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
            </div>
        </div>

    </div>
</div>
    @endsection
