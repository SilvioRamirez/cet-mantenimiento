<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ public_path('storage/css/adminlte.min.css') }}">
  <title>Informe Técnico</title>
  <style>
    td, th {
      font-size:11px;
    }
    .letra{
      font-size:10px;
    }
  </style>
</head>
<body>
<div class="table-responsive-sm">

  <table class="table table-bordered table-sm">
    <thead>
    <td class="text-center" scope="col"><img src="{{ public_path('storage/img/logo.png') }}" width="70" height="100"></td>
      <td class="text-center" scope="col">República Bolivariana de Venezuela<br>Contraloría del Estado Trujillo<br><br>Dirección Técnica e Informática</td>
      <td class="text-center align-middle" scope="col">F-DTIUI-010</td>
    </thead>
  </table>
  <h4 class="text-center">INFORME TÉCNICO SOBRE LA VALORACIÓN DE LOS EQUIPOS DE COMPUTACIÓN</h4>
  <table class="table table-bordered table-sm">
      <tr class="table-active">
        <th colspan="3">1. Datos Generales</th>
      </tr>
    <tbody>
      <tr>
        <td colspan="2">1.1 Código del Informe:</td>
        <td class="text-center">{{ $informe->informe_codigo }}</td>
      </tr>
      <tr>
        <td colspan="2">1.2 Fecha de la Elaboración del informe</td>
        <td class="text-center">{{ $informe->created_at}}</td>
      </tr>
      <tr>
        <td colspan="2">1.3 Dependencia Solicitante</td>
        <td>{{ $informe->informe_dependencia}}</td>
      </tr>
      <tr>
        <td class="align-middle" rowspan="2">1.4 Responsable de la Dependencia</td>
        <td>Nombre y Apellido</td>
        <td>{{ $informe->informe_responsable}}</td>
      </tr>
      <tr>
        <td>Cargo</td>
        <td>{{ $informe->informe_cargo}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">2. Descripción del Equipo</th>
      </tr>
      <tr>
        <td colspan="2">2.1 Código del Equipo, Según el Inventario de la CET</td>
        <td>{{ $informe->informe_bienes}}</td>
      </tr>
      <tr>
        <td class="align-middle" rowspan="4">2.2 Datos Generales del Equipo</td>
        <td>Equipo</td>
        <td>{{ $informe->informe_equipo}}</td>
      </tr>
      <tr>
        <td>Marca</td>
        <td>{{ $informe->informe_marca}}</td>
      </tr>
      <tr>
        <td>Color</td>
        <td>{{ $informe->informe_color}}</td>
      </tr>
      <tr>
        <td>Serial</td>
        <td>{{ $informe->informe_serial}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">3. Falla Reportada</th>
      </tr>
      <tr>
        <td colspan="3">{{ $informe->informe_falla}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">4. Diagnóstico Técnico</th>
      </tr>
      <tr>
        <td colspan="3">{{ $informe->informe_diagnostico}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">5. Trabajo Realizado</th>
      </tr>
      <tr>
        <td colspan="3">{{ $informe->informe_trabajo_realizado}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">6. Observaciones</th>
      </tr>
      <tr>
        <td colspan="3">{{ $informe->informe_observaciones}}</td>
      </tr>
      <tr class="table-active">
        <th colspan="3">7. Recomendaciones</th>
      </tr>
      <tr>
        <td colspan="3">{{ $informe->informe_recomendaciones}}</td>
      </tr>
      <tr class="table-active">
        <th  class="text-center" colspan="3">8. Control de Emisión</th>
      </tr>
      <tr>
        <td>8.1 Realizado Por:</td>
        <td>8.2 Revisado Por:</td>
        <td>8.3 V°B°</td>
      </tr>
      <tr>
        <td class="letra">Nombre y Apellido: {{ $informe->informe_funcionario}}<br>Cargo: {{ $informe->informe_cargofuncionario}}<br></td>
        <td class="letra">Nombre y Apellido: Silvio Ramirez <br>Cargo: Jefe de la Unidad de Informática <br>Fecha: </td>
        <td class="letra">Nombre y Apellido: Jeanette Graterol <br>Cargo: Directora de la DTI <br>Fecha: </td>
      </tr>
      <tr>
        <td class="text-center letra">(Firma/Sello)</td>
        <td class="text-center letra">(Firma/Sello)</td>
        <td class="text-center letra">(Firma/Sello)</td>
      </tr>
    </tbody>  
  </table>
</div>
</body>
</html>