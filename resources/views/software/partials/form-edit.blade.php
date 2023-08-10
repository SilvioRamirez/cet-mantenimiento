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
								</div><br>
								<div class="row">
									<legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
									<div class="col-xs-6 col-md-4">
										<div class="form-group label-floating">
											  <label class="control-label">Código del Bien</label>
												{!! Form::text('software_bienes', null, array('class' => 'form-control')) !!}
										</div>
									</div>								
									<div class="col-xs-6 col-md-4">
										<div class="form-group label-floating">
											 	<label class="control-label">Dependencia</label>
											 	{!! Form::text('software_dependencia', null, array('class' => 'form-control')) !!}
										</div>
									</div>
									<div class="col-xs-6 col-md-4">
										<div class="form-group label-floating">
											 	<label class="control-label">Encargado</label>
											 	{!! Form::text('software_encargado', null, array('class' => 'form-control')) !!}
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
									<div class="col-12 col-md-6">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="si" name="software_antivirus" id="antivirus" />
  									<label class="form-check-label" for="antivirus">&nbsp; Actualización del Antivirus</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_respaldo" id="respaldodatos" />
  									<label class="form-check-label" for="respaldodatos">&nbsp; Respaldo de Datos</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_recuperacion" id="recuperacion" />
  									<label class="form-check-label" for="recuperacion">&nbsp; Recuperación de Información</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_programas" id="programas" />
  									<label class="form-check-label" for="programas">&nbsp; Instalación de Programas y Paquetes</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_discoduro" id="discoduro" />
  									<label class="form-check-label" for="discoduro">&nbsp; Liberación de Espacio en el Disco Duro</label>
									</div>

								</div>
								<div class="col-12 col-md-6">
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_analisisvirus" id="analisisvirus" />
  									<label class="form-check-label" for="analisisvirus">&nbsp; Análisis del Disco con el Antivirus</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_formateo" id="formateo" />
  									<label class="form-check-label" for="formateo">&nbsp; Formateo del Equipo</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_red" id="red" />
  									<label class="form-check-label" for="red">&nbsp; Revisión de la Configuración de la Red</label>
									</div>
									<br>
									<div class="form-check">
  									<input class="form-check-input" type="checkbox" value="si" name="software_desfragmentacion" id="desfragmentacion" />
  									<label class="form-check-label" for="desfragmentacion">&nbsp; Desfragmentación del Disco Duro</label>
									</div>
									<br>
								</div>
							</div>
								<br>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Observación</label>
											 	<textarea class="form-control" name="software_observacion" placeholder="Deja una observación aquí"></textarea>

										</div>
									</div>
								</div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        {!! Form::button('<i class="fa fa-save"></i> '.__('Save'), ['type' => 'submit', 'class' => 'btn btn-outline-success'] )  !!}
    </div>