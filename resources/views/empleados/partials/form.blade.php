<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Cedula:</strong>
            {!! Form::text('empleado_cedula', null, array('placeholder' => __('Cedula'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('empleado_nombre', null, array('placeholder' => __('Nombre'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Unidad:</strong>
            {!! Form::text('empleado_unidad', null, array('placeholder' => __('Unidad'),'class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-4">
	    <div class="form-group">
            <label>
                Status:
            </label>
            <div class="form-check">
                <input class="form-check-input" name="empleado_status" type="checkbox" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Activo
                </label>
              </div>
        </div>
	</div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
    </div>
</div>