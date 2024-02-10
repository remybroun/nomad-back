{{-- Layout and Meta --}}
@extends('layouts.app')

@section('content')
    <head>
        <title>All locations</title>
        <meta property="og:title" content="My page title" key="title"/>
    </head>

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
                <h1 class="text-4xl font-display tracking-tighter text-white sm:text-5xl lg:text-6xl">
                    All locations
                </h1>
            </div>
        </div>

        <div>
            <div class="font-display text-2xl font-bold">Where do you want to work remotely from?</div>
        </div>


        <div class="space-y-8">
            {{-- Locations Grid --}}
            <ul class="grid sm:grid-cols-3 grid-cols-2 gap-x-4 gap-y-6">
                @foreach($locations as $location)
                    <li class="border border-everglade-200 rounded-lg overflow-hidden hover:shadow-lg">
                        <a href="#"
                           class="hover:underline h-full flex items-center w-full">
                            <div
                                class="bg-everglade-100 px-4 py-4 tracking-wide h-full w-full flex flex-col justify-center">
                                <div class="text-sm">See all Coworkings listings in:</div>
                                <div class="font-semibold">{{ $location->city }}</div>
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
