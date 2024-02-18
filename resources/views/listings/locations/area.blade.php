@extends('layouts.app')
@section('title', 'All Countries with remote work accommodations in ' . ucwords(str_replace('-', ' ', $area)))

<div>
    @include('components.headers.main')

    <div class="max-w-screen-xl mx-auto px-4 sm:px-0">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto mb-10">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover"
                     src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&q=35&w=1280"
                     alt="">
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-24 sm:py-32 leading-4">
                <h1 class="text-xl font-display font-bold text-white sm:text-2xl lg:text-3xl">
                    Stays for remote work in <br>
                    <span class="text-xl font-normal">{{ ucwords(str_replace('-', ' ', $area)) }}</span>
                </h1>
            </div>
            <div class="z-20 bottom-4 left-6 space-y-2">
                <h3 class="text-white text-lg font-semibold">Find remote work accommodations in:</h3>
                <div class="flex flex-wrap items-center gap-2 max-w-lg md:max-w-full">
                    <a href="{{ route('listings-locations-area', ['europe']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        Europe
                    </a>
                    <a href="{{ route('listings-locations-area', ['north-america']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        North America
                    </a>
                    <a href="{{ route('listings-locations-area', ['south-america']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        South America
                    </a>
                    <a href="{{ route('listings-locations-area', ['africa']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        Africa
                    </a>
                    <a href="{{ route('listings-locations-area', ['oceania']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        Oceania
                    </a>
                    <a href="{{ route('listings-locations-area', ['asia']) }}"
                       class="bg-everglade-100 rounded-full px-4 py-2 text-sm font-semibold text-everglade-600">
                        Asia
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto px-4 sm:px-0">
        <ul class="grid sm:grid-cols-3 grid-cols-2 gap-x-4 gap-y-6 max-w-screen-xl mx-auto my-10">
            @foreach ($locations as $index => $country)
                <li class="border border-everglade-200 rounded-lg overflow-hidden hover:shadow-lg">
                    <a href="{{ route('listings-locations-country', [$country]) }}"
                       class="hover:underline h-full flex items-center w-full bg-everglade-100 px-4 py-4 gap-4">
                        <x-icon name="flag-country-{{ strtolower($country->code) }}" width="40" height="40"/>
                        <div
                            class="tracking-wide h-full w-full flex flex-col justify-center">
                            <div class="text-sm">See all remote work listings in:</div>
                            <div class="font-semibold">{{ $country->name }}</div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    @include('components.footers.main')
</div>
