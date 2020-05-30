@extends('AdminLTE.layout')
@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Papelera <small> - Productos eliminados</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Papelera</a></li>
                <li class="breadcrumb-item active"><a href="#">Productos eliminados</a></li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Código del producto</th>
                                <th>Nombre del producto</th>
                                <th>Detalle del producto</th>
                                <th>Marca del producto</th>
                                <th>Categoría del producto</th>
                                <th>Subcategoria general del producto</th>
                                <th>Subcategoria específica del producto</th>
                                <th>Precio del producto</th>
                                <th>Cantidad de fotos actuales</th>
                                <th>Fecha de publicación</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->codigo_unico }}</td>
                                <td>{{ $item->nombre_producto }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->subcategoria->nombre_sub }}</td>
                                <td>{{ $item->categoria->nombre_categoria }}</td>
                                <td>{{ $item->marca->nombre_marca }}</td>
                                <td>{{ $item->submarca->nombre_submarca }}</td>
                                <td>{{ $item->precio }}</td>
                                <td>{{ $item->fotos->count() }}</td>
                                <td>{{ $item->publicado }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('restaurar',$item->id) }}">Restaurar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
