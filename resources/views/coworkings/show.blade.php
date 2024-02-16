@extends('layouts.app')
@section('title', 'All Coworking Spaces')
@section('content')

    <div>
        @include('components.headers.main')
        <div class="max-w-screen-xl mx-auto space-y-5 px-4 xl:px-0">

            <div class="">
                <div class="space-y-2 w-full justify-between sm:p-0 px-2 grid grid-cols-2">
                    <h1 class="font-display tracking-tighter text-lg sm:text-2xl col-span-1">{{ $coworking->name }}</h1>
                    <div class="col-span-1 flex justify-end">
                        <a href="{{ $coworking->url }}" target="_blank" class="flex items-center gap-x-1 text-gray-400">
                            <h4 class=" font-display bg-everglade-500 px-4 py-2 text-white rounded-xl">Visit Website
                                &rarr;</h4>
                        </a>
                    </div>
                </div>
                <div class="flex justify-between w-full">
                    <h4 class="text-lg font-display ">
                        Coworking Space in
                        {{ $coworking->city }}, {{ $coworking->country }}
                    </h4>
                </div>
            </div>
            {{-- Main Image --}}
            <div class="relative w-full h-[36em] sm:p-0 px-2">
                <img src="{{ $coworking->image_url }}" class="w-full h-full object-cover rounded-lg"
                     alt="{{ $coworking->name }}">
            </div>


            {{-- Amenities Section (Example) --}}
            <div class="">
                <div
                    class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                    Amenities<span class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">Everything you need to work efficiently</span>
                </div>
                <div
                    class="my-4 font-display tracking-tighter grid sm:grid-cols-4 grid-cols-2 gap-x-2 gap-y-2 sm:p-0 px-2">
                    <!-- Example Amenities -->
                    <div
                        class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                        High Speed Wifi
                    </div>
                    <div
                        class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                        Dedicated Desks
                    </div>
                    <div
                        class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                        Private Offices
                    </div>
                    <div
                        class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                        Meeting Rooms
                    </div>
                    <!-- Add more amenities as needed -->
                </div>
            </div>

            <div class="bg-white">
                <div class="max-w-7xl mx-auto text-center pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl sm:tracking-tight font-display space-y-3">
                        <span class="block">Looking for a good place to work in {{ $coworking->city }}?</span>
                        <a href="{{ route('coworkings-by-city', $coworking->city) }}"
                           class="block text-lg font-normal sm:text-2xl italics text-everglade-600 font-serif tracking-tighter">
                            Discover the best coworking spaces in {{ $coworking->city }}, {{ $coworking->country }}
                        </a>
                    </h2>
                </div>
            </div>

            @include('components.footers.main')
        </div>
    </div>

@endsection
