@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>
{{-- BoostrapCard --}}
<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-memory"></i>&nbsp;
            {{ __('Show')}} Mantenimiento de Hardware
        </div>
        <div class="card-body">
          <div class="row">
            	<div class="col">
                    <legend><i class="fas fa-edit"></i> &nbsp;Datos Generales</legend>
                    <div class="form-group">
                		<strong>Fecha:</strong>
                		{{ $hardware->hardware_fecha }}
            		</div>
                    <div class="form-group">
                		<strong>Funcionario:</strong>
                		{{ $hardware->hardware_funcionario}}
            		</div>
                    <div class="form-group">
                		<strong>Cargo:</strong>
                		{{ $hardware->hardware_cargo}}
            		</div>
                    <div class="form-group">
                		<strong>Dependencia:</strong>
                		{{ $hardware->hardware_dependencia}}
            		</div>
                <div class="form-group">
                		<strong>Encargado:</strong>
                		{{ $hardware->hardware_encargado}}
            		</div>
                <div class="form-group">
                		<strong>Cargo del Encargado:</strong>
                		{{ $hardware->hardware_cargoencargado}}
            		</div>
              </div>
              <div class="col">
                <legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
                    <div class="form-group">
                		<strong>Código de Bien:</strong>
                		{{ $hardware->hardware_bienes }}
            		</div>
                    <div class="form-group">
                		<strong>Equipo:</strong>
                		{{ $hardware->hardware_equipo }}
            		</div>
                    <div class="form-group">
                		<strong>Marca:</strong>
                		{{ $hardware->hardware_marca }}
            		</div>
                    <div class="form-group">
                		<strong>Serial:</strong>
                		{{ $hardware->hardware_serial }}
            		</div>
                    <div class="form-group">
                		<strong>Color:</strong>
                		{{ $hardware->hardware_color }}
            		</div>
              </div>
              <div class="col">
              <legend><i class="fas fa-tools"></i> &nbsp;Tipo de Soporte Técnico</legend>
                    <div class="form-group">
                		<strong>Limpieza de Case (Sopladora):</strong>
                		{{ $hardware->hardware_limpiezacase }}
            		</div>
                    <div class="form-group">
                		<strong>Limpieza de Case (Externa):</strong>
                		{{ $hardware->hardware_limpiezacasexterna }}
            		</div>
                    <div class="form-group">
                		<strong>Limpieza del Monitor:</strong>
                		{{ $hardware->hardware_limpiezamonitor }}
            		</div>
                    <div class="form-group">
                		<strong>Limpieza de Teclado:</strong>
                		{{ $hardware->hardware_limpiezateclado }}
            		</div>
                    <div class="form-group">
                		<strong>Limpieza de Mouse:</strong>
                		{{ $hardware->hardware_limpiezamouse }}
            		</div>
              </div>
              <div class="col">
              <legend>&nbsp;</legend>
              <div class="form-group">
                		<strong>Limpieza de Impresora:</strong>
                		{{ $hardware->hardware_limpiezaimpresora }}
            	</div>
                    <div class="form-group">
                		<strong>Limpieza de Procesador:</strong>
                		{{ $hardware->hardware_limpiezaprocesador }}
            	</div>
                    <div class="form-group">
                		<strong>Limpieza de Fuente de Poder:</strong>
                		{{ $hardware->hardware_limpiezafuente }}
              </div>
          </div>
          <div class="col">
              <legend><i class="fas fa-memory"></i> &nbsp;Cambio de Componetes</legend>
              <div class="form-group">
                		<strong>Procesador:</strong>
                		{{ $hardware->hardware_procesador }}
            	</div>
              <div class="form-group">
                		<strong>Tarjeta Madre:</strong>
                		{{ $hardware->hardware_tarjetamadre }}
            	</div>
              <div class="form-group">
                		<strong>Memoria Ram:</strong>
                		{{ $hardware->hardware_memoria }}
            	</div>
              <div class="form-group">
                		<strong>Disco Duro:</strong>
                		{{ $hardware->hardware_hdd }}
            	</div>
          </div>
          <div class="col">
            <legend>&nbsp;</legend>
            <div class="form-group">
                		<strong>Unidad de CD:</strong>
                		{{ $hardware->hardware_cd }}
            	</div>
              <div class="form-group">
                		<strong>Unidad de DVD:</strong>
                		{{ $hardware->hardware_dvd }}
            	</div>
              <div class="form-group">
                		<strong>Fuente de Poder:</strong>
                		{{ $hardware->hardware_fuente_poder }}
            	</div>
              <div class="form-group">
                		<strong>Faja / Cable:</strong>
                		{{ $hardware->hardware_faja_cable }}
            	</div>
              <div class="form-group">
                		<strong>Pila:</strong>
                		{{ $hardware->hardware_pila }}
            	</div>
          </div>
          <div class="row">
            <div class="col">
            <div class="form-group">
                		<strong>Observación:</strong>
                		{{ $hardware->hardware_observacion }}
            	</div>
            </div>
          </div>
        
        </div>
        
    </div>
</div>

@endsection