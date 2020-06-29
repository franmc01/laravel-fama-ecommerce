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
                <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
            </div>
        </div>
    </div>
</div>
@endsection
