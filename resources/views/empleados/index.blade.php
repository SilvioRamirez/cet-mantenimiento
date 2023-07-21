@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-user-tie"></i>&nbsp;Administración de Empleados</h1>
            </div><br>
            @can('empleados-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-success btn-lg" href="{{ route('empleados.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Empleado</a>
                </div>
            @endcan
        </div>
    </div>

    @include('fragment.error')
    @include('fragment.success')
<br>
    <table class="table table-bordered">
        <thead>    
            <tr>
                <th>N°</th>
                <th>{{__('Name')}}</th>
                <th>Encargado</th>
                <th>Abreviación</th>
                <th>N° Interno</th>
                <th width="280px">{{__('Action')}}</th>
            </tr>
        </thead>
     @foreach ($empleados as $empleado)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $dependencia->depen_nombre }}</td>
         <td>{{ $dependencia->depen_empleado }}</td>
         <td>{{ $dependencia->depen_abreviacion}}</td>
         <td>{{ $dependencia->depen_num_interno }}</td>
         <td>
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('empleado-list')
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('empleado-edit')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-edit"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('empleado-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('empleados.delete',$empleado->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
         </td>
     </tr>
     @endforeach
    </table>
    {!! $empleados->links() !!}
@endsection