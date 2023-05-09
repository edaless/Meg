@extends('layouts.main-layout')

@section('content')
    
    <h1>New event</h1>
    <form method="POST" action="{{ route('event.store') }}">
        @csrf
        
        @foreach ($types as $type)
        <input type="radio" value="{{ $type -> id }}" id="{{ $type -> name }}" name="tipo">
        <label for="{{ $type -> name }}">{{ $type -> name }}</label>
        <br>
        @endforeach
        <input type="time" name="ora">
        <input type="date" name="data">
        <input type="submit" value="CREATE NEW event">
    </form>

@endsection