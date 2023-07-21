@if (count($errors) > 0)
    <x-adminlte-alert theme="danger" title="Error">
        <strong>{{ __('Whoops!')}}</strong> {{ __('There were some problems with your input')}}<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-adminlte-alert>
@endif

@if(Session::has('error'))
    <x-adminlte-alert theme="danger" title="Error">
        {{ Session::get('error')}}
    </x-adminlte-alert>
@endif

