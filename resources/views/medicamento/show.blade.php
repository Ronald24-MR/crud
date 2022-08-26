@extends('layouts.app')

@section('template_title')
    {{ $medicamento->name ?? 'Show Medicamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $medicamento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $medicamento->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $medicamento->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacaducidad:</strong>
                            {{ $medicamento->fechaCaducidad }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $medicamento->disponible }}
                        </div>
                        <div class="form-group">
                            <strong>Laboratorio Id:</strong>
                            {{ $medicamento->laboratorio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sitio Id:</strong>
                            {{ $medicamento->sitio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Presentacion Id:</strong>
                            {{ $medicamento->presentacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
