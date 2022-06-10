@extends('layout/plantilla')
@section('tituloPagina', 'Crud con Laravel 8')
@section('contenido')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                  CRUD con Laravel 8 y MySQL
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        @if ($mensaje = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $mensaje }}
                            </div>
                        @endif
                    </div>
                  <p class="text-center">
                      <a href="{{ route("personas.create") }}" class="btn btn-lg btn-outline-primary"><i class="fa-solid fa-user-plus"></i> Agregar nueva persona</a>
                  </p>
                  <hr>
                  <p class="card-text">
                      <div class="table table-responsive">
                          <table class="table">
                              <thead class="text-center">
                                  
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                              </thead>
                              <tbody class="text-center">
                                @foreach ($datos as $item)
                                    <tr>
                                        <td>{{ $item->paterno }}</td>
                                        <td>{{ $item->materno }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->fecha_nacimiento }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                                <button class="btn btn-sm btn-outline-info"><i class="fa-solid fa-user-pen"></i></button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('personas.show', $item->id) }}" method="GET">
                                                <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-user-minus"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>
                          <hr>
                          <div class="row">
                            <div class="col-md-12">
                                {{ $datos->links() }}
                            </div>
                        </div>
                      </div>
                  </p>
                </div>
              </div>
        </div>
    </div>

@endsection