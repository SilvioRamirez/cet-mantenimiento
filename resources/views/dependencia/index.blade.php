@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-building"></i>&nbsp;Administración de Dependencias</h1>
            </div><br>
            @can('dependencia-create')
                <div class="pull-right mb-2">
                    <a class="btn btn-outline-success btn-lg" href="{{ route('dependencia.create') }}"><i class="fa fa-plus"></i> Crear Nueva Dependencia</a>
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
                <th>Abreviación</th>
                <th>N° Interno</th>
                <th class="text-center" width="280px">{{__('Action')}}</th>
            </tr>
        </thead>
     @foreach ($dependencias as $dependencia)
     <tr>
         <td class="text-center">{{ ++$i }}</td>
         <td>{{ $dependencia->depen_nombre }}</td>
         <td>{{ $dependencia->depen_abreviacion}}</td>
         <td>{{ $dependencia->depen_num_interno }}</td>
         <td class="text-center">
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('depend-list')
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('dependencia.show',$dependencia->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('depend-edit')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('dependencia.edit',$dependencia->id) }}"><i class="fa fa-edit"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp;
                @can('depend-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('dependencia.delete',$dependencia->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
         </td>
     </tr>
     @endforeach
    </table>
    {!! $dependencias->links() !!}

    @push('js')
        <script>
            
        </script>
    @endpush
@endsection