@extends('layouts.layout')

@section('title', 'show' . $competition->name)

@section('content')

    <h5><strong>CLUB: </strong>{{ $competition->name }}</h5>
    
    <p><strong>COACH: </strong>{{ $competition->coach }}</p>
    
    <p><strong>PITCH: </strong>{{ $competition->pitch }}</p>

    <p><strong>LOCATION: </strong>{{ $competition->location }}</p>
    
    <a href = {{ route('competitions.index') }}>Home</a>
    <br>
    
    <a href = {{ route('competitions.edit', $competition) }}>Edit</a>
    
    <form action={{ route('competitions.destroy', $competition )}} method="POST">

        @csrf

        @method('delete')

        <button type="submit">Remove</button>

    </form>

@endsection