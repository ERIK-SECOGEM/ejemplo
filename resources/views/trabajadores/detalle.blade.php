@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Detalles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <dl class='dl-horizontal'><dt> Nombre: </dt><dd>{{$trabajador->nombre}}</dd></dl>
                            <dl class='dl-horizontal'><dt> Puesto: </dt><dd>{{$trabajador->puesto}}</dd></dl>
                            <dl class='dl-horizontal'><dt> Teléfono: </dt><dd>{{$trabajador->telefono}}</dd></dl>
                            <dl class='dl-horizontal'><dt> Municipio: </dt><dd>{{$trabajador->municipios->nombre}}</dd></dl>
                            <dl class='dl-horizontal'><dt> Genero: </dt><dd>{{$trabajador->genero}}</dd></dl>
                            <a class="btn btn-primary" href="{{ route('trabajadores.index') }}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection