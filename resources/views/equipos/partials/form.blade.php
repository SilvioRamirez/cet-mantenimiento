<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Componente:</strong>
            {!! Form::text('equipo_componente', null, array('placeholder' => __('Componente'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Descripción:</strong>
            {!! Form::text('equipo_descripcion', null, array('placeholder' => __('Descripción del Equipo'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Encargado:</strong>
            {!! Form::text('depen_empleado', null, array('placeholder' => __('Encargado'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
    <div class="form-group">
            <strong>Marca:</strong>
            {!! Form::text('equipo_marca', null, array('placeholder' => __('Marca'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="form-group">
            <strong>Color:</strong>
            {!! Form::text('equipo_color', null, array('placeholder' => __('Color'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="form-group">
            <strong>Serial:</strong>
            {!! Form::text('equipo_serial', null, array('placeholder' => __('serial'),'class' => 'form-control')) !!}
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="form-group">
            <strong>Código de Bien:</strong>
            {!! Form::text('equipo_cod_bien', null, array('placeholder' => __('Código del Bien'),'class' => 'form-control')) !!}
          </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-3">
        {{-- Example with placeholder (for Select) --}}
        <strong>Status:</strong>
        <x-adminlte-select name="equipo_status">
            <x-adminlte-options :options="['Activo', 'Inactivo', 'Desincorporado']" placeholder="Seleccione una Opción..."/>
        </x-adminlte-select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
    </div>
</div>