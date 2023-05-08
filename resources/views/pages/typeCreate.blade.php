@extends('layouts.main-layout')

@section('content')
    
    <h1>New type</h1>
    <form method="POST" action="{{ route('type.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <input type="submit" value="CREATE NEW type">
    </form>

@endsection