@extends('layouts.app')

@section('title', $wework->name . ' - Wework Location in ' . $wework->city)

@section('content')
    @include('components.headers.main')
    <div class="max-w-screen-xl mx-auto space-y-10 my-5 px-4">
        <div class="space-y-2">
            <div class="flex justify-between items-center">
                <h1 class="font-display tracking-tighter font-bold text-3xl">
                    {{ $wework->name }}
                </h1>
                <a href="{{ 'https://www.wework.com/en-GB/buildings/' . $wework->slug }}"
                   class="inline-flex items-center justify-center sm:px-5 sm:py-3 border border-transparent text-xs sm:text-base font-medium rounded-md text-white bg-everglade-700 hover:bg-everglade-800">
                    Visit this location
                </a>
            </div>

            <div>
                Wework location in
                <a href="{{ '/coworkings/wework-ranking/cities/' . $wework->city }}"
                   class="text-everglade-600 hover:underline">
                    {{ $wework->city }}, {{ $wework->country }}
                </a>
            </div>
            <div class="w-full lg:flex gap-5 space-y-2">
                {{-- Main Image --}}
                <div class="relative w-full h-[36em] sm:p-0 px-2">
                    <img src="{{ $wework->image_url }}" class="w-full h-full object-cover rounded-lg"
                         alt="{{ $wework->name }}">
                </div>
                {{--                <div class="max-w-3xl rounded-xl overflow-hidden mx-auto w-full flex-grow">--}}
                {{--                    @if(count($weworkImages))--}}
                {{--                        --}}{{-- Image gallery component --}}
                {{--                    @endif--}}
                {{--                </div>--}}
                @if($wework->sticker_image)
                    <div class="text-center mx-auto w-full flex-shrink max-w-xs">
                        <h1 class="font-display tracking-tighter text-2xl font-bold">
                            Wework Sticker for
                            <span
                                class="font-serif italic tracking-tighter text-everglade-600 font-normal"> {{ $wework->city }}</span>
                        </h1>
                        <a href="/coworkings/wework/stickers" class="mx-auto w-full">
                            <img alt="Wework Sticker for {{ $wework->city }}" src="{{ $wework->sticker_image }}"
                                 class="w-full max-w-xs lg:h-80 h-64 object-contain mx-auto"/>
                        </a>
                    </div>
                @endif
            </div>
        </div>


        {{-- WeworkFeatures component --}}
        <div class="space-y-2 sm:flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold font-display tracking-tighter">
                    Where is this Wework located?
                </h2>
                <div
                    class="flex items-center gap-4 hover:bg-gray-100 cursor-pointer font-display tracking-tighter text-everglade-700 font-medium px-5 py-3 rounded-lg shadow max-w-md flex justify-between gap-2"
                    onclick="navigator.clipboard.writeText('{{ $wework->address }}')">
                    <div>
                        <span class="font-bold tracking-tighter">Street address:</span><br/>
                        <span class="text-sm text-black">{{ $wework->address }}</span>
                    </div>
                    {{-- ClipboardIcon --}}
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-everglade-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <a href="https://discord.gg/FnArQGq5EN"
               class="w-full max-w-md rounded-2xl pt-16 pb-3 px-5 bg-everglade-600 hover:bg-everglade-500 cursor-pointer flex justify-between items-end">
                <div class="">
                    <h3 class="text-white font-serif tracking-tighter italic font-medium text-3xl">
                        Are you a remote worker?
                    </h3>
                    <div
                        class="font-medium text-lg font-display tracking-tighter hover:underline text-white hover:text-black transition ease-in-out duration-150">
                        Join a club of Nomads
                    </div>
                </div>
                <div class="w-10 flex items-center text-center h-10 rounded bg-white">
                    <div class="w-full" aria-hidden="true">&rarr;</div>
                </div>
            </a>
        </div>

        <div class="rounded-lg w-full overflow-hidden space-y-4">
            {{-- Conditionally display map and listings --}}
            <div class="rounded-lg w-full overflow-hidden space-y-4">
                @if(env('APP_ENV') === 'dev')
                    <div class="w-full sm:h-80 bg-everglade-200"></div>
                @else
                    <div class="lg:flex">
                        {{-- Display the map with location --}}
                        {{-- Assuming you have a component or an inclusion for the map, replace this with the actual map display logic --}}
