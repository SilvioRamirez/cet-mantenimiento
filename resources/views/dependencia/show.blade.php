@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>
{{-- BoostrapCard --}}
<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-building"></i>&nbsp;
            {{ __('Show')}} Dependencia
        </div>
        <div class="card-body">
            <div class="form-group">
                <strong>{{ __('Name')}}:</strong>
                {{ $dependencia->depen_nombre }}
            </div>
            <div class="form-group">
                <strong>{{ __('Abreviación')}}:</strong>
                {{ $dependencia->depen_abreviacion }}
            </div>
            <div class="form-group">
                <strong>{{ __('Encargado')}}:</strong>
                {{ $dependencia->depen_empleado }}
            </div>
            <div class="form-group">
                <strong>{{ __('Nivel')}}:</strong>
                {{ $dependencia->depen_nivel }}
            </div>
            <div class="form-group">
                <strong>{{ __('N° Interno')}}:</strong>
                {{ $dependencia->depen_num_interno }}
            </div>
        </div>
    </div>
</div>

@endsection