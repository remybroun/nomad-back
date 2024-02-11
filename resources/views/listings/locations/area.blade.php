@extends('layouts.app')
@section('title', 'All Countries with remote work accommodations in ' . ucwords(str_replace('-', ' ', $area)))

<div>
    @include('components.headers.main')

    <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:px-0">
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
        </div>
    </div>

    <ul class="grid sm:grid-cols-3 grid-cols-2 gap-10 max-w-screen-xl mx-auto my-10">
        @foreach ($locations as $index => $country)
            <li class="text-everglade-600">
                <div class="font-medium text-base uppercase font-display">
                    <a href="/listings/locations/countries/{{ strtolower($country) }}" class="hover:underline">
                        All listings in <strong>{{ $country }}</strong>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>

    @include('components.footers.main')
</div>