<x-mapbox id="map" class="w-full h-80"/>

{{--                        <x-mapbox--}}
{{--                            id="map"--}}
{{--                            class="hellomap"--}}
{{--                            style="height: 500px; width: 500px;"--}}
{{--                            mapStyle="mapbox/navigation-night-v1"--}}
{{--                            :center="['long' => 8, 'lat' => 10]"--}}
{{--                            :navigationControls="true"--}}
{{--                            :interactive="false"--}}
{{--                            :markers="[['long' => 8, 'lat' => 10,'description' => 'helloworld'], ['long' => 9, 'lat' => 10]]"/>--}}

{{--                        @include('components.LocationMap', ['location' => $wework, 'closeListings' => $closeListings])--}}

                        {{-- Check if there are nearby listings --}}
                        @if($closeListings->count() > 0)
                            <div class="lg:max-w-lg w-full sm:p-2 space-y-2">
                                <h2 class="font-bold text-xl font-display">Find an apartment near this Wework</h2>
                                <div class="divide-y border shadow rounded max-h-[500px] overflow-y-scroll">
                                    {{-- Loop through the listings and display them --}}
                                    @foreach($closeListings as $listing)
                                        <a href="{{ '/listings/' . $listing->id }}"
                                           class="p-4 justify-between h-20 flex gap-2 items-center hover:bg-gray-50">
                                            <div class="space-y-2 text-center w-12 flex flex-col items-center text-xs">
                                                {{-- Home icon representation --}}
                                                <span class="h-7 w-7 text-everglade-600">
                                                        <svg version="1.1" id="Layer_1"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 400 400"
                                                             style="enable-background: new 0 0 400 400"
                                                             xml:space="preserve" class="h-8">
                                                            <polygon
                                                                points="365.7,165.7 200,0 200,0 200,0 34.3,165.7 34.3,165.7 34.3,165.7 34.3,165.7 34.3,165.7 34.3,400 68.4,400,68.4,180.9 200,49.3 331.6,180.9 331.6,400 365.7,400"/>
                                                        </svg>
                                                </span>
                                                <p class="text-xs">{{ $listing->distanceFormatted }}</p>
                                            </div>
                                            <div class="flex flex-col flex-grow">
                                                <h5 class="font-display font-medium leading-5 tracking-tight">{{ $listing->title }}</h5>
                                                <p class="font-display text-sm text-everglade-700 tracking-tight">{{ $listing->location }}</p>
                                            </div>
                                            <div>
                                                {{-- Right arrow icon representation --}}
                                                <span class="h-7 w-7 text-everglade-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                                    </svg>
                                                </span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            </div>

        </div>
    </div>
    <div class="max-w-screen-xl mx-auto rounded-2xl overflow-hidden">
        <div class="bg-everglade-100">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-28 lg:flex lg:items-center lg:justify-between lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 max-w-lg">
                    Looking for a place to stay?
                    <br>
                    <span class="text-xl text-everglade-600">Explore locations built for remote workers</span>
                </h2>
                <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:flex-shrink-0">
                    <a href="{{ route('listings') }}"
                       class="rounded-md bg-everglade-600 px-3.5 py-1.5 text-sm font-semibold leading-7 text-white shadow-sm hover:bg-everglade-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-everglade-600">
                        Explore locations
                    </a>
                    <a href="/"
                       class="text-sm font-semibold leading-7 text-gray-900">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('components.footers.main')
@endsection
