@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>
{{-- BoostrapCard --}}
<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-microchip"></i>&nbsp;
            {{ __('Show')}} Mantenimiento de Software
        </div>
        <div class="card-body">
          <div class="row">
            	<div class="col">
                    <legend><i class="fas fa-edit"></i> &nbsp;Datos Generales</legend>
                    <div class="form-group">
                		<strong>Fecha:</strong>
                		{{ $softwares->software_fecha }}
            		</div>
                    <div class="form-group">
                		<strong>Funcionario:</strong>
                		{{ $softwares->software_funcionario}}
            		</div>
                    <div class="form-group">
                		<strong>Cargo:</strong>
                		{{ $softwares->software_cargo}}
            		</div>
                    <div class="form-group">
                		<strong>Dependencia:</strong>
                		{{ $softwares->software_dependencia}}
            		</div>
                    <div class="form-group">
                		<strong>Encargado:</strong>
                		{{ $softwares->software_encargado}}
            		</div>
              </div>
              <div class="col">
                <legend><i class="fas fa-laptop"></i> &nbsp;Descripción del Equipo</legend>
                    <div class="form-group">
                		<strong>Código de Bien:</strong>
                		{{ $softwares->software_bienes }}
            		</div>
                    <div class="form-group">
                		<strong>Equipo:</strong>
                		{{ $softwares->software_equipo }}
            		</div>
                    <div class="form-group">
                		<strong>Marca:</strong>
                		{{ $softwares->software_marca }}
            		</div>
                    <div class="form-group">
                		<strong>Serial:</strong>
                		{{ $softwares->software_serial }}
            		</div>
                    <div class="form-group">
                		<strong>Color:</strong>
                		{{ $softwares->software_color }}
            		</div>
              </div>
              <div class="col">
              <legend><i class="fas fa-tools"></i> &nbsp;Tipo de Soporte Técnico</legend>
                    <div class="form-group">
                		<strong>Antivirus:</strong>
                		{{ $softwares->software_antivirus }}
            		</div>
                    <div class="form-group">
                		<strong>Respaldo:</strong>
                		{{ $softwares->software_respaldo }}
            		</div>
                    <div class="form-group">
                		<strong>Recuperación de Información</strong>
                		{{ $softwares->software_recuperacion }}
            		</div>
                    <div class="form-group">
                		<strong>Instalación de Programas y Paquetes:</strong>
                		{{ $softwares->software_programas }}
            		</div>
                    <div class="form-group">
                		<strong>Liberación de Espacio en el Disco Duro:</strong>
                		{{ $softwares->software_discoduro }}
            		</div>
              </div>
              <div class="col">
              <legend>&nbsp;</legend>
              <div class="form-group">
                		<strong>Análisis del Disco con el Antivirus:</strong>
                		{{ $softwares->software_analisisvirus }}
            		</div>
                    <div class="form-group">
                		<strong>Formateo del Equipo:</strong>
                		{{ $softwares->software_formateo }}
            		</div>
                    <div class="form-group">
                		<strong>Revisión de la Configuración de la Red:</strong>
                		{{ $softwares->software_red }}
            		</div>
                    <div class="form-group">
                		<strong>Desfragmentación del Disco Duro:</strong>
                		{{ $softwares->software_desfragmentacion }}
            		</div>
                    <div class="form-group">
                		<strong>Observación:</strong>
                		{{ $softwares->software_observacion }}
            		</div>
              </div>
          </div>
        </div>
    </div>
</div>

@endsection