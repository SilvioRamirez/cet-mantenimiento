<div class="row">
	<legend><i class="fas fa-edit fa-fw"></i>&nbsp; Datos Generales</legend>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Código del Informe</label>
			{!! Form::text('informe_codigo', null, array('class' => 'form-control')) !!}
		</div>
	</div>
  <div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Fecha de Elaboración</label>
			{!! Form::date('informe_fecha', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Funcionario de Soporte</label>
			{!! Form::text('informe_funcionario', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Cargo del Funcionario</label>
			{!! Form::text('informe_cargofuncionario', null, array('class' => 'form-control')) !!}
		</div>
	</div>									
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Dependencia Solicitante</label>
			{!! Form::text('informe_dependencia', null, array('class' => 'form-control')) !!}
		</div>
	</div>
  <div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Responsable</label>
			{!! Form::text('informe_responsable', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Cargo</label>
			{!! Form::text('informe_cargo', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>
<br>
<div class="row">
	<legend><i class="fas fa-laptop fa-fw"></i>&nbsp; Descripción del Equipo</legend>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Código del Bien</label>
			{!! Form::text('informe_bienes', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Equipo</label>
			{!! Form::text('informe_equipo', null, array('class' => 'form-control')) !!}
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Marca</label>
			{!! Form::text('informe_marca', null, array('class' => 'form-control')) !!}
		</div>
	</div>
  <div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Color</label>
			{!! Form::text('informe_color', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Serial</label>
			{!! Form::text('informe_serial', null, array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Caracteristicas</label>
			{!! Form::text('informe_caracteristicas', null, array('class' => 'form-control')) !!}
		</div>
	</div>
</div>	
<br>
<div class="row">
	<legend><i class="fas fa-tools fa-fw"></i>&nbsp; Tipo de Soporte Técnico</legend>
	<div class="col-xs-6 col-md-4">
	<label class="control-label">Falla</label>
	{!! Form::textarea('informe_falla', null, array('class' => 'form-control')) !!}
	</div>
  <div class="col-xs-6 col-md-4">
	<label class="control-label">Diagnóstico</label>
	{!! Form::textarea('informe_diagnostico', null, array('class' => 'form-control')) !!}
	</div>
  <div class="col-xs-6 col-md-4">
	<label class="control-label">Trabajo Realizado</label>
	{!! Form::textarea('informe_trabajo_realizado', null, array('class' => 'form-control')) !!}
	</div>
  <div class="col-xs-6 col-md-6">
	<label class="control-label">Observaciones</label>
	{!! Form::textarea('informe_observaciones', null, array('class' => 'form-control')) !!}
	</div>
  <div class="col-xs-6 col-md-6">
	<label class="control-label">Recomendaciones</label>
	{!! Form::textarea('informe_recomendaciones', null, array('class' => 'form-control')) !!}
	</div>
  
  <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-fw fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
  </div>
</div>

