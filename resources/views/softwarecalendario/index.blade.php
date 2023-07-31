@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="text-center">
                <h1><i class="fa fa-calendar-alt"></i>&nbsp;Calendario de Software</h1>
            </div><br>
        </div>
    </div>
    <div class="row">
      <button class="btn btn-primary" id="iniciarCalendario" onclick="iniciarCalendario()">Iniciar</button>
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
        <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" id="eventForm">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="">
            </div>
            <div class="form-group">
                <label for="title">Dependencia</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Ingrese la Dependencia">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="start">Empieza</label>
                <input type="date" class="form-control" name="start" id="start" placeholder="Ingrese la Fecha de Inicial">
            </div>
            <div class="form-group">
                <label for="end">Finaliza</label>
                <input type="date" class="form-control" name="end" id="end" placeholder="Ingrese la Fecha de Finalizado">
            </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" id="btnGuardar"><i class="fa fa-save fa-fw"></i>Guardar</button>
        &nbsp;
        <button type="button" class="btn btn-outline-info" id="btnModificar"><i class="fa fa-edit fa-fw"></i>Editar</button>
        &nbsp;
        <button type="button" class="btn btn-outline-danger" id="btnEliminar"><i class="fa fa-trash fa-fw"></i>Eliminar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script> --}}

<script src='storage/js/index.global.min.js'></script>

<script type="module">

    var SITEURL = "{{ url('/') }}";
    
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
          selectHelper: true,
          eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },                
                eventDrop: function (event, delta) {
                    var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.event_name,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function (response) {
                            displayMessage("Event updated");
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm("Are you sure?");
                    if (eventDelete) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event removed");
                            }
                        });
                    }
                }

          dateClick:function(info){
            $("#evento").modal("show");
          }

        });
        calendar.render();

        /* Funcion Para guardar el formulario de nuevo evento */
        document.getElementById("btnGuardar").addEventListener("click",function(){
            const datos= new FormData(formulario);
            console.log(datos);

            var url = '/softwarecalendario/store';
            axios
            .post(url, datos)
            .then(response => {
                  let status = response.data.status;
                  let message = response.data.message;
                  alert (message, status);
                  $('#evento').modal('hide');
                  /* familiarsreload() */
                /* toastr.success('Familiar agregado con exito.'); */
            })
            .catch(error => {                  
                  if(error.response){
                    console.log(error.response.data.errors)
                    alert (error.response.data.message)
                  }
          });
        });

      });
</script>

@endpush