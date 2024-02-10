@extends('layouts.app')
@section('title', 'All Nomad Listings')

<div>
    @include('components.headers.main')
    <div class="max-w-screen-xl mx-auto space-y-5" x-data="{ amenitiesDialogOpen: false }">

        <div class="space-y-2">
            <div class="space-y-2 w-full justify-between sm:p-0 px-2 grid grid-cols-2">
                <h1
                    class="font-display tracking-tighter text-lg sm:text-xl col-span-1">Modern Paradise with Pool across
                    8
                    Secluded Acres</h1>
                <div class="col-span-1 flex justify-end">
                    <div class="font-display tracking-tighter flex items-center gap-2 text-sm justify-end">Nomad
                        Validated
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex justify-between w-full">
                <a class="flex items-center gap-x-1 text-gray-400"
                   href="/listings/locations/kingston">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-4 h-4 text-everglade-600">
                        <path fill-rule="evenodd"
                              d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    <h4 class="text-xs font-display uppercase font-bold">Kingston, New York, United States</h4>
                </a>
                <div class="font-display tracking-tighter text-3xl font-medium sm:p-0 px-2">
                    ${{ $listing->latest_price?->price_per_night }}
                    <span
                        class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">/ night</span>
                </div>
            </div>
        </div>
        {{-- Main Image   --}}
        <div class="relative w-full h-[36em] sm:p-0 px-2">
            <img src="{{$listing?->mainListingImage?->url}}" class="w-full h-full object-cover rounded-lg" alt="">
        </div>

        <div id="descriptionContainer" class="max-h-40 overflow-hidden">
            <div class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                Description<span class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">Why is this stay fit for a remote worker</span>
            </div>
            <p class="text-gray-500 sm:p-0 px-2">
                {!! $listing->description !!}
            </p>
        </div>
        <div class="flex w-full">
            <button id="showMoreButton"
                    class="inline-flex justify-center text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 mx-auto px-5 py-3 rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                Show more
            </button>
        </div>

        <div class="">
            <div class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                Amenities<span class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">The essentials for a remote worker</span>
            </div>
            <div class="my-4 font-display tracking-tighter grid sm:grid-cols-4 grid-cols-2 gap-x-2 gap-y-2 sm:p-0 px-2">
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    High Speed Wifi
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Ergonomic Office chair
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Standing Desk
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    HD Webcam
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Green screen
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    4k Monitor
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Mechanical Keyboard
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Wireless multitask mouse
                </div>
                <div
                    class="text-sm shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-2 py-3 text-base flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-everglade-600 h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    Microphone
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button x-on:click="amenitiesDialogOpen = true"
                    class="focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                See all amenities
            </button>
        </div>
        <div>
            <div class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                Sleeping<span class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">Rooms and beds</span>
            </div>
            <div class="my-4 max-w-3xl font-serif tracking-tighter grid grid-cols-2 gap-x-5 gap-y-2 sm:p-0 px-2">
                <div
                    class="text-sm sm:text-lg shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-5 py-5 text-base">
                    <div class="text-lg font-display">Bedroom 1</div>
                    <div class="text-sm italic text-everglade-700">1 Double Bed</div>
                </div>
                <div
                    class="text-sm sm:text-lg shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-5 py-5 text-base">
                    <div class="text-lg font-display">Bedroom 2</div>
                    <div class="text-sm italic text-everglade-700">1 Single Bed</div>
                </div>
            </div>
        </div>
        <div class="w-max max-w-xs sm:max-w-sm md:max-w-lg lg:max-w-screen-xl mx-auto overflow-hidden">
            <div class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                Photos of this location
            </div>
            <div id="photoContainer" class="max-h-64 overflow-hidden rounded-3xl">
                <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 w-full mx-auto gap-1">
                    @foreach($listing->listingImages as $image)
                        <div class="relative w-full h-40 sm:h-60 md:h-80 lg:h-96">
                            <img src="{{$image->url}}" class="w-full h-full object-cover rounded-lg" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-center py-4">
                <button id="seeMoreButton"
                        class="inline-flex justify-center text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 mx-auto px-5 py-3 rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                    See more photos
                </button>
            </div>
        </div>

        <div class="bg-white">
            <div class="max-w-7xl mx-auto text-center pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl sm:tracking-tight font-display space-y-3">
                    <span class="block">Do you think you can work here?</span>
                    <span
                        class="block text-lg font-normal sm:text-2xl italReserve with a coworking space text-everglade-600 font-serif tracking-tighter">Check out the listing below</span>
                </h2>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <button
                            class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                            Reserve this location with Airbnb
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footers.main')
    </div>
</div>


@push('js')
    <script>
        const descriptionContainer = document.getElementById('descriptionContainer');
        const showMoreButton = document.getElementById('showMoreButton');

        showMoreButton.addEventListener('click', function () {
            if (descriptionContainer.classList.contains('max-h-40')) {
                descriptionContainer.classList.remove('max-h-40');
                showMoreButton.textContent = 'Collapse';

            } else {
                descriptionContainer.classList.add('max-h-40');
                showMoreButton.textContent = 'Show more';

            }
        });
    </script>

    <script>
        const photoContainer = document.getElementById('photoContainer');
        const seeMoreButton = document.getElementById('seeMoreButton');

        seeMoreButton.addEventListener('click', function () {
            if (photoContainer.classList.contains('max-h-64')) {
                photoContainer.classList.remove('max-h-64');
                seeMoreButton.textContent = 'Collapse';

            } else {
                photoContainer.classList.add('max-h-64');
                seeMoreButton.textContent = 'See more photos';

            }
        });
    </script>
@endpush
