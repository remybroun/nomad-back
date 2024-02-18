@extends('layouts.app')
@section('title', 'All Nomad Listings')

<div>
    @include('components.headers.main')
    <div class="max-w-screen-xl mx-auto space-y-5 px-4 xl:px-0" x-data="{ amenitiesDialogOpen: false }">

        <div class="space-y-2">
            <div class="space-y-2 w-full justify-between sm:p-0 px-2 grid grid-cols-2">
                <h1
                    class="font-display tracking-tighter text-lg sm:text-xl col-span-1">{{$listing->title}}</h1>
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
            <img
                src="{{Str::replace('w=720', 'w=1920',$listing?->mainListingImage?->url) ?: asset('images/round-logo.png')}}"
                class="w-full h-full object-cover rounded-lg" alt="">
        </div>

        <div id="descriptionContainer" class="max-h-40 overflow-hidden max-w-screen-xl">
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
            <div class="my-4 max-w-screen-xl font-serif tracking-tighter grid grid-cols-3 gap-x-5 gap-y-2 sm:p-0 px-2">
                @if(count($listing->arrangements ?? []) > 0)
                    @foreach($listing?->arrangements as $room)
                        <div
                            class="text-sm sm:text-lg shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-5 py-5 text-base">
                            <div class="text-lg font-display">{{ $room['title'] }}</div>
                            <div class="text-sm italic text-everglade-700">{{ $room['subtitle'] }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div x-data="photoGallery()"
             class="w-full max-w-none md:max-w-lg lg:max-w-screen-xl px-4 mx-auto overflow-hidden">
            <div class="text-2xl font-medium gap-2 flex items-baseline mt-10 sm:p-0 px-2">
                Photos of this location
            </div>
            <div id="photoContainer" class="max-h-64 overflow-hidden rounded-3xl">
                <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-1">
                    <template x-for="(image, index) in images" :key="index">
                        <div class="relative w-full h-40 sm:h-60 md:h-80 lg:h-96">
                            <img x-bind:src="image.url" @click="openModal(index)"
                                 class="w-full h-full object-cover rounded-lg cursor-pointer" alt="">
                        </div>
                    </template>
                </div>
            </div>
            <div x-show="modalOpen" @click.away="closeModal()"
                 class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4">
                <div class="bg-white rounded-lg max-w-5xl mx-auto" x-show="modalOpen" @click.away="closeModal()">
                    <div class="relative">
                        <!-- Carousel Controls -->
                        <button @click="prevPhoto()"
                                class="absolute top-1/2 left-4 transform -translate-y-1/2 px-4 py-2 bg-everglade-600 text-white rounded-lg flex items-center justify-center">
                            <!-- Left Arrow SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button @click="nextPhoto()"
                                class="absolute top-1/2 right-4 transform -translate-y-1/2 px-4 py-2 bg-everglade-600 text-white rounded-lg flex items-center justify-center">
                            <!-- Right Arrow SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                        <button @click="closeModal()"
                                class="absolute bottom-4 right-4 px-5 py-2 bg-white text-black rounded-lg">
                            Close
                        </button>

                        <!-- Photo -->
                        <img x-bind:src="images[activePhoto].url" class="w-full h-full object-cover rounded-lg" alt="">
                    </div>
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
                        <a
                            href="{{$listing?->external_url}}"
                            target="_blank"
                            class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                            Reserve this location with Airbnb
                        </a>
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

    <script>
        function photoGallery() {
            return {
                images: @json($listing->listingImages),
                modalOpen: false,
                activePhoto: 0,
                openModal(index) {
                    this.activePhoto = index;
                    this.modalOpen = true;
                },
                closeModal() {
                    this.modalOpen = false;
                },
                nextPhoto() {
                    this.activePhoto = (this.activePhoto + 1) % this.images.length;
                },
                prevPhoto() {
                    this.activePhoto = (this.activePhoto + this.images.length - 1) % this.images.length;
                },
            }
        }
    </script>
@endpush
