@if($message = Session::get('success'))
    <x-adminlte-alert theme="success" title="Éxito">
        {{ $message }}
    </x-adminlte-alert>
@endif
@if(Session::has('info'))
    <x-adminlte-alert theme="info" title="Información">
        {{ Session::get('info')}}
    </x-adminlte-alert>
@endif