@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h1><i class="fa fa-users-gear"></i> Administración de Roles</h1>
        </div>
        @can('role-create')
            <div class="pull-right mt-2 mb-2">
                <a class="btn btn-outline-primary btn-lg" href="{{ route('roles.create') }}"><i class="fa fa-user-plus"></i> {{ __('Create New Role')}}</a>
            </div>
        @endcan
    </div>
</div>

@include('fragment.error')
@include('fragment.success')

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th class="text-center" width="50px">N°</th>
            <th>{{ __('Name')}}</th>
            <th class="text-center" width="280px">{{ __('Action')}}</th>
        </tr>
    </thead>
    @foreach ($roles as $key => $role)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td class="text-center">
            <div class="btn-group" role="group" aria-label="Opciones">
                @can('role-list')
                    <a class="btn btn-outline-success btn-sm" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp; 
                @can('role-edit')
                    <a class="btn btn-outline-warning btn-sm" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-pen-to-square"></i> {{ __('')}}</a>
                @endcan&nbsp;&nbsp; 
                @can('role-delete')
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('roles.delete',$role->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                @endcan
            </div>
        </td>
    </tr>
    @endforeach
</table>

{!! $roles->render() !!}
<p class="text-center text-primary"><small>By Contraloría del Estado Trujillo</small></p>

@endsection