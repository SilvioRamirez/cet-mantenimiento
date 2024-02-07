<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ public_path('storage/css/adminlte.min.css') }}">
  <title>Mantenimiento de Software</title>
  <style>
    td, th {
      font-size:14px;
    }
    .letra{
      font-size:12px;
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
    <td class="text-center" scope="col"><img src="{{ public_path('storage/img/logo.png') }}" width="70" height="100"></td>
      <td class="text-center" scope="col">República Bolivariana de Venezuela<br>Contraloría del Estado Trujillo<br>Dirección Técnica e Informática</td>
      <td class="text-center align-middle" scope="col">F-DTIUI-006</td>
    </thead>
  </table>
  <h5 class="text-center">REGISTRO Y CONTROL DEL MANTENIMIENTO DE SOFTWARE</h5>
  <table class="table table-bordered table-sm">
    <tr class="table-active">
      <th colspan="3">1. Datos Generales</th>
    </tr>
    <tr>
      <td colspan="2">1.1 Fecha del Mantenimiento</td>
      <td class="text-center">{{ $software->software_fecha }}</td>
    </tr>
    <tr>
    <td class="align-middle" rowspan="2">1.2 Funcionario de Soporte</td>
      <td>Nombre y Apellido</td>
      <td class="text-center">{{ $software->software_funcionario }}</td>
    </tr>
    <tr>
        <td>Cargo</td>
        <td class="text-center">{{ $software->software_cargo}}</td>
    </tr>
    <tr class="table-active">
      <th colspan="3">2. Descripción del Equipo Objeto del Mantenimiento</th>
    </tr>
    <tr>
      <td colspan="2">2.1 Código del Equipo, Según el Inventario de la CET</td>
      <td class="text-center">{{ $software->software_bienes }}</td>
    </tr>
    <tr>
      <td colspan="2">2.2 Dependencia Asignado</td>
      <td class="letra-media">{{ $software->software_dependencia }}</td>
    </tr>
    <tr>
        <td class="align-middle" rowspan="4">2.3 Datos Generales del Equipo</td>
        <td>Equipo</td>
        <td>{{ $software->software_equipo}}</td>
      </tr>
      <tr>
        <td>Marca</td>
        <td>{{ $software->software_marca}}</td>
      </tr>
      <tr>
        <td>Color</td>
        <td>{{ $software->software_color}}</td>
      </tr>
      <tr>
        <td>Serial</td>
        <td>{{ $software->software_serial}}</td>
      </tr>
      <tr>
        <td colspan="3">2.4 Tipo de Soporte Técnico</td>
      </tr>
      <tr>
        <td colspan="2">Actualización del Antivirus: {{ $software->software_antivirus}}<br>Respaldo de Datos: {{ $software->software_respaldo}}<br>Instalación de Programas y Paquetes: {{ $software->software_programas}}<br>Recuperación de Información: {{ $software->software_recuperacion}}<br>Liberación de Espacio en el Disco Duro: {{ $software->software_discoduro}}</td>
        <td>Análisis del Disco con el Antivirus: {{ $software->software_analisisvirus}}<br>Formateo de Equipo: {{ $software->software_formateo}}<br>Revisión de la Configuración de la Red: {{ $software->software_red}}<br>Desfragmentación del Disco Duro: {{ $software->software_desfragmentacion}}</td>
      </tr>
      <tr>
        <th colspan="3">2.5. Observaciones</th>
      </tr>
      <tr>
        <td colspan="3"><br>{{ $software->software_observaciones}}</td>
      </tr>
      <tr class="table-active">
      <th class="text-center" colspan="3">3. Control de Emisión</th>
    </tr>
    <tr>
        <td>3.1 Realizado Por:</td>
        <td>3.2 Recibido Por:</td>
        <td>3.3 V°B°</td>
      </tr>
      <tr>
        <td class="letra">Nombre y Apellido: {{ $software->software_funcionario}}<br>Cargo: {{ $software->software_cargo}}</td>
        <td class="letra">Nombre y Apellido: {{ $software->software_encargado}}<br>Cargo: {{ $software->software_cargoencargado}}<br>Fecha:</td>
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