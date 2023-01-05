<!-- Edit Club -->
@extends('layouts.layout')

@section('title', 'edit')

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-xl text-gray-400 px-4 pt-4">
        <h1>editing CLUB data</h1>
    </div>

    <div>
        <div class="overflow-y-auto flex min-h-0 container max-w-7xl pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-16 mt-0 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">
                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                    <form action="{{ route('clubs.update', $club) }}" method="POST">

                    @csrf

                    @method("put")

                    <!-- Club name -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *CLUB:
                        </label>

                        <input
                            class="block  text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                            input type="text" name="name" value="{{ old('name', $club->name) }}" />

                        @error('name')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>

                    <!-- Coach -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *COACH:
                        </label>

                        <input
                        class="block text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                            input type="text" name="coach" value="{{  old('coach', $club->coach) }}" />

                        @error('coach')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>    
                
                    <!-- Pitch -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *PITCH:
                        </label>

                        <input
                            class="block  text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                            input type="text" name="pitch" value="{{ old('pitch', $club->pitch) }}" placeholder="--Training & playing pitch--" />

                        @error('pitch')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>   
            
                    <!-- Club location -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *CLUB LOCATION:
                        </label>

                        <input
                            class="block text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                            input type="text" name="location" value="{{  old('location', $club->location) }}" placeholder="--City ​​to which the club is affiliated--" />

                        @error('location')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>
                      
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mt-2" for="title">
                            *required field.
                        </label>
                    </div>
  
                    <!-- Actions -->    
                    <div class="flex items-center justify-start mt-4 gap-x-2">

                        <button type="submit"
                            class="px-6 py-2 text-lg font-semibold rounded-md shadow-md text-orange-100 bg-orange-500 hover:bg-orange-700 focus:outline-none focus:border-orange-900 focus:ring ring-orange-300">
                            Update
                        </button>

                        <button type="submit"
                            class="px-6 py-2 text-lg font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Cancel
                        </button>
                        
                        <button
                            class="px-6 py-2 text-lg font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            <a href={{ route('clubs.index') }}>
                            Index
                            </a>
                        </button>

                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection