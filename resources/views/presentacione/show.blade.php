@extends('layouts.app')

@section('template_title')
    {{ $presentacione->name ?? 'Show Presentacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Presentacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('presentaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $presentacione->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
