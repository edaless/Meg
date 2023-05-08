@extends('layouts.main-layout')

@section('content')
    
    <h1>New event</h1>
    <form method="POST" action="{{ route('event.store') }}">
        @csrf
        <input type="number" name="tipo">
        <input type="time" name="ora">
        <input type="date" name="data">
        <input type="submit" value="CREATE NEW event">
    </form>

@endsection