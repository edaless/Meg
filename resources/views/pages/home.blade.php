@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>

    <ul>
        @foreach ($types as $type)
            <li>
                {{ $type -> name }}
                @foreach ($type->events as $event)
                <div>{{ $event -> anno }}/{{ $event -> mese }}/{{ $event -> giorno }}   {{ $event -> ora }}:{{ $event -> minuto }}</div>
            @endforeach
            </li>
        @endforeach
       

        <a href="{{ route('type.create') }}">CREATE NEW type</a>
        <br>
        <a href="{{ route('event.create') }}">CREATE NEW event</a>
    </ul>


@endsection