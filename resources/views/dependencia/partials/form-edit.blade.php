<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>{{__('Name')}}:</strong>
            {!! Form::text('depen_nombre', null, array('placeholder' => __('nombre'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Abreviación:</strong>
            {!! Form::text('depen_abreviacion', null, array('placeholder' => __('Abreviación'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
    <div class="form-group">
            <strong>N° Interno:</strong>
            {!! Form::text('depen_num_interno', null, array('placeholder' => __('Numero Interno'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
    </div>
</div>