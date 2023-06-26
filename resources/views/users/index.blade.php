@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h1><i class="fa fa-users"></i>&nbsp;Administración de Usuarios</h1>
        </div><br>
        @can('user-create')
            <div class="pull-right mt-2 mb-2">
                <a class="btn btn-outline-primary btn-lg" href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i> {{ __('Create New User')}}</a>
            </div>
        @endcan
    </div>
</div>

@include('fragment.error')
@include('fragment.success')
<br>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th class="text-center" width="50px">N°</th>
            <th>{{ __('Name')}}</th>
            <th>{{ __('Email')}}</th>
            <th class="text-center">{{ __('Roles')}}</th>
            <th class="text-center" width="280px">{{ __('Action')}}</th>
        </tr>
    </thead>
    @foreach ($data as $key => $user)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <span class="badge bg-success">{{ $v }}</span>
                    @endforeach
                @endif
            </td>
            <td class="text-center">
                <div class="btn-group" role="group" aria-label="Opciones">
                    @can('user-list')
                        <a class="btn btn-outline-success btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i> {{ __('')}}</a>
                    @endcan &nbsp;&nbsp;
                    @can('user-edit')
                        <a class="btn btn-outline-warning btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-pen-to-square"></i> {{ __('')}}</a>
                    @endcan &nbsp;&nbsp;
                    @can('user-delete')
                        <a class="btn btn-outline-danger btn-sm" href="{{ route('users.delete',$user->id) }}"><i class="fa fa-trash"></i> {{ __('')}}</a>
                    @endcan
                </div>
            </td>
        </tr>
    @endforeach
</table>

{!! $data->render() !!}
<p class="text-center text-primary"><small>By silvio.ramirez.m@gmail.com</small></p>

@endsection