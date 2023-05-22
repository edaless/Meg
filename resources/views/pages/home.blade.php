@extends('layouts.main-layout')

@section('content')

    <a href="{{ route('type.create') }}">CREATE NEW type</a>
    <br>

    <ul class="d-flex">
        @foreach ($types as $type)
            <li class="{{ $type -> name }} col d-flex flex-column justify-content-between" >
                <span class="titolo">
                    {{ $type -> name }}
                </span>
                @foreach ($type->events as $event)
                    <div>
                        {{ $event -> anno }}/{{ $event -> mese }}/{{ $event -> giorno }}   {{ $event -> ora }}:{{ $event -> minuto }}
                        <a href="{{ route('event.delete', $event) }}">X</a>
                    </div>
                    
                    {{-- elimina tipo --}}
                    <a href="{{ route('type.delete', $type) }}">X</a>
                    
                @endforeach
                <a href="{{ route('event.create') }}">CREATE NEW event</a>
            </li>
        @endforeach
       

    </ul>
    <a href="{{ route('event.create') }}">CREATE NEW event</a>


@endsection