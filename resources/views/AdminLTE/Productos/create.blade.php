@extends('AdminLTE.layout')
@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Productos <small> - Formulario de ingreso</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                <li class="breadcrumb-item active">Crear</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

@endsection

@section('content')
@if (Session::has('success'))
<script>
    Swal.fire( 'Genial!!' , 'Producto registrado correctamente' , 'success' );
</script>
@endif


<form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-gray">
                <div class="card-header text-center">
                    <p style="text-transform: uppercase; font-weight:bold; font-size:16px">Información general del producto</p>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="">Código del producto</label>
                        <input type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" id="" value="{{ old('codigo') }}" placeholder="Ingrese el código del producto">
                        @error('codigo')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Nombre del producto</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="" value="{{ old('nombre') }}" placeholder="Ingrese el nombre del producto">
                        @error('nombre')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="">Descripción del Producto</label>
                        <textarea type="text" rows="4" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="" placeholder="Ingrese la descripción">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label> Selecciones las imagenes del producto </label>
                        <input id="input-id" @error('imagenes') is-invalid @enderror name="imagenes[]" type="file" multiple>
                        @error('imagenes')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-outline card-gray">
                <div class="card-header text-center">
                    <p style="text-transform: uppercase; font-weight:bold; font-size:16px">Información específica del producto</p>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Marca del producto</label>
                        <select name="marca" class="form-control marca @error('marca') is-invalid @enderror" style="width: 100%;">
                            <option value="">Seleccione la marca</option>
                            @foreach ($marcas as $item)
                            <option value="{{ $item->id }}" {{ old('marca') == $item->id ? 'selected' : ''}}>{{ $item->nombre_sub }}</option>
                            @endforeach
                        </select>
                        @error('marca')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Categoria del producto</label>
                        <select name="categoria" class="form-control categoria @error('categoria') is-invalid @enderror" style="width: 100%;">
                            <option value="">Seleccione una opción</option>
                            @foreach ($categorias as $item)
                            <option value="{{ $item->id }}" {{ old('categoria') == $item->id ? 'selected' : ''}}>{{ $item->nombre_categoria }}</option>
                            @endforeach
                        </select>
                        @error('categoria')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Subcategoria general del producto</label>
                        <select name="subcategoria" class="form-control subcategoria @error('subcategoria') is-invalid @enderror" style="width: 100%;">
                            <option value="">Seleccione una opción</option>
                            @foreach ($subcat as $item)
                            <option value="{{ $item->id }}" {{ old('subcategoria') == $item->id ? 'selected' : ''}}>{{ $item->nombre_marca }}</option>
                            @endforeach
                        </select>
                        @error('subcategoria')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Subcategoria especifica del producto</label>
                        <select name="subcategoria1" class="form-control subcategoria1 @error('subcategoria1') is-invalid @enderror" style="width: 100%;">
                            <option value="">Seleccione una opción</option>
                            @foreach ($subcat1 as $item)
                            <option value="{{ $item->id }}" {{ old('subcategoria1') == $item->id ? 'selected' : ''}}>{{ $item->nombre_submarca }}</option>
                            @endforeach
                        </select>
                        @error('subcategoria1')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>

                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Fecha de publicación en la tienda:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror datetimepicker-input" data-target="#reservationdate" value="{{ old('fecha') }}" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('fecha')
                            <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <!-- /.form group -->
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="">Precio del producto</label>
                        <input type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" id="" value="{{ old('precio') }}" placeholder="Ingrese el precio del producto">
                        @error('precio')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-block mb-3 mt-2">Registrar producto</button>

                </div>
            </div>

        </div>
    </div>
</form>

@endsection
