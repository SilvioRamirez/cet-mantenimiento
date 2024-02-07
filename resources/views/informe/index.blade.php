@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-book fa-fw"></i>&nbsp;Administración de Informes Técnicos</h1>
            </div><br>
            @can('informe-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-success btn-lg" href="{{ route('informe.create') }}"><i class="fa fa-plus"></i> Crear Nuevo Informe Técnico</a>
                </div>
            @endcan
        </div>
    </div>

    @include('fragment.error')
    @include('fragment.success')
<br>

<table class="table table-bordered" width="100%">
        <thead>    
            <tr>
                <th class="text-center" width="50px">N°</th>
                <th>Informe</th>
                <th>Fecha</th>
                <th>Funcionario de Soporte</th>
                <th>Dependencia</th>
                <th>Equipo</th>
                <th>Falla Reportada</th>
                <th>Trabajo Realizado</th>
                <th class="text-center" width="280px">{{__('Action')}}</th>
            </tr>
        </thead>
     @foreach ($informes as $informe)
     <tr>
         <td class="text-center">{{ ++$i }}</td>
         <td>{{ $informe->informe_codigo }}</td>
         <td>{{ $informe->created_at}}</td>
         <td>{{ $informe->informe_funcionario }}</td>
         <td>{{ $informe->informe_dependencia}}</td>
         <td>{{ $informe->informe_equipo }}</td>
         <td>{{ $informe->informe_falla }}</td>
         <td>{{ $informe->informe_trabajo_realizado }}</td>
         <td class="text-center">
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('informe-download')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('informe.pdf',$informe->id) }}"><i class="fa fa-download"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('informe-list')
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('informe.show',$informe->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('informe-edit')
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('informe.edit',$informe->id) }}"><i class="fa fa-edit"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('informe-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('informe.delete',$informe->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
         </td>
     </tr>
     @endforeach
    </table>
    {!! $informes->links() !!}

@endsection