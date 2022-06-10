@extends('layout/plantilla')

@section('tituloPagina', "Crear un Nuevo Registro")
@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Actualizar una Usuario</h5>
                <p class="card-text">
                    <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <input type="text" name="paterno" id="paterno" value="{{ $personas->paterno }}" class="form-control form-control-lg mb-3" placeholder="Paterno" required>
                        <input type="text" name="materno" id="materno" value="{{ $personas->materno }}" class="form-control form-control-lg mb-3" placeholder="Materno" required>
                        <input type="text" name="nombre" id="nombre" value="{{ $personas->nombre }}" class="form-control form-control-lg mb-3" placeholder="Nombre" required>
                        <input type="date" name="fecha_nacimiento" value="{{ $personas->fecha_nacimiento }}" id="fecha_nacimiento" class="form-control form-control-lg mb-3" required>
                        <div class="row justify-content-between">
                            <div class="col-md-4 text-center"><button class="btn btn-lg btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Actualizar</button></div>
                            <div class="col-md-4 text-center"><a class="btn btn-lg btn-outline-danger" href="{{ route("personas.index") }}"><i class="fa-solid fa-person-walking-arrow-loop-left"></i> Regresar</a></div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection