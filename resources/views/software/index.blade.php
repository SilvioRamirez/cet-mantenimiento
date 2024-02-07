@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-microchip"></i>&nbsp;Administración de Mantenimiento de Software</h1>
            </div><br>
            @can('software-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-success btn-lg" href="{{ route('software.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Mantenimiento</a>
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
                <th class="text-center" width="50px">N°</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Funcionario de Soporte</th>
                <th class="text-center">Dependencia</th>
                <th class="text-center">Equipo</th>
                <th class="text-center">Código del Bien</th>
                <th class="text-center" width="280px">{{__('Action')}}</th>
            </tr>
        </thead>
     @foreach ($softwares as $software)
     <tr>
         <td class="text-center">{{ ++$i }}</td>
         <td class="text-center">{{ $software->software_fecha}}</td>
         <td>{{ $software->software_funcionario }}</td>
         <td>{{ $software->software_dependencia}}</td>
         <td>{{ $software->software_equipo }}</td>
         <td class="text-center">{{ $software->software_bienes }}</td>
         <td class="text-center">
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('software-download')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('software.pdf',$software->id) }}"><i class="fa fa-download"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('software-list')
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('software.show',$software->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('software-edit')
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('software.edit',$software->id) }}"><i class="fa fa-edit"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('software-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('software.delete',$software->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
         </td>
     </tr>
     @endforeach
    </table>
    {!! $softwares->links() !!} 

@endsection