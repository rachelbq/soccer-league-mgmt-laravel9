<!-- Edit Player -->
@extends('layouts.layout')

@section('title', 'edit')

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-xl text-gray-400 px-4 pt-4">
        <h1>editing PLAYER data</h1>
    </div>

    <div>
        <div class="overflow-y-auto flex min-h-0 container max-w-7xl pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-16 mt-0 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">
                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                    <form action="{{ route('players.update', $player) }}" method="POST">

                    @csrf

                    @method("put")

                    <!-- Player name -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *PLAYER:
                        </label>

                        <input
                            class="block  text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50"
                            input type="text" name="name" value="{{ old('name', $player->name) }}" />

                        @error('name')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>

                    <!-- Age -->                
                    <div>
                        <label class="inline-block mr-4 mt-2 mb-5 text-lg font-bold text-gray-700" for="title">
                            *AGE: 
                        </label>

                        <div class="inline-block mr-4">
                            <label for="16" class="text-base text-lg font-medium leading-5 text-gray-700">16</label>
                            <input type="radio" id="16" name="age" value="16" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('age') == "16")
                                    ckecked
                                @endif
                        </div>
                        
                        <div class="inline-block mr-4">
                            <label for="17" class="text-base text-lg font-medium leading-5 text-gray-700">17</label>
                            <input type="radio" id="17" name="age" value="17" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('age') == "17")
                                    ckecked
                                @endif
                        </div>

                        <div class="inline-block mr-4">
                            <label for="18" class="text-base text-lg font-medium leading-5 text-gray-700">18</label>
                            <input type="radio" id="18" name="age" value="18" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('age') == "18")
                                    ckecked
                                @endif
                        </div>                          

                        @error('age')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>    

                    <!-- Club -->                
                    <div>
                        <label class="block text-lg font-bold text-gray-700" for="title">
                            *CLUB:
                        </label>

                        <select name="id_club" class="block text-lg w-full mt-1 border-orange-300 rounded-md shadow-sm placeholder:italic placeholder:text-orange-400 placeholder:text-left focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50">
                            @foreach ($clubs as $club)
                               <option value="{{ $club->id }}" {{ old('club') == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                            @endforeach
                        </select>   

                        @error('id_club')
                            <small>*{{ $message }}</small>
                            <br>            
                        @enderror
                    </div>  

                    <!-- Position --> 
                    <div>
                        <label class="inline-block mr-4 mt-2 mb-5 text-lg font-bold text-gray-700" for="title">
                            *POSITION: 
                        </label>

                        <div class="inline-block mr-4">
                            <label for="goalkeeper" class="text-base text-lg font-medium leading-5 text-gray-700">goalkeeper</label>
                            <input type="radio" id="goalkeeper" name="position" value="goalkeeper" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('position') == "goalkeeper")
                                    ckecked
                                @endif
                        </div>
                        
                        <div class="inline-block mr-4">
                            <label for="defender" class="text-base text-lg font-medium leading-5 text-gray-700">defender</label>
                            <input type="radio" id="defender" name="position" value="defender" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('position') == "defender")
                                    ckecked
                                @endif
                        </div>

                        <div class="inline-block mr-4">
                            <label for="midfielder" class="text-base text-lg font-medium leading-5 text-gray-700">midfielder</label>
                            <input type="radio" id="midfielder" name="position" value="midfielder" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('position') == "midfielder")
                                    ckecked
                                @endif
                        </div>
                            
                        <div class="inline-block mr-4">
                            <label for="forward" class="text-base text-lg font-medium leading-5 text-gray-700">forward</label>
                            <input type="radio" id="forward" name="position" value="forward" class="form-radio h-4 w-4 text-lg text-orange-700 border-orange-600 rounded-md shadow-sm transition duration-150 ease-in-out">
                                @if (old('position') == "forward")
                                    ckecked
                                @endif
                        </div> 
    
                        @error('position')
                            <br>  
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
                            <a href={{ route('players.index') }}>
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
