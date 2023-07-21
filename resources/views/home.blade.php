@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark text-center"><i><b>Sistema de Registro y Control de Hardware y Software</b></i></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">¡Estás conectado!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-6">
            <x-adminlte-small-box title="528" text="Hardware" icon="fas fa-memory text-white" theme="dark" url="hardware" url-text="ver todo los mantenimientos"/>
        </div>
        <div class="col-6">
            <x-adminlte-small-box title="528" text="Software" icon="fas fa-microchip text-white" theme="success" url="software" url-text="ver todo los mantenimientos"/>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <img src="vendor/adminlte/dist/img/banner.png" class="card-img-top figure-img img-fluid">
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
@stop
