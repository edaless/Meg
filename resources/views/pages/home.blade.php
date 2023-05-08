@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>

    <ul>
        @foreach ($events as $event)
            <li>{{ $event -> tipo }}</li>
        @endforeach

        <a href="{{ route('type.create') }}">CREATE NEW type</a>
        <a href="{{ route('event.create') }}">CREATE NEW event</a>
    </ul>


@endsection