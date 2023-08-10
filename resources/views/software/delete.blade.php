@extends('adminlte::page')

@section('content')
<br>
<a class="btn btn-outline-success btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-success text-white">
            <i class="fa fa-trash-alt"></i>
                    {{ __('Eliminar') }} Mantenimiento de Software
        </div>
        <div class="card-body text-center" >			
            @include('fragment.error')
            @include('fragment.success')
                    
            {!! Form::open(['method' => 'DELETE','route' => ['software.destroy', $softwares->id],'style'=>'display:inline']) !!}
                    
                <h2 class="text-center">¿Está segur@ de eliminar el Mantenimiento de Software del Bien: <strong>{{ $softwares->software_bienes }}</strong>?</h2>
                <hr>
                    
                <div class="flex-center position-ref full-height">
                    <div class="top-right links text-center">
                        {!! Form::button('<i class="fa fa-trash-alt fa-fw"></i> '.__('Delete'), ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-block'])  !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection