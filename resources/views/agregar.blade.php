@extends('layout/plantilla')

@section('tituloPagina', "Crear un Nuevo Registro")
@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registrar Nuevo Usuario</h5>
                <p class="card-text">
                    <form action="{{ route('personas.store') }}" method="POST">
                        @csrf
                        <input type="text" name="paterno" id="paterno" class="form-control form-control-lg mb-3" placeholder="Paterno" required>
                        <input type="text" name="materno" id="materno" class="form-control form-control-lg mb-3" placeholder="Materno" required>
                        <input type="text" name="nombre" id="nombre" class="form-control form-control-lg mb-3" placeholder="Nombre" required>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control form-control-lg mb-3" placeholder="Paterno" required>
                        <div class="row justify-content-between">
                            <div class="col-md-4 text-center"><button class="btn btn-lg btn-outline-success"><i class="fa-solid fa-user-plus"></i> Agregar</button></div>
                            <div class="col-md-4 text-center">
                                <a class="btn btn-lg btn-outline-danger" href="{{ route("personas.index") }}">
                                    <i class="fa-solid fa-person-walking-arrow-loop-left"></i> Regresar
                                </a>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection