@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><i class="fa-solid fa-building"></i>&nbsp;Administración de Dependencias</h1>
            </div><br>
            @can('dependencia-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-primary btn-lg" href="{{ route('dependencia.create') }}"><i class="fa fa-plus"></i> Crear Nueva Dependencia</a>
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
                <th>{{__('Name')}}</th>
                <th>Encargado</th>
                <th>Abreviación</th>
                <th>N° Interno</th>
                <th class="text-center" width="280px">{{__('Action')}}</th>
            </tr>
        </thead>
     @foreach ($dependencias as $dependencia)
     <tr>
         <td class="text-center">{{ ++$i }}</td>
         <td>{{ $dependencia->depen_nombre }}</td>
         <td>{{ $dependencia->depen_empleado }}</td>
         <td>{{ $dependencia->depen_abreviacion}}</td>
         <td>{{ $dependencia->depen_num_interno }}</td>
         <td class="text-center">
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('depen-list')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('dependencia.show',$dependencia->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('depen-edit')
                    <a class="btn btn-outline-warning btn-sm" href="{{ route('dependencia.edit',$dependencia->id) }}"><i class="fa fa-pen-to-square"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('depen-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('dependencia.delete',$dependencia->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
         </td>
     </tr>
     @endforeach
    </table>
    {!! $dependencias->links() !!}
<p class="text-center text-primary"><small>By Contraloría del Estado Trujillo</small></p>
@endsection