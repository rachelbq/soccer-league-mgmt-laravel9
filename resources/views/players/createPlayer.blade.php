{{-- @extends('layouts.layout')

@section('title', 'create')

@section('content')
    <h5>CREATE</h5>
    
    <form action="{{ route('players.store') }}" method="POST">

        @csrf

        <label>
            PLAYER:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
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
            <input type="integer" name="age" value="{{ old('age') }}">
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
            <input type="text" name="position" value="{{ old('position') }}">
        </label>

        @error('position')
            <br>
            <small>*{{ $message }}</small>
            <br>            
        @enderror

        <br>
        <button type="submit">Send</button>
    </form>
@endsection --}}






<!-- Create Club -->
@extends('layouts.layout')

@section('title', 'create')

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-gray-400 px-2 pt-2">
        <h1>add PLAYER</h1>
    </div>

    <div>
        <div class="flex flex-col items-center min-h-screen container max-w-7xl pt-6 bg-gray-100 sm:justify-center sm:pt-0">
          <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                <form action="{{ route('players.store') }}" method="POST">

                @csrf

            <!-- Player name -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                       PLAYER:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="name" value="{{ old('name') }}" />

                    @error('name')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>

            <!-- Age -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        AGE:
                    </label>

                    <input
                    class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="age" value="{{ old('age') }}" />

                    @error('age')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
               </div>    
            
            <!-- Club -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        CLUB:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="id_club" value="{{ old('id_club') }}" placeholder="club where she competes" />

                    @error('id_club')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>   
        
            <!-- Position -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        POSITION:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="position" value="{{ old('position') }}" placeholder="specify: goalkeeper, defender, midfielder, forward" />

                    @error('position')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>           
  
                <div class="flex items-center justify-start mt-4 gap-x-2">
                    <button type="submit"
                        class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-orange-100 bg-orange-500 hover:bg-orange-700 focus:outline-none focus:border-orange-900 focus:ring ring-orange-300">
                        Save
                    </button>
                    <button type="submit"
                        class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection