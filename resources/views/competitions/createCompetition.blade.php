<!-- Create Competition -->
@extends('layouts.layout')

@section('title', 'create')

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-gray-400 px-2 pt-2">
        <h1>add MATCH</h1>
    </div>

    <div>
        <div class="flex flex-col items-center min-h-screen container max-w-7xl pt-6 bg-gray-100 sm:justify-center sm:pt-0">
          <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                <form action="{{ route('competitions.store') }}" method="POST">

                @csrf

            <!-- Day -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        DATE:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="day" value="{{ old('day') }}" placeholder="format ex.: 15th January 2023" />

                    @error('day')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>

            <!-- Time -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        TIME:
                    </label>

                    <input
                    class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="hour" value="{{ old('hour') }}" placeholder="format ex.: 16:00" />

                    @error('hour')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
               </div>    
            
            <!-- Local team -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        LOCAL TEAM:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="id_local_club" value="{{ old('id_local_club') }}" placeholder="choose a club of the list" />

                    @error('id_local_club')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>   
        
            <!-- Visitor team -->                
                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        VISITOR TEAM:
                    </label>

                    <input
                        class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                        input type="text" name="id_visitor_club" value="{{ old('id_visitor_club') }}" placeholder="choose a club of the list" />

                    @error('id_visitor_club')
                        <small>*{{ $message }}</small>
                        <br>            
                    @enderror
                </div>   
              
            <!-- Referee -->                
            <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                    REFEREE:
                </label>

                <input
                class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                    input type="text" name="referee" value="{{ old('referee') }}" />

                {{-- @error('referee')
                    <small>*{{ $message }}</small>
                    <br>            
                @enderror --}}
           </div>    
                       
            <!-- Score -->                
            <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                    SCORE:
                </label>

                <input
                    class="block w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-200 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                    input type="text" name="score" value="{{ old('score') }}" placeholder="format ex.: 2-2" />

                {{-- @error('score')
                    <small>*{{ $message }}</small>
                    <br>            
                @enderror --}}
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