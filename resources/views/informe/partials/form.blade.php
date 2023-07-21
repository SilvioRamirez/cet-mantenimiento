<div class="row">
	<legend><i class="fas fa-edit fa-fw"></i>&nbsp; Datos Generales</legend>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Código del Informe</label>
			<input class="form-control" type="text" name="informe_codigo">
		</div>
	</div>
  <div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Fecha de Elaboración</label>
			<input class="form-control" type="date" name="informe_fecha">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Funcionario de Soporte</label>
			<input class="form-control" type="text" name="informe_funcionario">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Cargo del Funcionario</label>
			<input class="form-control" type="text" name="informe_cargofuncionario">
		</div>
	</div>									
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Dependencia Solicitante</label>
			<input class="form-control" type="text" name="informe_dependencia">
		</div>
	</div>
  <div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Responsable</label>
			<input class="form-control" type="text" name="informe_responsable">
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Cargo</label>
			<input class="form-control" type="text" name="informe_cargo">
		</div>
	</div>
</div>
<br>
<div class="row">
	<legend><i class="fas fa-laptop fa-fw"></i>&nbsp; Descripción del Equipo</legend>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Código del Bien</label>
			<input class="form-control" type="text" name="informe_bienes">
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Equipo</label>
			<input class="form-control" type="text" name="informe_equipo">
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Marca</label>
			<input class="form-control" type="text" name="informe_marca">
		</div>
	</div>
  <div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Color</label>
			<input class="form-control" type="text" name="informe_color">
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Serial</label>
			<input class="form-control" type="text" name="informe_serial">
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Caracteristicas</label>
			<input class="form-control" type="text" name="informe_caracteristicas">
		</div>
	</div>
</div>	
<br>
<div class="row">
	<legend><i class="fas fa-tools fa-fw"></i>&nbsp; Tipo de Soporte Técnico</legend>
	<div class="col-xs-6 col-md-4">
    <x-adminlte-textarea name="informe_falla" label="Falla" rows=5  igroup-size="sm" placeholder="Falla Reportada...">
      <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-success"></i>
        </div>
      </x-slot>
    </x-adminlte-textarea>
	</div>
  <div class="col-xs-6 col-md-4">
    <x-adminlte-textarea name="informe_diagnostico" label="Diagnóstico" rows=5  igroup-size="sm" placeholder="Diagnóstico Técnico...">
      <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-success"></i>
        </div>
      </x-slot>
    </x-adminlte-textarea>
	</div>
  <div class="col-xs-6 col-md-4">
    <x-adminlte-textarea name="informe_trabajo_realizado" label="Trabajo" rows=5  igroup-size="sm" placeholder="Trabajo Realizado...">
      <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-success"></i>
        </div>
      </x-slot>
    </x-adminlte-textarea>
	</div>
  <div class="col-xs-6 col-md-6">
    <x-adminlte-textarea name="informe_observaciones" label="Observaciones" rows=5  igroup-size="sm" placeholder="Observación...">
      <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-success"></i>
        </div>
      </x-slot>
    </x-adminlte-textarea>
	</div>
  <div class="col-xs-6 col-md-6">
    <x-adminlte-textarea name="informe_recomendaciones" label="Recomendaciones" rows=5  igroup-size="sm" placeholder="Recomendación...">
      <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-success"></i>
        </div>
      </x-slot>
    </x-adminlte-textarea>
	</div>
  
  <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
  </div>
</div>


