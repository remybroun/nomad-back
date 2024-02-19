@extends('layouts.app')
@section('title', 'All Listings for remote work in near a WeWork Coworking')

<body>
@include('components.headers.main')
<div class="container mx-auto space-y-10">
    <div class="relative bg-indigo-400 rounded-lg overflow-hidden max-w-screen-xl mx-auto">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                 src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/99a6b259101577.5a3e1fcab5fd1.webp"
                 alt=""/>
            <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative px-16 py-16 sm:py-32 leading-4">
            <h1 class="text-xl font-display text-white">
                Stays for remote work near a <br>
                <span class="font-bold text-3xl">WeWork</span>
            </h1>
        </div>
    </div>
    <div class="space-y-2 max-w-screen-xl mx-auto">
        <h3 class="font-display font-bold text-2xl">Cities with Wework Locations</h3>
        <div class="flex flex-wrap gap-1">
            @foreach ($locations as $location)
                <a href="{{ route('listings-proximity-wework-city-show', [$location->slug]) }}"
                   class="bg-everglade-600 text-white sm:text-sm text-xs py-1 px-2 rounded-md">{{ $location->name }}</a>
            @endforeach
            <a href="{{ route('listings-proximity-wework-city-all') }}"
               class="bg-everglade-600 text-white sm:text-sm text-xs py-1 px-2 rounded-md">See all cities &rarr;</a>
        </div>
    </div>
    <div class="space-y-2 max-w-screen-xl mx-auto">
        <h3 class="font-display text-xl leading-10">
            <span class="text-3xl font-bold">Need inspiration?</span> <br>
            Here are some listings near a WeWork coworking space
        </h3>
        @if ($randomListings->count() > 0)
            <div class="mt-4">
                @include('components.listingGrid', ['listings' => $randomListings])
            </div>
        @else
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 max-w-3xl mx-auto mt-10">
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            No listings available
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                There are no listings available for {{ $country->name }}. Check again soon, or select a
                                different country
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@include('components.footers.main')
</body>
