@extends('layouts.layout')

@section('title', 'edit')

@section('content')
    <h5>EDIT</h5>
    
    <form action="{{ route('competitions.update', $id) }}" method="POST">
        
        @csrf
        
        @method("put")
        
        <label>
            DATE:
            <br>
            <input type="text" name="day" value="{{ old('day', $id = 'day') }}">
        </label>

        @error('day')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <label>
            TIME:
            <br>
            <input type="text" name="hour" value="{{ old('hour', $id = 'hour') }}">
        </label>

        @error('hour')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <label>
            LOCAL TEAM:
            <br>
            <input type="bigInteger" name="id_local_club" value="{{ old('id_local_club', $id = 'id_local_club') }}">
        </label>

        @error('id_local_club')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <label>
            VISITOR CLUB:
            <br>
            <input type="bigInteger" name="id_visitor_club" value="{{ old('id_visitor_club', $id = 'id_visitor_club') }}">
        </label>

        @error('id_visitor_club')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <label>
            REFEREE:
            <br>
            <input type="text" name="referee" value="{{ old('referee', $id = 'referee') }}">
        </label>

        @error('referee')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <label>
            SCORE:
            <br>
            <input type="text" name="score" value="{{ old('score', $id = 'score') }}">
        </label>

        @error('score')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <button type="submit">Update</button>
    </form>
@endsection