@extends('layouts.layout')

@section('title', 'show' . $player->name)

@section('content')

    <h5><strong>CLUB: </strong>{{ $player->name }}</h5>
    
    <p><strong>COACH: </strong>{{ $player->coach }}</p>
    
    <p><strong>PITCH: </strong>{{ $player->pitch }}</p>

    <p><strong>LOCATION: </strong>{{ $player->location }}</p>
    
    <a href = {{ route('players.index') }}>Home</a>
    <br>
    
    <a href = {{ route('players.edit', $player) }}>Edit</a>
    
    <form action={{ route('players.destroy', $player )}} method="POST">

        @csrf

        @method('delete')

        <button type="submit">Remove</button>

    </form>

@endsection