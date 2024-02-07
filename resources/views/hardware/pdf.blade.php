<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ public_path('storage/css/adminlte.min.css') }}">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
  
  <title>Mantenimiento de Hardware</title>
  <style>
    td, th {
      font-size:14px;
    }
    .letra{
      font-size:11px;
    }
    .letra-media{
      font-size:13px;
    }
  </style>
</head>
<body>
<div class="table-responsive-sm">
<table class="table table-bordered table-sm">
    <thead>
      <td class="text-center" scope="col"><img src="{{ public_path('storage/img/logo.png') }}" width="50" height="60"></td>
      <td class="text-center" scope="col">República Bolivariana de Venezuela<br>Contraloría del Estado Trujillo<br>Dirección Técnica e Informática</td>
      <td class="text-center align-middle" scope="col">F-DTIUI-007</td>
    </thead>
  </table>
  <h5 class="text-center">REGISTRO Y CONTROL DEL MANTENIMIENTO DE HARDWARE</h5>
  <table class="table table-bordered table-sm">
    <tr class="table-active">
      <th colspan="3">1. Datos Generales</th>
    </tr>
    <tr>
      <td colspan="2">1.1 Fecha del Mantenimiento</td>
      <td class="text-center">{{ $hardware->created_at }}</td>
    </tr>
    <tr>
    <td class="align-middle" rowspan="2">1.2 Funcionario de Soporte</td>
      <td>Nombre y Apellido</td>
      <td class="text-center">{{ $hardware->hardware_funcionario }}</td>
    </tr>
    <tr>
        <td>Cargo</td>
        <td class="text-center">{{ $hardware->hardware_cargo}}</td>
    </tr>
    <tr class="table-active">
      <th colspan="3">2. Descripción del Equipo Objeto del Mantenimiento</th>
    </tr>
    <tr>
      <td colspan="2">2.1 Código del Equipo, Según el Inventario de la CET</td>
      <td class="text-center">{{ $hardware->hardware_bienes }}</td>
    </tr>
    <tr>
      <td colspan="2">2.2 Dependencia Asignado</td>
      <td class="letra-media">{{ $hardware->hardware_dependencia }}</td>
    </tr>
    <tr>
        <td class="align-middle" rowspan="4">2.3 Datos Generales del Equipo</td>
        <td>Equipo</td>
        <td>{{ $hardware->hardware_equipo}}</td>
      </tr>
      <tr>
        <td>Marca</td>
        <td>{{ $hardware->hardware_marca}}</td>
      </tr>
      <tr>
        <td>Color</td>
        <td>{{ $hardware->hardware_color}}</td>
      </tr>
      <tr>
        <td>Serial</td>
        <td>{{ $hardware->hardware_serial}}</td>
      </tr>
      <tr>
      <td colspan="3">2.4 Tipo de Soporte Técnico</td>
      </tr>
      <tr>
        <td>Limpieza de Case (Sopladora): {{ $hardware->hardware_limpiezacase}}<br>Limpieza de Case (Externa): {{ $hardware->hardware_limpiezacasexterna}}<br>Limpieza del Monitor: {{ $hardware->hardware_limpiezamonitor}}<br>Limpieza de Teclado: {{ $hardware->hardware_limpiezateclado}}</td>
        <td>Limpieza de Mouse: {{ $hardware->hardware_limpiezamouse}}<br>Limpieza de Impresora: {{$hardware->hardware_limpiezaimpresora}}<br>Limpieza de Procesador: {{ $hardware->hardware_limpiezaprocesador}}<br>Limpieza de Fuente de Poder: {{ $hardware->hardware_limpiezafuente}}</td>
        <td>Limpieza de Piezas Electrónica: {{ $hardware->hardware_limpiezaelectronico}}<br>Limpieza de Memorias Ram: {{ $hardware->hardware_limpiezaram}}<br>Limpieza de Unidad de CD/DVD: {{ $hardware->hardware_limpiezacd}}</td>
      </tr>
      <tr>
      <td colspan="3">2.5 Cambio de Componentes Internos del Computador</td>
      </tr>
      <tr>
        <td>Procesador: {{ $hardware->hardware_procesador}}<br>Tarjeta Madre: {{ $hardware->hardware_tarjetamadre}}<br>Unidad de CD: {{ $hardware->hardware_cd}}</td>
        <td>Disco Duro: {{ $hardware->hardware_hdd}}<br>Fuente de Poder: {{ $hardware->hardware_fuente_poder}}<br>Unidad de DVD: {{ $hardware->hardware_dvd}}</td>
        <td>Faja/Cable: {{ $hardware->hardware_faja_cable}}<br>Memoria Ram: {{ $hardware->hardware_memoria}}<br>Pila: {{ $hardware->hardware_pila}}</td>
      </tr>
      <tr>
        <td colspan="3">2.6 Observaciones:</td>
      </tr>
      <tr>
        <td colspan="3">{{ $hardware->hardware_observacion}}</td>
      </tr>
      <tr class="table-active">
        <td class="text-center" colspan="3">3. Control de Emisión</td>
      </tr>
      <tr>
        <td>3.1 Realizado Por:</td>
        <td>3.2 Recibido Por:</td>
        <td>3.3 V°B°</td>
      </tr>
      <tr>
        <td class="letra">Nombre y Apellido: {{ $hardware->hardware_funcionario}}<br>Cargo: {{ $hardware->hardware_cargo}}</td>
        <td class="letra">Nombre y Apellido: {{ $hardware->hardware_encargado}}<br>Cargo: Cargo: {{ $hardware->hardware_cargoencargado}}<br>Fecha: </td>
        <td class="letra">Nombre y Apellido: Silvio Ramírez <br>Cargo: Jefe de Informática<br>Fecha:</td>
      </tr>
      <tr>
        <td class="text-center letra">(Firma/Sello)</td>
        <td class="text-center letra">(Firma/Sello)</td>
        <td class="text-center letra">(Firma/Sello)</td>
      </tr>
  </table>
</div>
</body>
</html>