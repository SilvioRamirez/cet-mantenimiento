@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

@include('fragment.error')

<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-user-plus"></i> 
            {{ __('Create New User')}}
        </div>
        <div class="card-body">

            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                @include('users.partials.form')
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection