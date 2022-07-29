@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Trabajadores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-trabajador')
                            <a class="btn btn-warning" href="{{ route('trabajadores.create') }}">Nuevo</a>
                        @endcan
                        <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Nombre</th>
                                    <th style="color: #fff;">Puesto</th>
                                    <th style="color: #fff;">Teléfono</th>
                                    <th style="color: #fff;">Municipio</th>
                                    <th style="color: #fff;">Genero</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($trabajadores as $trabajador)
                                        <tr>
                                            <td style="display: none;">{{$trabajador->id}}</td>
                                            <td>{{$trabajador->nombre}}</td>
                                            <td>{{$trabajador->puesto}}</td>
                                            <td>{{$trabajador->telefono}}</td>
                                            <td>{{$trabajador->municipios->nombre}}</td>
                                            <td>{{$trabajador->genero}}</td>
                                            <td>
                                                @can('editar-trabajador')
                                                    <a class="btn btn-primary" href="{{ route('trabajadores.edit', $trabajador->id) }}">Editar</a>
                                                @endcan

                                                @can('ver-trabajador')
                                                    <a class="btn btn-warning" href="{{ route('trabajadores.show', $trabajador->id) }}">Detalle</a>
                                                @endcan

                                                @can('borrar-trabajador')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['trabajadores.destroy', $trabajador->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $trabajadores->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
