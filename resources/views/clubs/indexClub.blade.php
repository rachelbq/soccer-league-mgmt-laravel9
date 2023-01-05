<!-- index Clubs form -->
@extends('layouts.layout')

@section('title', 'index')

@section('content')

<div class="container max-w-7xl mx-auto mt-8 bg-gradient-to-b from-gray-700 to-gray-800">
    <div class="mb-4 text-xl text-gray-400 px-4 pt-4">
        <h1>CLUBS index</h1>
        <div class="flex justify-end">
            <button class="px-4 py-2 rounded-md bg-orange-500 text-base text-gray-100 hover:bg-gray-600">
                <a href={{ route('clubs.create') }}>Add CLUB</a></button>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-top border-b border-orange-200 shadow">
                <table class="min-w-full">

                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-orange-500 uppercase border-b border-orange-200 bg-orange-50">
                                ID</th>
                            <th class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-orange-500 uppercase border-b border-orange-200 bg-orange-50">
                                CLUB</th>
                            <th class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-orange-500 uppercase border-b border-orange-200 bg-orange-50">
                                COACH</th>
                            <th class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-orange-500 uppercase border-b border-orange-200 bg-orange-50">
                                PITCH</th>
                            <th class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-orange-500 uppercase border-b border-orange-200 bg-orange-50">
                                LOCATION</th>

                            <th class="px-6 py-3 text-sm text-left text-orange-500 border-b border-orange-200 bg-orange-50 no-wrap" colspan="3">
                                ACTION</th>
                        </tr>
                    </thead>

                    @foreach ($clubs as $club)
                    <tbody class="bg-gray-100 hover:bg-orange-300">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-orange-400">
                                <div class="flex items-center"><a href={{ route('clubs.show', $club->id) }}>{{ $club->id }}</a></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-orange-400">
                                <div class="text-sm leading-5 text-gray-900"><a href={{ route('clubs.show', $club->id) }}>{{ $club->name }}</a></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-orange-400">
                                <div class="text-sm leading-5 text-gray-900"><a href={{ route('clubs.show', $club->id) }}>{{ $club->coach }}</a></div>
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-200 text-orange-400">
                                <div class="text-sm leading-5 text-gray-900"><a href={{ route('clubs.show', $club->id) }}>{{ $club->pitch }}</a></div>
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-200 text-orange-400">
                                <div class="text-sm leading-5 text-gray-900"><a href={{ route('clubs.show', $club->id) }}>{{ $club->location }}</a></div>
                            </td>

                            <!-- actions -->                            
                            <td class="text-xs font-medium leading-5 whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('clubs.edit', $club->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                <a href="{{ route('clubs.show', $club->id) }}" class="text-gray-600 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </td>

                            <!-- delete -->
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">

                                <form action="{{ route('clubs.destroy', $club )}}" method="POST">

                                    @csrf
            
                                    @method('delete')
            
                                    <button type="submit" class="px-1 py-1 mt-1 mb-1 text-sm font-semibold text-red-100 bg-red-800 rounded-md shadow-md hover:bg-red-600 focus:outline-none focus:border-red-900 focus:ring ring-red-300" onclick="return confirmation()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
            
                                </form>
                            </td>                            
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div>
    {{ $clubs->links() }}
</div>

@endsection