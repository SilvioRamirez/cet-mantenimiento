<div class="row">
	<legend><i class="fas fa-edit"></i> &nbsp;Datos Generales</legend>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Fecha del Mantenimiento</label>
			{!! Form::date('software_fecha', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Funcionario de Soporte Técnico</label>
			{!! Form::text('software_funcionario', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Cargo</label>
			{!! Form::text('software_cargo', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>
<br>
<div class="row">
	<legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Código del Bien</label>
			{!! Form::text('software_bienes', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Dependencia</label>
				{!! Form::text('software_dependencia', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Encargado</label>
				{!! Form::text('software_encargado', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Cargo del Encargado</label>
				{!! Form::text('software_cargoencargado', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Equipo</label>
				{!! Form::text('software_equipo', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Marca</label>
				{!! Form::text('software_marca', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Serial</label>
				{!! Form::text('software_serial', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
				<label class="control-label">Color</label>
				{!! Form::text('software_color', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>	
<br>
<div class="row">
	<legend><i class="fas fa-tools"></i> &nbsp;Tipo de Soporte Técnico</legend>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('software_antivirus', '<strong>'."Instalación del Antivirus".':</strong>')) !!}
		{!! Form::select('software_antivirus', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_antivirus' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_analisisvirus', '<strong>'."Analisis del Antivirus".':</strong>')) !!}
		{!! Form::select('software_analisisvirus', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_analisisvirus' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_red', '<strong>'."Revisión de la Configuración de la Red".':</strong>')) !!}
		{!! Form::select('software_red', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_red' ]) !!}
    </div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('software_respaldo', '<strong>'."Respaldo de Datos".':</strong>')) !!}
		{!! Form::select('software_respaldo', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_respaldo' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_recuperacion', '<strong>'."Recuperación de Información".':</strong>')) !!}
		{!! Form::select('software_recuperacion', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_recuperacion' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_programas', '<strong>'."Instalacion de Programas y Paquetes".':</strong>')) !!}
		{!! Form::select('software_programas', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_programas' ]) !!}
    </div>
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
		{!! Html::decode(Form::label('software_formateo', '<strong>'."Formateo de Equipo".':</strong>')) !!}
		{!! Form::select('software_formateo', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_formateo' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_desfragmentacion', '<strong>'."Desfragmentación de Disco".':</strong>')) !!}
		{!! Form::select('software_desfragmentacion', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_desfragmentacion' ]) !!}
    </div>
		<div class="form-group">
		{!! Html::decode(Form::label('software_discoduro', '<strong>'."Liberación de Espacio en el Disco".':</strong>')) !!}
		{!! Form::select('software_discoduro', ['si'=>'si','no'=>'no'], null, ['class' => 'form-control', 'id' =>'software_discoduro' ]) !!}
    </div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="form-group label-floating">
		<label class="control-label">Observación:</label>
		{!! Form::textarea('software_observacion', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<br>
     {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
  </div>