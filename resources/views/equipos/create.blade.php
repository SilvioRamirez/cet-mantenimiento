@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i>&nbsp;{{ __('Back')}}</a>

<div class="col-lg-12 margin-tb">

    @include('fragment.error')

    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white"><i class="fa fa-laptop"></i>&nbsp; 
            {{ __('Create New')}} Equipo
        </div>
        <div class="card-body">

            {!! Form::open(array('route' => 'equipos.store','method'=>'POST')) !!}
                @include('equipos.partials.form')
            {!! Form::close() !!}

        </div>
    </div>
    
</div>

@endsection