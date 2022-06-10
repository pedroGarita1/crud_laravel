@extends('layout/plantilla')
@section('tituloPagina', 'Eliminar registro')
@section('contenido')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                  Eliminar una persona
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                       Estas seguro de eliminar este registro??
                       <hr>
                       <table class="table table-bordered border-danger">
                            <thead>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $personas->paterno }}</td>
                                    <td>{{ $personas->materno }}</td>
                                    <td>{{ $personas->nombre }}</td>
                                    <td>{{ $personas->fecha_nacimiento }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="row justify-content-between">
                                <div class="col-md-4 text-center"><button class="btn btn-lg btn-outline-danger"><i class="fa-solid fa-user-minus"></i> Eliminar</button></div>
                                <div class="col-md-4 text-center">
                                    <a href="{{ route('personas.index') }}" class="btn btn-lg btn-outline-primary">
                                        <i class="fa-solid fa-person-walking-arrow-loop-left"></i> Regresar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                  </p>
                </div>
              </div>
        </div>
    </div>

@endsection