@extends('layouts.main-layout')

@section('content')

    <a href="{{ route('type.create') }}">CREATE NEW type</a>
    <br>

    <ul>
        @foreach ($types as $type)
            <li class="pipi">
                {{ $type -> name }}
                <a href="{{ route('type.delete', $type) }}">X</a>
                @foreach ($type->events as $event)
                <div>
                    {{ $event -> anno }}/{{ $event -> mese }}/{{ $event -> giorno }}   {{ $event -> ora }}:{{ $event -> minuto }}
                    <a href="{{ route('event.delete', $event) }}">X</a>
                </div>
                
            @endforeach
            </li>
        @endforeach
       

        <a href="{{ route('event.create') }}">CREATE NEW event</a>
    </ul>


@endsection