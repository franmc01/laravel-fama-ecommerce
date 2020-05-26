@extends('AdminLTE.layout')
@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Productos <small> - Listado de productos</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active"><a href="#">Productos</a></li>
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
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center">
                <a name="" id="" class="btn btn-primary" href="{{ route('productos.create') }}" role="button">Crear nuevo producto</a>
            </div>
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
                                <th>Fecha de publicación</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
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
                                <td>{{ $item->nombre_marca }}</td>
                                <td>{{ $item->nombre_submarca }}</td>
                                <td>{{ $item->precio }}</td>
                                <td>{{ $item->publicado }}</td>
                                <td>
                                    <a name="" id="" class="btn btn-warning" href="{{ route('productos.edit', $item ) }}" role="button">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('productos.destroy', $item ) }}" method="POST">
                                        @method('DELETE') @csrf
                                        <button name="" id="" class="btn btn-danger">Eliminar</button>
                                    </form>
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
