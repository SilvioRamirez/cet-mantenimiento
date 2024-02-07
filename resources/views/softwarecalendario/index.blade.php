@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-calendar-alt"></i>&nbsp;Calendario de Software</h1>
            </div><br>
        </div>
    </div>
      <!-- fullcalendar -->    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div id="calendariosoftware">
                    </div>
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cronograma de Mantenimiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="" id="eventForm">            
            <div class="form-group">
                <label for="title">Dependencia</label>                
                <select id="title" name="title" class="form-select">
                  <option selected="">Seleccione</option>
                </select>

              </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="start" id="start" hidden="true" placeholder="Ingrese la Fecha de Inicial">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="end" id="end" hidden="true" placeholder="Ingrese la Fecha de Finalizado">
            </div>
            <div class="form-group">
              <p id="duracion"></p>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" id="btnGuardar"><i class="fa fa-save fa-fw"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')

<script src="storage/js/index.global.min.js"></script>
<script src="storage/js/es.global.min.js"></script>

<script type="module">

/* Carga el listado de dependencias de manera dinamica con axios */
function loadLista(){

    var sel = document.getElementById('title');

    removeOptions(sel);

    var url = SITEURL + '/dependencia/list';
    axios.get(url).then(response => {
          let status = response.status;
          let message = response.statusText;
          console.log(message, status);
          

          for (var i=0; i < response.data.length; i++) {
              var opt = response.data[i].depen_nombre;
              var el = document.createElement('option');
              el.textContent = opt;
              el.value = opt;
              sel.appendChild(el);
          }
    }).catch(error => {                  
          if(error.response){
              console.log(error.response.data.errors)
          }
    });
  
}

/* Funcion que permite limpiar el contenido de un select despues de utilizarlo */
function removeOptions(selectElement) {
    var i, L = selectElement.options.length - 1;
    for(i = L; i >= 0; i--) {
        selectElement.remove(i);
    }
}

/* Formatea la fecha y hora acorde a el dateformat de la base de datos para que no existan problemas al momento de hacer los registros y modificaciones */
function formatDate(date) {
    let p = new Intl.DateTimeFormat('fr-CA',{
    year:'numeric',
    month:'2-digit',
    day:'2-digit',
    hour:'2-digit',
    minute:'2-digit',
    second: '2-digit'
  }).formatToParts(date).reduce((acc, part) => {
      acc[part.type] = part.value;
      return acc;
  }, {});
  
  return `${p.year}-${p.month}-${p.day} ${p.hour}:${p.minute}:${p.second}`; 
}

var SITEURL = "{{ url('/') }}";

/* Carga la información del calendario una vez este cargada la pagina */
document.addEventListener('DOMContentLoaded', function() {

let formulario = document.getElementById("eventForm");
var calendarEl = document.getElementById('calendariosoftware');

      var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar:{
            left:'prev,next today',
            center: 'title',
            right:'dayGridMonth,timeGridWeek,listWeek'
          },
          initialView: 'dayGridMonth',
          events: SITEURL + "/calendar-event",
          editable: true,
          displayEventTime: true,
          selectable: true,
          locale: 'es',

          select: function(event, delta){
            loadLista();
            duracion = document.getElementById('duracion');
              duracion.innerHTML = 'Empieza: <b>' + event.startStr + '</b> - Finaliza: <b>' + event.endStr + '</b>';
              $("#evento").modal("show");
              document.getElementById('start').value = event.startStr;
              document.getElementById('end').value = event.endStr;
          },

          eventDrop: function (event, delta) {

              var event_start = formatDate(event.event.start);
              var event_end = formatDate(event.event.end);
              var id = event.event.id;

              var url = SITEURL + '/calendar-crud-ajax';
              axios.post(url, {
                  title: event.event.title,
                  descripcion: event.event.descripcion,
                  start: event_start,
                  end: event_end,
                  id: id,
                  type: 'edit'
              }).then(response => {
                    let status = response.data.status;
                    let message = response.data.message;
                    alert (message, status);
                    //Actualiza los eventos del calendario
                    calendar.refetchEvents();
              }).catch(error => {                  
                    if(error.response){
                      console.log(error.response.data.errors)
                    }
              });
          },

          eventClick: function (event) {
              var eventDelete = confirm("¿Esta seguro de eliminar esta información?");
              if (eventDelete) {

                var id = event.event.id;

                var url = SITEURL + '/calendar-crud-ajax';
                axios.post(url, {
                    id: id,
                    type: 'delete'
                }).then(response => {
                      let status = response.data.status;
                      let message = response.data.message;
                      alert (message, status);
                      //Actualiza los eventos del calendario
                      calendar.refetchEvents();
                }).catch(error => {                  
                      if(error.response){
                        console.log(error.response.data.errors)
                      }
                });
              }
          },

          dateClick:function(info){
            $("#evento").modal("show");
            loadLista();
          }

        });
        calendar.render();

        /* Funcion Para guardar el formulario de nuevo evento */
        document.getElementById("btnGuardar").addEventListener("click",function(){
            const datos= new FormData(formulario);
            var url = '/softwarecalendario/store_ajax';
            axios.post(url, datos).then(response => {
                  let status = response.data.status;
                  let message = response.data.message;
                  alert (message, status);
                  $('#evento').modal('hide');
                  calendar.refetchEvents();
                  var sel = document.getElementById('title')
                  sel.empty();
                  //Actualiza los eventos del calendario
                  document.getElementById('eventForm').reset();
            }).catch(error => {                  
                  if(error.response){
                    console.log(error.response.data.errors)
                    alert (error.response.data.message)
                  }
            });
        });

    });
</script>

@endpush