@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-memory"></i>&nbsp;Administración de Mantenimiento de Hardware</h1>
            </div><br>
            @can('hardware-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-success btn-lg" href="{{ route('hardware.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Mantenimiento</a>
                </div>
            @endcan
        </div>
    </div>

    @include('fragment.error')
    @include('fragment.success')
<br>
  

@endsection