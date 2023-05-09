@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>

    <ul>
        @foreach ($types as $type)
            <li>{{ $type -> name }}</li>
        @endforeach
        @foreach ($events as $event)
            <li>{{ $event -> ora }}</li>
        @endforeach

        <a href="{{ route('type.create') }}">CREATE NEW type</a>
        <br>
        <a href="{{ route('event.create') }}">CREATE NEW event</a>
    </ul>


@endsection