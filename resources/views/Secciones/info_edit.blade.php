@extends('AdminLTE\layout')

@section('header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Información de la edicion <small> - Formulario de edición</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('tienda') }}">Inicio</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('info.edit') }}">Actualizar información</a></li>
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

<form action="{{ route('info.update',$edicion[0]->id) }}" method="POST">
    @method('PUT') @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-gray">
                <div class="card-body">
                    <div class="form-group text-center text-uppercase">
                        <label class="text-center">INFORMACIÓN GENERAL</label>
                    </div>
                    <div class="form-group">
                        <label for="">Teléfono del local</label>
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="" value="{{ old('telefono', $edicion[0]->telefono) }}" placeholder="Ingrese el telefono del local">
                        @error('telefono')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Celular para las compras</label>
                        <input type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" id="" value="{{ old('celular', $edicion[0]->celular) }}" placeholder="Ingrese el celular del local">
                        @error('celular')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Correo de contacto</label>
                        <input type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" id="" value="{{ old('correo',$edicion[0]->correo) }}" placeholder="Ingrese el correo de las compras">
                        @error('correo')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Facebook del local</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="" value="{{ old('facebook',$edicion[0]->facebook) }}" placeholder="Ingrese el facebook del local">
                        @error('facebook')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Twitter del local</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="" value="{{ old('twitter',$edicion[0]->twitter) }}" placeholder="Ingrese el twitter del local">
                        @error('twitter')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-outline card-gray">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Instagram del local</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="" value="{{ old('instagram',$edicion[0]->instagram) }}" placeholder="Ingrese el instagram del local">
                        @error('instagram')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Horario de abrir el local : Lunes - Viernes</label>
                        <input type="text" class="form-control @error('horariosemana_abrir') is-invalid @enderror" name="horariosemana_abrir" id="" value="{{ old('horariosemana_abrir',$edicion[0]->horariosemana_abrir) }}" placeholder="Ingrese el horariosemana_abrir del local">
                        @error('horariosemana_abrir')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Horario de cerrar el local : Lunes - Viernes</label>
                        <input type="text" class="form-control @error('horariosemana_cerrar') is-invalid @enderror" name="horariosemana_cerrar" id="" value="{{ old('horariosemana_cerrar',$edicion[0]->horariosemana_cerrar) }}" placeholder="Ingrese el horariosemana_cerrar del local">
                        @error('horariosemana_cerrar')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Horario de abrir el local : Sábados - Domingos</label>
                        <input type="text" class="form-control @error('horariofinsemana_abrir') is-invalid @enderror" name="horariofinsemana_abrir" id="" value="{{ old('horariofinsemana_abrir',$edicion[0]->horariofinsemana_abrir) }}" placeholder="Ingrese el horariofinsemana_abrir del local">
                        @error('horariofinsemana_abrir')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Horario de cerrar el local : Sábados - Domingos</label>
                        <input type="text" class="form-control @error('horariofinsemana_cerrar') is-invalid @enderror" name="horariofinsemana_cerrar" id="" value="{{ old('horariofinsemana_cerrar',$edicion[0]->horariofinsemana_cerrar) }}" placeholder="Ingrese el horariofinsemana_cerrar del local">
                        @error('horariofinsemana_cerrar')
                        <small id="helpId" class="text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Actualizar información</button>
                </div>
            </div>
        </div>
    </div>

</form>


@endsection
