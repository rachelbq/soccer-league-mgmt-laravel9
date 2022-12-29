<!-- Show Club -->
@extends('layouts.layout')

@section('title', 'show' . $club->name)

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-xl text-gray-400 px-4 pt-4">
        <h1>showing / remove / edit CLUB</h1>
    </div>

    <div>
        <div class="overflow-y-auto flex min-h-0 container max-w-7xl pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-16 mt-0 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">
                <div class="w-full text-lg text-gray-700 px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                    <h1><strong>CLUB: </strong>{{ $club->name }}<h1>
                    <h1><strong>COACH: </strong>{{ $club->coach }}</h1>
                    <h1><strong>PITCH: </strong>{{ $club->pitch }}</h1>
                    <h1><strong>LOCATION: </strong>{{ $club->location }}</h1>
            
                    <form action="{{ route('clubs.destroy', $club )}}" method="POST">

                        @csrf

                        @method('delete')

                        <button type="submit" class="px-6 py-2 mt-5 mb-5 text-lg font-semibold text-gray-100 bg-gray-800 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300" onclick="return confirmation()">
                            Remove</button>

                    </form>

                    <button class="px-6 py-2 mr-4 text-lg font-semibold rounded-md shadow-lg text-orange-100 bg-orange-500 hover:bg-orange-700 focus:outline-none focus:border-orange-900 focus:ring ring-orange-300">
                        <a href={{ route('clubs.edit', $club) }}>Edit</a></button>

                    <button class="px-6 py-2 text-lg font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                        <a href={{ route('clubs.index') }}>Index</a></button>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection