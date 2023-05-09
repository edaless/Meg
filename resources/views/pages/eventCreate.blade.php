@extends('layouts.main-layout')


@section('content')
    
    <h1>New event</h1>
    <form method="POST" action="{{ route('event.store') }}">
        @csrf
        
        @foreach ($types as $type)
        <input type="radio" value="{{ $type -> id }}" id="{{ $type -> name }}" name="type_id">
        <label for="{{ $type -> name }}">{{ $type -> name }}</label>
        <br>
        @endforeach
        <div class="input">
            <input type="number" class="inputnum" name="anno" value="{{date("Y")}}">
            <input type="number" class="inputnum" name="mese" value="{{intval(date("m"))}}">
            <input type="number" class="inputnum" name="giorno" value="{{intval(date("d"))}}">
            <input type="number" class="inputnum" name="ora" value="{{date("H")+2}}">
            <input type="number" class="inputnum" name="minuto" value="{{date("i")}}">
            <input type="submit" value="CREATE NEW event">
        </div>
    </form>

@endsection