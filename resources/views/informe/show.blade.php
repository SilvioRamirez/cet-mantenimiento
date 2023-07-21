@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>
{{-- BoostrapCard --}}
<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-building"></i>&nbsp;
            {{ __('Show')}} Informe Técnico
        </div>
        <div class="card-body">
          <div class="row">
            	<div class="col">
                <div class="form-group">
                		<strong>N° de Informe:</strong>
                		{{ $informes->informe_codigo }}
            		</div>
            		<div class="form-group">
                		<strong>Fecha:</strong>
                		{{ $informes->informe_fecha }}
            		</div>
            		<div class="form-group">
                		<strong>Funcionario de Soporte:</strong>
                		{{ $informes->informe_funcionario }}
            		</div>
            		<div class="form-group">
                		<strong>Dependencia:</strong>
                		{{ $informes->informe_dependencia }}
            		</div>
            		<div class="form-group">
                		<strong>Encargado:</strong>
                		{{ $informes->informe_responsable }}
            		</div>
								<div class="form-group">
                		<strong>Cargo:</strong>
                		{{ $informes->informe_cargo }}
            		</div>
            		<div class="form-group">
                		<strong>N° de Bien:</strong>
                		{{ $informes->informe_bienes }}
            		</div>
            		<div class="form-group">
                		<strong>Equipo:</strong>
                		{{ $informes->informe_equipo }}
            		</div>
            		<div class="form-group">
                		<strong>Marca:</strong>
                		{{ $informes->informe_marca }}
            		</div>
							</div>
              <div class="col">
                <div class="form-group">
                		<strong>Serial:</strong>
                		{{ $informes->informe_serial }}
            		</div>
            		<div class="form-group">
                		<strong>Color:</strong>
                		{{ $informes->informe_color }}
            		</div>
            		<div class="form-group">
                		<strong>Caracteristica:</strong>
                		{{ $informes->informe_caracteristicas }}
            		</div>
            		<div class="form-group">
                		<strong>Falla Reportada:</strong>
                		{{ $informes->informe_falla }}
            		</div>
            		<div class="form-group">
                		<strong>Diagnóstico:</strong>
                		{{ $informes->informe_diagnostico }}
								</div>
            		<div class="form-group">
                		<strong>Trabajo Realizado:</strong>
                		{{ $informes->informe_trabajo_realizado }}
            		</div>
            		<div class="form-group">
                		<strong>Observaciones:</strong>
                		{{ $informes->informe_observaciones }}
            		</div>
            		<div class="form-group">
                		<strong>Recomendaciones:</strong>
                		{{ $informes->informe_recomendaciones }}
            		</div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection