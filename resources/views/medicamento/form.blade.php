<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $medicamento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $medicamento->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $medicamento->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaCaducidad') }}
            {{ Form::date('fechaCaducidad', $medicamento->fechaCaducidad, ['class' => 'form-control' . ($errors->has('fechaCaducidad') ? ' is-invalid' : ''), 'placeholder' => 'Fechacaducidad']) }}
            {!! $errors->first('fechaCaducidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            {{ Form::text('disponible', $medicamento->disponible, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('laboratorio_id') }}
            {{ Form::select('laboratorio_id', $laboratorios , $medicamento->laboratorio_id, ['class' => 'form-control' . ($errors->has('laboratorio_id') ? ' is-invalid' : ''), 'placeholder' => 'Laboratorio Id']) }}
            {!! $errors->first('laboratorio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('sitio_id') }}
            {{ Form::select('sitio_id', $sitios , $medicamento->sitio_id, ['class' => 'form-control' . ($errors->has('sitio_id') ? ' is-invalid' : ''), 'placeholder' => 'Sitio Id']) }}
            {!! $errors->first('sitio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presentacion_id') }}
            {{ Form::select('presentacion_id', $presentaciones ,$medicamento->presentacion_id, ['class' => 'form-control' . ($errors->has('presentacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Presentacion Id']) }}
            {!! $errors->first('presentacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>