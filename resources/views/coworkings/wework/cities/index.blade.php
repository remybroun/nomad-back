{{-- Layout and Meta --}}
@extends('layouts.app')

@section('content')
    <head>
        <title>All locations</title>
        <meta property="og:title" content="My page title" key="title"/>
    </head>

    {{-- Header --}}
    @include('components.headers.main')

    <div class="max-w-screen-xl mx-auto min-h-screen space-y-6 px-4 w-full">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
            {{-- Background Image --}}
            <div class="absolute inset-0">
                <img
                    src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&q=35&w=1280"
                    class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-24 leading-4">
                <h1 class="text-xl font-display font-bold text-white sm:text-2xl lg:text-3xl">
                    All cities with a WeWork
                </h1>
            </div>
        </div>

        <div>
            <div class="font-display text-2xl font-bold">Where do you want to work remotely from?</div>
        </div>


        <div class="space-y-8">
            {{-- Locations Grid --}}
            <ul class="grid sm:grid-cols-3 grid-cols-2 gap-x-4 gap-y-6">
                @foreach($cities as $location)
                    <li class="border border-everglade-200 rounded-lg overflow-hidden hover:shadow-lg">
                        <a href="{{ route('listings-locations-show', [$location->slug]) }}"
                           class="hover:underline h-full flex items-center w-full bg-everglade-100 sm:p-4 p-2 gap-2 sm:gap-4">
                            <x-icon name="flag-country-{{ strtolower($location->country->code) }}" width="40"
                                    height="40"/>
                            <div
                                class="tracking-wide h-full w-full flex flex-col justify-center">
                                <div class="sm:text-sm text-xs leading-4">See all remote work listings in:</div>
                                <div class="font-semibold sm:text-lg text-sm">{{ $location->name }}</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="mx-auto flex w-full justify-between">
                {{$cities->links()}}
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('components.footers.main')
@endsection
