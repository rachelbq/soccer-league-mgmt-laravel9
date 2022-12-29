@extends('layouts.layout')

@section('title', 'edit')

@section('content')
    <h5>EDIT</h5>
    
    <form action="{{ route('players.update', $id) }}" method="POST">
        
        @csrf
        
        @method("put")
        
        <label>
            PLAYER:
            <br>
            <input type="text" name="name" value="{{ old('name', $id = 'name') }}">
        </label>

        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <label>
            AGE:
            <br>
            <input type="integer" name="age" value="{{ old('age', $id = 'age') }}">
        </label>

        @error('age')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <label>
            POSITION:
            <br>
            <input type="text" name="position" value="{{ old('position', $id = 'position') }}">
        </label>

        @error('position')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <button type="submit">Update</button>
    </form>
@endsection