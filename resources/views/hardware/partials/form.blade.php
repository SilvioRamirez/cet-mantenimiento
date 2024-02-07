<div class="row">
	<legend><i class="fas fa-edit"></i> &nbsp; Datos Generales</legend>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Fecha del Mantenimiento</label>
			<input class="form-control" type="date" name="hardware_fecha">
		</div>
	</div>								
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Funcionario de Soporte Técnico</label>
			<input class="form-control" type="text" name="hardware_funcionario">
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group label-floating">
			<label class="control-label">Cargo</label>
			<input class="form-control" type="text" name="hardware_cargo">
		</div>
	</div>
</div>
<br>
<div class="row">
	<legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Código del Bien</label>
			<input class="form-control" type="text" name="hardware_bienes">
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Dependencia</label>
			<input class="form-control" type="text" name="hardware_dependencia">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Encargado</label>
			<input class="form-control" type="text" name="hardware_encargado">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Cargo del Encargado</label>
			<input class="form-control" type="text" name="hardware_cargoencargado">
		</div>
	</div>						
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Equipo</label>
			<input class="form-control" type="text" name="hardware_equipo">
		</div>
	</div>								
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Marca</label>
			<input class="form-control" type="text" name="hardware_marca">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Serial</label>
			<input class="form-control" type="text" name="hardware_serial">
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group label-floating">
			<label class="control-label">Color</label>
			<input class="form-control" type="text" name="hardware_color">
		</div>
	</div>
</div>	
<br>
<div class="row">
	<legend><i class="fas fa-tools"></i> &nbsp;Tipo de Soporte Técnico</legend>
	<div class="col-12 col-md-4">
		<div class="form-group">
      <label for="hardware_limpiezacase">Limpieza de Case (Sopladora)</label>                
      	<select id="hardware_limpiezacase" name="hardware_limpiezacase" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    </div>
		<div class="form-group">
      <label for="hardware_limpiezacasexterna">Limpieza de Case (Externa)</label>                
      	<select id="hardware_limpiezacasexterna" name="hardware_limpiezacasexterna" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    </div>
		<div class="form-group">
      <label for="hardware_limpiezamonitor">Limpieza del Monitor</label>                
      	<select id="hardware_limpiezamonitor" name="hardware_limpiezamonitor" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    </div>
		<div class="form-group">
      <label for="hardware_limpiezateclado">Limpieza de Teclado</label>                
      	<select id="hardware_limpiezateclado" name="hardware_limpiezateclado" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    </div>
		
	</div>
	<div class="col-12 col-md-4">
		<div class="form-group">
      	<label for="hardware_limpiezamouse">Limpieza de Mouse</label>                
      	<select id="hardware_limpiezamouse" name="hardware_limpiezamouse" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
			<div class="form-group">
      	<label for="hardware_limpiezaimpresora">Limpieza de Impresora</label>                
      	<select id="hardware_limpiezaimpresora" name="hardware_limpiezaimpresora" class="form-select">
        	<option  disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
			<div class="form-group">
      	<label for="hardware_limpiezaprocesador">Limpieza de Procesador</label>                
      	<select id="hardware_limpiezaprocesador" name="hardware_limpiezaprocesador" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
			<div class="form-group">
      	<label for="hardware_limpiezafuente">Limpieza de Fuente de Poder</label>                
      	<select id="hardware_limpiezafuente" name="hardware_limpiezafuente" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
	</div>
	<div class="col-12 col-md-4">
			<div class="form-group">
      	<label for="hardware_limpiezaelectronico">Limpieza de Piezas Electrónica</label>                
      	<select id="hardware_limpiezaelectronico" name="hardware_limpiezaelectronico" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
			<div class="form-group">
      	<label for="hardware_limpiezaram">Limpieza de Memoria Ram</label>                
      	<select id="hardware_limpiezaram" name="hardware_limpiezaram" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
			<div class="form-group">
      	<label for="hardware_limpiezacd">Limpieza de Unidad CD/DVD</label>                
      	<select id="hardware_limpiezacd" name="hardware_limpiezacd" class="form-select">
        	<option disabled selected="">Seleccione</option>
					<option value="si">Sí</option>
					<option value="no">No</option>
      	</select>
    	</div>
	</div>
	<br>
	<div class="row">
		<legend><i class="fas fa-memory"></i> &nbsp;Cambio de Componetes</legend>
			<div class="col-12 col-md-4">
				<div class="form-group">
      		<label for="hardware_procesador">Procesador</label>                
      			<select id="hardware_procesador" name="hardware_procesador" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_tarjetamadre">Tarjeta Madre</label>                
      			<select id="hardware_tarjetamadre" name="hardware_tarjetamadre" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_memoria">Memoria Ram</label>                
      			<select id="hardware_memoria" name="hardware_memoria" class="form-select">
        		<option  disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="form-group">
      		<label for="hardware_hdd">Disco Duro</label>                
      			<select id="hardware_hdd" name="hardware_hdd" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_cd">Unidad de CD</label>                
      			<select id="hardware_cd" name="hardware_cd" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_dvd">Unidad de DVD</label>                
      			<select id="hardware_dvd" name="hardware_dvd" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="form-group">
      		<label for="hardware_fuente_poder">Fuente de Poder</label>                
      			<select id="hardware_fuente_poder" name="hardware_fuente_poder" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_faja_cable">Faja / Cable</label>                
      			<select id="hardware_faja_cable" name="hardware_faja_cable" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
				<div class="form-group">
      		<label for="hardware_pila">Pila</label>                
      			<select id="hardware_pila" name="hardware_pila" class="form-select">
        		<option disabled selected="">Seleccione</option>
						<option value="si">Sí</option>
						<option value="no">No</option>
      		</select>
    		</div>
			</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="form-group label-floating">
				<label class="control-label">Observación</label>
				<textarea class="form-control" name="hardware_observacion"placeholder="Deja una observación aquí"></textarea>
			</div>
		</div>
	</div>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
	</div>