{{-- Layout and Meta --}}
@extends('layouts.app')
@section('title', 'All locations')
@section('content')

    {{-- Header --}}
    @include('components.headers.main')

    <div class="max-w-screen-xl mx-auto min-h-screen space-y-6 px-4">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
            {{-- Background Image --}}
            <div class="absolute inset-0">
                <img
                    src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&q=35&w=1280"
                    class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-24 leading-4">
                <h1 class="text-lg font-display tracking-tighter text-white sm:text-5xl lg:text-6xl">
                    All cities listings for remote work near a WeWork coworking
                </h1>
            </div>
        </div>

        <div>
            <h3 class="font-display text-2xl font-bold">
                Here is a select list of cities with WeWork coworking spaces
            </h3>
        </div>

        <div class="space-y-8">
            {{-- Locations Grid --}}
            <ul class="grid sm:grid-cols-3 grid-cols-2 gap-x-4 gap-y-6">
                @foreach($locations as $location)
                    <li class="border border-everglade-200 rounded-lg overflow-hidden hover:shadow-lg">
                        <a href="{{ route('listings-proximity-wework-city-show', [$location->slug]) }}"
                           class="hover:underline h-full flex items-center w-full">
                            <div class="bg-everglade-100 px-4 py-4 tracking-wide h-full w-full flex flex-col justify-center">
                                <div class="text-sm">See listings near a Wework in:</div>
                                <div class="font-semibold">{{ $location->name }}</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

    {{-- Footer --}}
    @include('components.footers.main')
@endsection
