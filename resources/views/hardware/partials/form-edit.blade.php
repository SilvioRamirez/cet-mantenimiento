<div class="row">
	<legend><i class="fas fa-edit"></i> &nbsp; Datos Generales</legend>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Fecha del Mantenimiento</label>
			{!! Form::date('hardware_fecha', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Funcionario de Soporte Técnico</label>
			{!! Form::text('hardware_funcionario', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Cargo</label>
			{!! Form::text('hardware_cargo', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>
<br>
<div class="row">
	<legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Código del Bien</label>
			{!! Form::text('hardware_bienes', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Dependencia</label>
			{!! Form::text('hardware_dependencia', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Encargado</label>
			{!! Form::text('hardware_encargado', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Cargo del Encargado</label>
			{!! Form::text('hardware_cargoencargado', null, array('class' => 'form-control')) !!}
		</div>
	</div>						
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Equipo</label>
			{!! Form::text('hardware_equipo', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Marca</label>
			{!! Form::text('hardware_marca', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Serial</label>
			{!! Form::text('hardware_serial', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Color</label>
			{!! Form::text('hardware_color', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>	
<br>
<div class="row">
	<legend><i class="fas fa-tools"></i> &nbsp;Tipo de Soporte Técnico</legend>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezacase', '<strong>'."Limpieza de Case (Sopladora)".':</strong>')) !!}
		{!! Form::select('hardware_limpiezacase', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezacase' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezacasexterna', '<strong>'."Limpieza de Case (Externa)".':</strong>')) !!}
		{!! Form::select('hardware_limpiezacasexterna', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezacasexterna' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezamonitor', '<strong>'."Limpieza del Monitor".':</strong>')) !!}
		{!! Form::select('hardware_limpiezamonitor', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezamonitor' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezateclado', '<strong>'."Limpieza de Teclado".':</strong>')) !!}
		{!! Form::select('hardware_limpiezateclado', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezateclado' ]) !!}
    </div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezamouse', '<strong>'."Limpieza de Mouse".':</strong>')) !!}
		{!! Form::select('hardware_limpiezamouse', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezamouse' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezaimpresora', '<strong>'."Limpieza de Impresora".':</strong>')) !!}
		{!! Form::select('hardware_limpiezaimpresora', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezaimpresora' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezaprocesador', '<strong>'."Limpieza de Procesador".':</strong>')) !!}
		{!! Form::select('hardware_limpiezaprocesador', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezaprocesador' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezafuente', '<strong>'."Limpieza de Fuente de Poder".':</strong>')) !!}
		{!! Form::select('hardware_limpiezafuente', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezafuente' ]) !!}
    </div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezaelectronico', '<strong>'."Limpieza de Piezas Electrónica".':</strong>')) !!}
		{!! Form::select('hardware_limpiezaelectronico', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezaelectronico' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezaram', '<strong>'."Limpieza de Memoria Ram".':</strong>')) !!}
		{!! Form::select('hardware_limpiezaram', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezaram' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_limpiezacd', '<strong>'."Limpieza de Unidad CD/DVD".':</strong>')) !!}
		{!! Form::select('hardware_limpiezacd', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_limpiezacd' ]) !!}
    </div>
	</div>
	<br>
<div class="row">
	<legend><i class="fas fa-memory"></i> &nbsp;Cambio de Componetes</legend>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_procesador', '<strong>'."Procesador".':</strong>')) !!}
		{!! Form::select('hardware_procesador', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_procesador' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_tarjetamadre', '<strong>'."Tarjeta Madre".':</strong>')) !!}
		{!! Form::select('hardware_tarjetamadre', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_tarjetamadre' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_memoria', '<strong>'."Memoria Ram".':</strong>')) !!}
		{!! Form::select('hardware_memoria', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_memoria' ]) !!}
    </div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_hdd', '<strong>'."Disco Duro".':</strong>')) !!}
		{!! Form::select('hardware_hdd', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_hdd' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_cd', '<strong>'."Unidad de CD".':</strong>')) !!}
		{!! Form::select('hardware_cd', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_cd' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_dvd', '<strong>'."Unidad de DVD".':</strong>')) !!}
		{!! Form::select('hardware_dvd', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_dvd' ]) !!}
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_fuente_poder', '<strong>'."Fuente de Poder".':</strong>')) !!}
		{!! Form::select('hardware_fuente_poder', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_fuente_poder' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_faja_cable', '<strong>'."Faja / Cable".':</strong>')) !!}
		{!! Form::select('hardware_faja_cable', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_faja_cable' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('hardware_pila', '<strong>'."Pila".':</strong>')) !!}
		{!! Form::select('hardware_pila', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'hardware_pila' ]) !!}
    </div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="form-group label-floating">
		{!! Form::textarea('hardware_observacion', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
    {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
</div>