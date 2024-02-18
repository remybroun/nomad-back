@extends('layouts.app')
@section('title', 'All Nomad Listings')


<main class="w-full mx-auto">
    @include('components.headers.main')
    <div class="lg:py-20 lg:grid lg:grid-cols-4 lg:max-w-screen-xl mx-auto gap-10 lg:h-[70vh]">
        <img alt="nomad office" src="https://i.pinimg.com/564x/ed/8d/58/ed8d5864eb043eeed62071d77d8c3887.jpg"
             decoding="async" data-nimg="future"
             class="sm:hidden object-cover mx-auto px-5 col-span-1 sm:p-0 sm:max-h-max max-h-64 w-full">
        <div class="hidden sm:flex col-span-2 h-full w-full max-h-[450px] md:max-h-[600] overflow-hidden">
            <div class=" overflow-hidden flex items-center h-full w-full relative rotate-90">
                <div class="animate-marquee whitespace-nowrap ">
                    <!-- Listing 1: Kingston, New York, USA -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/174"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Kingston, New York, USA"
                                     src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-660253929782506827/original/6a87081d-e6d4-4301-9e2e-5d09b2ac39e6.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Kingston, New York, United States</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 2: Napoli, Campania, Italy -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/254"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Napoli, Campania, Italy"
                                     src="https://a0.muscache.com/im/pictures/9c62d393-12c2-493e-8cae-ed3294733c85.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Napoli, Campania, Italy</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Additional listings would follow the same pattern -->
                    <!-- Listing 3: New York, New York, United States -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/258"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="New York, New York, United States"
                                     src="https://a0.muscache.com/im/pictures/miso/Hosting-47991737/original/ba417097-30aa-4ae4-87cc-8916c6ebb426.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    New York, New York, United States</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 4: Medellín, Antioquia, Colombia -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/521"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Medellín, Antioquia, Colombia"
                                     src="https://a0.muscache.com/im/pictures/3f84b40a-34ee-45a2-bb5b-5e7234729c49.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Medellín, Antioquia, Colombia</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 5: Mexico City, Ciudad de México, Mexico -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/608"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Mexico City, Ciudad de México, Mexico"
                                     src="https://a0.muscache.com/im/pictures/fcdb25a2-b3a8-42b8-9dba-76fee1d58d19.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Mexico City, Ciudad de México, Mexico</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 6: Tulum, Quintana Roo, Mexico -->
                    <div class="inline-block -rotate-90 py-10">
                        <a href="/listings/622"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Tulum, Quintana Roo, Mexico"
                                     src="https://a0.muscache.com/im/pictures/miso/Hosting-47091025/original/5fea364b-0d4e-49f4-b386-e919b72569fa.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Tulum, Quintana Roo, Mexico</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Continue with additional listings as needed -->
                </div>
            </div>


            <div class=" overflow-hidden flex items-center h-full w-full relative -rotate-90">
                <div class="animate-marquee whitespace-nowrap ">
                    <!-- Listing 1: Kingston, New York, USA -->
                    <!-- Tulum, Quintana Roo, Mexico -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/622"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Tulum, Quintana Roo, Mexico"
                                     src="https://a0.muscache.com/im/pictures/miso/Hosting-47091025/original/5fea364b-0d4e-49f4-b386-e919b72569fa.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Tulum, Quintana Roo, Mexico</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Mexico City, Ciudad de México, Mexico -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/657"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Mexico City, Ciudad de México, Mexico"
                                     src="https://a0.muscache.com/im/pictures/70f15ceb-49f1-4f23-ab61-d711f9a09b57.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Mexico City, Ciudad de México, Mexico</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Barcelona, Catalunya, Spain -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/1543"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Barcelona, Catalunya, Spain"
                                     src="https://a0.muscache.com/im/pictures/miso/Hosting-812959360329830809/original/5cc6f191-bfa7-420a-9892-1d5b3fe4a98d.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Barcelona, Catalunya, Spain</h3>
                            </div>
                        </a>
                    </div>

                    <!-- Listing 4: Medellín, Antioquia, Colombia -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/521"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Medellín, Antioquia, Colombia"
                                     src="https://a0.muscache.com/im/pictures/3f84b40a-34ee-45a2-bb5b-5e7234729c49.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Medellín, Antioquia, Colombia</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 5: Mexico City, Ciudad de México, Mexico -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/608"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Mexico City, Ciudad de México, Mexico"
                                     src="https://a0.muscache.com/im/pictures/fcdb25a2-b3a8-42b8-9dba-76fee1d58d19.jpg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Mexico City, Ciudad de México, Mexico</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Listing 6: Tulum, Quintana Roo, Mexico -->
                    <div class="inline-block rotate-90 py-10">
                        <a href="/listings/622"
                           class="block p-2 shadow-lg hover:shadow-xl rounded-lg bg-white w-64">
                            <div class="flex-shrink-0">
                                <img alt="Tulum, Quintana Roo, Mexico"
                                     src="https://a0.muscache.com/im/pictures/miso/Hosting-47091025/original/5fea364b-0d4e-49f4-b386-e919b72569fa.jpeg?im_w=480"
                                     width="1000" height="1000" decoding="async"
                                     class="sm:h-[140px] w-full object-cover rounded-lg"
                                     loading="lazy">
                            </div>
                            <div class="flex-1 py-2 flex flex-col justify-between pt-2">
                                <h3 class="text-xs font-display tracking-tight line-clamp-1 text-gray-900 font-serif tracking-tight leading-3 w-full line-clamp-2">
                                    Tulum, Quintana Roo, Mexico</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Continue with additional listings as needed -->
                </div>
            </div>
        </div>

        <div class="sm:my-5 my-4 lg:my-0 lg:col-span-2 lg:px-12 px-5 items-center mx-auto lg:flex">
            <div>
                <h1 class="font-display text-4xl tracking-tight font-base text-black sm:text-5xl leading-10">
                    <span class="sr-only">Nomad Stay - </span>Find stays equipped for <span
                        class="font-display font-black">remote workers.</span>
                </h1>
                <div
                    class="sm:mt-4 mt-4 sm:space-y-6 space-y-4 font-display text-lg sm:text-xl tracking-tight text-black text-justify">
                    <div class="grid xl:grid-cols-2 gap-x-4 gap-y-1 text-xs sm:text-sm">
                        <div class="flex gap-1 items-center">
                            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 text-everglade-600">
                                <path d="M5 13l4 4L19 7" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <div>Housing equipped for <span class="font-bold">remote workers</span>
                            </div>
                        </div>
                        <div class="flex gap-1 items-center">
                            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 text-everglade-600">
                                <path d="M5 13l4 4L19 7" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <div>
                                <span class="font-bold">High Speed</span> Wifi
                            </div>
                        </div>
                        <div class="flex gap-1 items-center">
                            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 text-everglade-600">
                                <path d="M5 13l4 4L19 7" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <div>
                                <span class="font-bold">World-class</span> locations
                            </div>
                        </div>
                        <div class="flex gap-1 items-center">
                            <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 text-everglade-600">
                                <path d="M5 13l4 4L19 7" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <div>No more problems being <span class="font-bold">productive</span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="font-display">
                            <div class="relative mt-1">
                                <div
                                    class="relative w-full cursor-default bg-white border-2 border-everglade-400 rounded-full text-left focus:outline-none sm:text-sm">
                                    <button class="absolute inset-y-0 left-2 flex items-center pl-2"
                                            id="headlessui-combobox-button-3" type="button" tabindex="-1"
                                            aria-haspopup="listbox" aria-expanded="false" data-headlessui-state="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                             aria-hidden="true" class="h-5 w-5 text-gray-400">
                                            <path fill-rule="evenodd"
                                                  d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                                  clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </button>
                                    <input type="text"
                                           class="w-full py-2 font-display font-medium pl-12 text-sm leading-9 text-gray-900 focus:ring-0 rounded-full"
                                           placeholder="Enter a city, region or country"
                                           id="headlessui-combobox-input-4" role="combobox" aria-expanded="false"
                                           aria-autocomplete="list" data-headlessui-state="" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-3">
                        <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 bg-everglade-500 flex items-center gap-1 text-xs sm:text-base"
                           href="{{ route('listings-locations-proximity-wework') }}">
                            Browse locations near a Wework
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="sm:w-6 w-5 sm:h-6 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z">
                                </path>
                            </svg>
                        </a>
                        <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 bg-everglade-500 flex items-center gap-1 text-xs sm:text-base"
                           href="/listings/locations">Browse all locations
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="sm:w-6 w-5 sm:h-6 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-2 sm:mx-auto space-y-10">
        <h2 class="font-serif tracking-tight sm:text-3xl text-2xl">Find a place to work remotely</h2>
        <ul class="max-w-screen-xl mx-auto grid grid-cols-1 gap-x-2 gap-y-2 sm:gap-5 md:grid-cols-4">
            <li class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl locations sm:shadow-sm rounded-3xl hover:bg-gray-50 duration-300">
                <a href="/listings/locations/area/europe" class="block mt-2 relative">
                    <div class="flex-shrink-0">
                        <div class="hidden sm:block md:h-56 h-48 md:w-56 w-48 mx-auto">
                            <svg id="europe_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                 viewBox="0 0 380 380" style="enable-background:new 0 0 400 400" xml:space="preserve"
                                 class="w-full">
					<style>.europe_svg__st0 {
                            fill: #ccc;
                            stroke: #fff;
                            stroke-width: .5
                        }</style>
                                <path id="europe_svg__NL" class="europe_svg__st0"
                                      d="m163 231.9-1.6 1.4-2.4-.3-.5-1.1h4.5zm-1.5-2.9.6.8-1.9-.5 1.3-.3zm4.8-11.1-1 .3 1-1.3v1zm-3.3 14-4-1.3 4.2.6-1.6-2.7 2.7-4.2 1.4-5.3 6.5-4 3.8-.3 1.9 1.3-.8 5.3-1.6.3.2 1.3 1.4.6-1.6 2.6.3 1-4.3 1.4 1.3 2.9-.3 2.4-1.4 1 1.1 1-.3 1.3-1.9-.6.6-1.3.2-.5-3.8-3.4-4 .6zm5.5-16.6h-.6l2.1-.3-1.5.3z">
                                </path>
                                <path id="europe_svg__CY" class="europe_svg__st0"
                                      d="m317.2 343.7-2.7 1.9.5 1.9-1.8.2-3.5 2.6-2.9-1-.6-1.4-.2-.9 2.9-.6.3-1.3 3.4.2 4.6-1.6z">
                                </path>
                                <path id="europe_svg__UA" class="europe_svg__st0"
                                      d="m336.4 265.5-3.4.2-3.8 2.7-4.9.6-4.2 3.8 1.3-1.3-.3-1.1-1.9 1.9 1 3.5 2.2 2.7 5.7-.6-1 2.4-4.6-.3-7.2 4.8-3.2-1 .5-3.8-5.3-2.2 5.9-4-.3-1.1-5.7.2-3.4-1.4 1-1.1-2.4-1 4.2.6 1.1-1.1-2.7-.2-1.4-4.3.6 4.2-1.8-.2.2-.8-.8 1.1-3 .6-2.9 5.1-3 1.1.5 3.4-1.6-1.1-3.4 1.3-2.7-1.6 1.4-.5 2.2-3.8v-3l5.9.3-1.3-3-1.6-1-.2-2.2-2.1-1.6V259l-8-4-4.8 1.6-1.6.5-.8 1.6-6.1 2.1-2.1-1.6-7-1.1-1.6 1.1-3.8-3.5 2.1-5.1h1.6l-.8-4.3 7-7.3v-2.7l-2.6-5.3 3.8-2.9 7.2-.5 6.9 1.4 2.9 2.2 2.4-1.1 2.7 1.4 1.9-1.6 1.3 2.1 4.2-.8 1.9 1.8 1.1-5.1 1.6-1.4 3.5-.2 1.8.5 1.6-2.1 6.7-.3 3.4 4.6-1.4.8.5 3.5 4.3.5 1.4 1.4 1.3 5.3 2.7-.3 2.6 1.6 4.2-1.6 3.2 4 1.1-1.1 9.3 3.8.2 2.6-2.1 1.9 1.6 1.4-1.1.2-.8 1.6 1.6 2.6-1 2.9-4.5.3-2.7 1.9-.4 3.2zm-31.7 6.5.6.3-3.2-1.6 2.6 1.3z">
                                </path>
                                <path id="europe_svg__TR" class="europe_svg__st0"
                                      d="m284.3 302 1 2.9 4.3 2.2-.5 1.4-7.5.3-6.5 6.1.3-1.6 2.7-2.1-3.5.2-.3-.8 3-4.6-1.6-2.1 1.4-1.8 3.2-1 1.4 1.1 2.6-.2zm68.8 3.2 4.9.5 1.4-1 3.5 3.2 1.4 2.6-.8 1.6.5 2.4 3.2.6 2.4 2.2.3.3-1.1-.8-1 2.2-1.9.3 2.2 6.9-1.1 2.8 1.9 1.3 1 3.7-2.4 1.1-.8-2.1-6.9-.5-2.1 1.8-.8-1.3-3.5 1.3h-4.2l-6.9 2.7-5.9-1.4-3.8 1.6-4-1-.2 3.7-2.6 2.6-1.1-.5-.5-2.6 1.9-2.2-.6-1.6-3.4 2.1-3.5-1.6-5.1 4-4.6 1-8-4.9-3-.3-1 3.8-3.8.6-2.4-1.1-1.3-2.4-3.4-.6-1 1.1-2.9-.3 3.5-2.2-4.9.3 1.4-1.1-2.4-3.2.8-2.1-4.8-1.9.8-2.4 1.1 1.9 2.4-.8-1.9-1.8 1.3-1.1-1.8-2.7 1.1-1.8-4 .5.3-3.5 2.9-2.7 5.1.5.8-1.3.5 1 5.3-.2-1.1-1 .8-.6 4.5-.8-3.7-1.3.2-1.9 10.7.8 5.4-4.2 4.9-1.9 7.5.3 1.3-.8 1.4 2.2 3.8.3 1.8 2.7 1.9-.6 8.1 3 5.3-1.3 4.3 1 6.4-3.1zm-79.2 9.3h-1.6l1.3-.6.3.6z">
                                </path>
                                <path id="europe_svg__SE" class="europe_svg__st0"
                                      d="m264.7 88.4-2.4-.3-3 1.1-1.8-1.8-1.1 1-.6-.8-.8 3.4-.8-.2L253 93l-1.6.2.2 1.8-1-.6.8 2.4-2.2 3.8 1.9 4.2-3.8 7-5.3 4.6-1.9-.2-1.6 2.7-2.2.6-1.4 2.1 1 .2-.2 1.1-1.4 1.1-1.3-1.1.6 3.2-1 1.1h-2.2l1.1 3-1.3 4 .5 1.9-1.4-.5-.3 1.6.6 9.3 2.1 1.8 1.4-.6 4.6 5.7.6 2.7-5.1 4-1-.5v-2.1l-.3.8-1.4-.5-.2 1-4.2-1.1-2.7 1.3 4.5.3 2.1 1.8 6.1-1.3.5.8-8.3 6.7-3.8.2 3.7 1.4-1.4.6v8.9l-1.6 7.5-2.7 5.4-5.3-.3-.2 1.1-1.8.5-1.1 5.3-6.5-.2.5-3-2.6-4.9 1.8.3-.8-1.6 1-.2.2-1.6-2.4-2.7-4.9-11.5-.2-2.1-1-.3-.5-6.1.3-1 1 .5.5 1.3.8-.2.8-3.7-.6-3 1.3-2.7 2.9-2.6.5-3.5-1.4-5.7 2.1-.6 1-3-3.7-4 .8-6.1-1.6-11.2 1-3.5 3.2-4.6 2.1-1 3.8.6 1-1.9-.3-3.4-2.2-1.4 4.3-8.6.3-10.2 4.8-2.2-.3-2.4 4.9-7.3-1.4-4.9 2.2-2.6 1.1-3.7 2.7-2.9 3 1.9 1.9-8.1L244 55l1.4-1.8-1.4-1 1.9-4.3-1.1-2.4 2.6-.2 7 7.3 4.3 2.1 4 5.6-1 6.7 1.4.5-.5 3.8 1.8 4.2-1.4 7.2 1.7 5.7zm-25.9 86.7-1.3 1.3.5 2.9-3.8 4.5.6-1.6-.8-4.5 2.1-2.6 1.9-.8.8.8zm-13.1 14.5-.6-2.6 3.2-7.2-2.6 9.8z">
                                </path>
                                <path id="europe_svg__SI" class="europe_svg__st0"
                                      d="m225.7 269.9-1-.3-.5 1.1-3 1.3.2 2.6-1.9 1 .3 1.9-2.7-.2-1.1-1.3-1 1.3-4-.3.8-.5.8-.2-2.1-2.9.8-1.3-1.3-.6 1.6-1.9 4.3 1 1.8-1.6 5.4-.5.6-1.4h1l1 2.8z">
                                </path>
                                <path id="europe_svg__SK" class="europe_svg__st0"
                                      d="m256.4 250.4-2.1 5.1-2.1.5-1.4-1.6-4.9.2-2.7 2.9-1.6-.6-4.3 1.8-.3 1.6-4.9.2-3.2-1.8-1.4-2.9.5-1.6 1-1.9 3.2-.3 2.1-2.9 3.4-1.9 1.6.8 1.4-1.6 1.8 1.8-.2 1.3 1.6.2 1.6-1.6 6.5-.2 4.4 2.5z">
                                </path>
                                <path id="europe_svg__RS" class="europe_svg__st0"
                                      d="m244.7 272.8 2.7 2.6.2 2.1 3.5 2.4-.6 1 1 .8-1 .5 3.7 2.1 2.9-.8.5.6-1.3 1 1.1 1.4-1.8 3.2 3 4.2-2.6 2.4.3 2.7-1 1-4 .5 1-2.9-1.9-.6-2.9-3.5-2.4 3-5.9-4.9 1.6-.8-1.3-2.2 1.8-.5-2.4-2.2 1.1-3.7-1.8.2.3-1.9 1.8-.5-2.1-1.3-.5-3.8 3.7-1.8 3.3-.3z">
                                </path>
                                <path id="europe_svg__RO" class="europe_svg__st0"
                                      d="m285.4 277.6 2.7 1.6 3.4-1.3 1.6 1.1-.8 3-2.6.6.2-1.6-1 .5-1.6 8.3-7.7-3-4.5 1.1-3.7 2.4-13.1-1.1.5-1.8-1.6-1.1-1.1-1.4 1.3-1-.5-.6-2.9.8-3.7-2.1 1-.5-1-.8.6-1-3.5-2.4-.2-2.1-2.7-2.6 4.5-1.3 4.5-9.1 4.5-3.4 1.6-1.1 7 1.1 2.1 1.6 6.1-2.1.8-1.6 1.6-.5 1.9.8 5.6 8.9.8 2.6-.8 7.7.7 1.4z">
                                </path>
                                <path id="europe_svg__PT" class="europe_svg__st0"
                                      d="m53.7 360.5 2.6.6-1.6.6-1-1.2zm-43.1-31 2.2.5h-2.7l-.6-.8 1.1.3zm-7.3-5.3-1.6-.8 1.3-.2.3 1zm100.4 9.6-2.2 1.1-5.9-.2 1-2.6-.3-6.5 1.1.2-.6-.6-2.1.5-.2-1.3 1.1-.6 1.1-2.2-1.8 2.2-1.1.3-.6-.6 4-12.9-.5-8 2.6-1.3.6 2.2 7.8-1 .3 1.9 1.8 1-3.7 3.5.6 4.5-1.1 1.1.3 2.4-2.9 1 2.7 4-1.8 3.8 1.9 1.8-2.6 3 .5 3.3z">
                                </path>
                                <path id="europe_svg__PL" class="europe_svg__st0"
                                      d="m241.5 205.9 16.1 1 3 1.4.6 2.2 2.2 10.1-3.8 4 2.4 2.1-.3 4.3 2.6 5.3v2.7l-7 7.3.8 4.3h-1.6l-4.6-2.7-6.5.2-1.6 1.6-1.6-.2.2-1.3-1.8-1.8-1.4 1.6-1.6-.8-1.4-2.9-4.8-1.9.3-1.6-1.4.5-2.7-1.4.5 1.4-1.8 1.1-2.2-2.6 1.1-1.3-.6-.6-1.4.3-5.1-3.2-1 1.3 1.1-3.2-2.1-4.8.8-2.1-.6-3.7-2.6-2.9 1.4-2.7-.8-4.5 1.6.8-.2-1.6-1.8-.5v-.6l10.1-3 1.9-2.2 6.5-2.4 2.4-.2 2.2 1.3-1.6-.5 2.1 3.4 4-1z">
                                </path>
                                <path id="europe_svg__NO" class="europe_svg__st0"
                                      d="m272 13.8 1.8.6 1 1.8-2.9.5-1.4-1.4 1.5-1.5zm26.8 20.8v3.7l-3.5-1.4-.5 3-3.5 1.9-2.2 4-.6-2.2 2.6-4.3-1-2.9-7-5.9-3.2 2.4-3-.2-2.2 3.4-1.7 10.1-4.2 5.6-5.6-3-2.7 2.2-4.6-1-4.2-7.8-2.7.8v2.4h-2.2l-2.6.2 1.1 2.4-1.9 4.3 1.4 1-1.4 1.8-8.5-2.7-1.9 8.1-3-1.9-2.7 2.9-1.1 3.7-2.2 2.6 1.4 4.9-4.9 7.3.3 2.4-4.8 2.2-.3 10.2-4.3 8.6 2.2 1.4.3 3.4-1 1.9-3.8-.6-2.1 1-3.2 4.6-1 3.5 1.6 11.2-.8 6.1 3.7 4-1 3-2.1.6 1.4 5.7-.5 3.5-2.9 2.6-1.3 2.7.6 3-.8 3.7-.8.2-.5-1.3-2.9-1.4-1.3-5.7-2.1 7.5-1.8.5-1.4-1.6.5 1.4-7.7 8.1-3.5 1.3h-2.4l-.6-1.3-1.4.5.3-1.6-3-1.1-2.7-3.4.5-2.9 2.6 1.4 1.3-1.3-1.3.5-1.1-1.4.3-2.1 2.2-2.6-5.3 4-1.1-.6 1-4.2 2.4-.2 2.2-1.6-2.6-.5 2.1-3.8 1.9-1.8v2.6l2.4-3.7-4.3 1.8-5.1 7.2.3-4.6 2.4-.3-2.1-.8-.8-2.4 2.6-2.6-2.1 1.3-.6-.6-.5-4.2 9.1-1.1 1.3 1.9v-1.4l2.9-1.3-1-.2-.3-.8.5-1.4-.6.6-.3 2.1-1.8.2-1.8-1.4-1.1 1.6-5.4.3-1.6-1.4-.2-1.9 1.8-.5-2.1-2.4v-1.8l2.7-.2 2.9 1.1 3.7-1-7.5-.6-.6-2.4 1.1.2 2.9-2.9 1 .8 2.6-.6.6-.6-2.9.6 1.1-2.2 6.2.6.6-.5-.8-1 2.9-.6-6.9.2 1.1-2.4 3.2-1.9 2.7.2 2.7 2.7-2.4-3.5.6-1.4 1.9-.6-1.4-1.8 1.1-1.1 2.9.2.2 1.6 2.7-1.9 1.6 2.7 3.8-.8-.2-1.9 3.4-2.1-1-1.1 1.4-1.3-.8-.5-2.1 1.4.2 1.8-4.5 2.9-2.6-2.2 5.1-8.3 5.4-4.6-1.8.6 1-2.7 3.4-2.4.8 1.1 2.2-1.6 1-1.6-2.6 1.9-1.4-2.2 2.9-6.7 1.8-.6-1.3-1.8 4.5-1 1.8-1.4-4.6.8.5-5.3 2.1-1.9h1.8l-1.6-1.4 2.4-2.7 6.7-1.1-4.9-1 2.7-4 3.2 3 .5-2.2-2.2-1.1.3-2.2-2.2 1.4-.3-1.9 1.8-2.2 2.6.3-1.6-1.6 3.5-2.2 1.6 4.8.5-2.9-1-3 1-1 2.9.5 3-1-.6-.8-4.3.2-.3-1 4.5-3.7 1.6-4.3 2.1-.8.8-4.5 3 2.2-1.3-2.6 1.9-1 1.1-2.7 2.6-.8-.2 5.6 1.6-5.9 1.9-1.8v4.8l-1.1 4 1.9-2.9 1.3.3-1.1-2.6.5-3.2 2.7.3 1.4-1.9 2.7 2.7-1-3.5-2.2-2.6 4.5-1.1.5.6 1.9-1.6 3.4 5.9.2-4 3.4-3.7 1.9-3.4-.8-1.9 2.6-2.9 2.6 2.6.8-1.1 1.8 1-4 9.7.3 1.6.8-.5 7.3-12.3-.3 8.1 2.1-1.6 1-3.5 1.9-1-1.6-2.2 1.9-2.2 4 1.8-.3 2.4-2.2 2.2 1.9.2-.5 6.4 3.2-9.4h1.4l3.2 3.4 1.6-.8.8 2.4 1.9.3 1.8 1.9.2 1.9-3.5 2.2-7.5-.3 4.2 2.6.5 3.5 2.1.3.8-2.1 1 2.1.3-1.1.5-.5zM261 18.9l-3.2 4.2-2.4.5-1.9-2.2 4.9-.8 1.3-1.6 1.3-.1zm2.9 3.9-1.6.2.3-2.9 1.6 1.4-.3 1.3zm-2 .3-.3 2.2-1.9 1.9-1.1-2.4 3-2.7.3 1zm-19.6 5.1 1.6 1.3-.5.8h-1.1l-1-2.9 1 .8zm-2.7 2.2 1.8.6-1.4 2.9-1.6 1-1.1 2.7-3.4.3 1.1-3 1.6-.2v-1.6l1.9-2.2.5-3 .6 2.5zm7.8-.3-1.6.2.2-1.9 1.4-.3v2zm46.8 4.3-1 .5.3-2.1 1.1 1-.4.6zm-63.5 2.9 2.6 1.3-.3 4.5h-2.4l-2.1 2.6-1.4-.8 1-4.2 1.8-.3-.6-1.4 1.4-1.7zm-8.8 14.8 2.9-4.5 1 3.4-2.7 3.2-2.7 1.3-.8-.8-3.4 2.4-1.9.2 1.6-2.9 2.6-.6 1.6-2.4.3-6.1 2.9-3.7-1.4 10.5zm-2.9-5.4 1 2.2-1 2.4-4.2-.6.8-2.2 1.3.3.3-1.8.8.3v-1.4l1 .8zm-6.9 9.6 1.1.6-4.5 3 .3-2.2 3.1-1.4zm-4.4 5.3-.8.6 1.3-3.4-.5 2.8zm-2.9 23.9.5-2.1.5 1.1-1 1zm.5 1.8-.2-1 1.4-.5-1.2 1.5zm-2.7 3.3-1 .3.2-1 .8-.2v.9zm-3.9 9.3h-2.6l1.4-1.3 1.2 1.3zm-14 14-1-.2 2.4-1.3.2 1.1-1.6.4zm-1.9 3.9-1.6-.8 1.4-.6.2 1.4zm-16 24.7h-.8l.3-1.1.5 1.1zm.6 8v1.3l-.6-2.7.6 1.4z">
                                </path>
                                <path id="europe_svg__ME" class="europe_svg__st0"
                                      d="m239.3 291.3 5.9 4.9-1.4.5v1.4l-1.4.5-.6-1.1-1.9 3.2.3 2.1-4.2-3.8-.5-1 .2-3 1.9-2.4 1 .3-.3-1.6h1z">
                                </path>
                                <path id="europe_svg__MK" class="europe_svg__st0"
                                      d="m255.4 299.8 3.4 4-.5 2.7-1.6 1.3h-3l-2.1 1.8-3.2.2-2.4-2.9.3-4.2 1.1-1.3 4-1.3 4-.3z">
                                </path>
                                <path id="europe_svg__MD" class="europe_svg__st0"
                                      d="m285.4 277.6-.6-1.1.8-7.7-.8-2.6-5.6-8.9-1.9-.8 4.8-1.6 8 4v3.7l2.1 1.6.2 2.2 1.6 1 1.3 3-5.9-.3v3l-2.2 3.8-1.8.7z">
                                </path>
                                <path id="europe_svg__LV" class="europe_svg__st0"
                                      d="m280.9 178 2.4 2.2-1 4.2h1.1l1.3 2.9.2 3.7-2.9 3.2-2.7-.3-2.4 1.4-4.8-4-3-.8-1.1-1.9-3.7 1.3-10.4-1.3-5.3 3 .2-7 3.4-7 4.2-1.4 3.7 6.1 1.9 1.1 3.7-2.6-.3-5.9 4.9-1.8 3.7 2.1 2.4 2.9 2.6-.6 1.9.5z">
                                </path>
                                <path id="europe_svg__LU" class="europe_svg__st0"
                                      d="m172.7 242.1 1.9 2.6-.8 2.7-2.9-.6-.2-3 1.1-1.9.9.2z">
                                </path>
                                <path id="europe_svg__LT" class="europe_svg__st0"
                                      d="m277.1 195.2-.6 2.9 1.6.6-4.6 3.2-1.6 5.1 1 1.6h-1.3l-.3-1.1-5.9 3.5-4.3-.5-.6-2.2-3-1.4.3-4.5-1.3-1.6-6.9-1.8-1-7.3 5.3-3 10.4 1.3 3.7-1.3 1.1 1.9 3 .8 5 3.8zm-28.7 3.5h-.3l1.1-3-.8 3z">
                                </path>
                                <path id="europe_svg__LI" class="europe_svg__st0" d="M190.3 265.8h-.5l.2-1.6.3 1.6z">
                                </path>
                                <path id="europe_svg__KV" class="europe_svg__st0"
                                      d="m251.4 300.3-4 1.3-1.1 1.3-.5-2.4-2.1-2.2v-1.4l1.4-.5 2.4-3 3 3.5 1.9.6-1 2.8z">
                                </path>
                                <path id="europe_svg__JE" class="europe_svg__st0" d="m131.2 249.2-1.1.5.2-.6.9.1z">
                                </path>
                                <path id="europe_svg__IS" class="europe_svg__st0"
                                      d="m62.2 83.1 4.8-1.9-2.7 3.2 2.1 1.3-.6 3.2 2.2-.3-.5 2.6 1.6-.8 2.9 1.8-1 2.1 1.1 3.5-1.4 1-1 3H68l-1.3 4-6.1 2.9-4.2 3.7-6.1 1.8-.6 2.1-3.7 1.4-7.8-1.8-1.4-1.4.5-1.4-1.3.8-2.4-2.4-7.8 1.3-.3-3 1 1.1 1.6-.5 3.7-4-3 .8.5-2.4 1.8-1.3-2.6 1.1-1.9-3.2-4.5-.3-2.4 1-1.1-1.4 6.4-2.2h4.6l.6-1.8-1.3.8-2.4-.8 3.4-3-5.4-1.6-5.1 2.1-2.9-1.4 1.1-1.1 2.1 1-1.3-2.9 2.4 1.3 1.8-1-2.7-1.3 1.6-.3-1.3-1.8 1.8-.2-1-1.5.8-1 1.9 1.1.2 1.3 1.8-.5.2 1.9 1-.5v-2.1l-2.6-1.8 2.4-.6-3.2-1 1-1.1h2.7l5.3 5.1.2 3.5-1.4.2 2.7 5.6 1.6-4.5 1.8.8 1.3-6.5 3.7 4.2.5-3.8 2.7-1.4 3.5 5.6-1.1-5.3 1.9.2 1.8 2.2 2.1-3 1.6 1 1.8-1-.3-3.2 1.4-1 1.3.2 2.6 3.5z">
                                </path>
                                <path id="europe_svg__IE" class="europe_svg__st0"
                                      d="m104.7 200.3-1.8 2.9-1.9.6.8 1-1.9 1.6 2.6 2.4 1.4.2 1.6-2.4 1.8 3 2.2-.3-.6 1.3 1.6 8.6-2.2 4.9.6.8-2.9.8-.3-.8-5.6 3.5-1.8-.5v1.4l-4.5 1.8-2.7.2 1.3-1.8-2.7.8 2.7-2.2-3.8.6 2.2-2.7-2.2-.6 3-.3-.6-1.3 1.4-1.1 4.3-1.1-1.1-.6-1 1-3.8.5L94 218l1.9-1-5.9-1.8-.2-1.1 2.1-.5-1-1.1 1.6-.6-1.8-.5.3-2.1-1.3-.5.2-1 7.7.2-.2-1 2.6-2.6-3.2-.3 1.9-1.9.5-2.2 3-1v2.6l1.8-3.5 1.8 1.1-1.1 1.1zm-14.1 10.4-1.6-.5 1.4-.2.2.7z">
                                </path>
                                <path id="europe_svg__IM" class="europe_svg__st0" d="m118.9 208.3-1.9 1 1.9-2.9v1.9z">
                                </path>
                                <path id="europe_svg__HU" class="europe_svg__st0"
                                      d="m254.3 255.6 3.8 3.5-4.5 3.4-4.5 9.1-4.5 1.3-3.2-.5-3.7 1.8-2.7 1.3-2.9-.3-6.5-5.3-1.1-2.7h-1l1.9-1.1v-2.9l1.1-1-1.3-1.1 3.4-.3.5-2.2 3.2 1.8 4.9-.2.3-1.6 4.3-1.8 1.6.6 2.7-2.9 4.9-.2 1.4 1.6 1.9-.3z">
                                </path>
                                <path id="europe_svg__HR" class="europe_svg__st0"
                                      d="m225.7 269.9 6.5 5.3 2.9.3 2.7-1.3.5 3.8 2.1 1.3-1.8.5-.3 1.9-1.8-1.4h-4.3l-4.6-1.4-3.2 1.9-2.6-1.3-.3 3 2.9 4.6 4.9 4.8 1.6 3.5-3.5-3.2-4.6-1-4.2-4.6-.3-.6 1.8-.2-2.6-2.4-.6-3.4-1.6-1.6-1.3-.3-2.2 3.7-1.4-4.9 4 .3 1-1.3 1.1 1.3 2.7.2-.3-1.9 1.9-1-.2-2.6 3-1.3.5-1.1 1.6.4zm-8.8 11-1.8-.8.6-1.1 1.2 1.9zm14.7 14.7 4 2.4.5 1-7.7-4.2 3.2.8zm-.3 1 .6.5-2.1-.6 1.5.1z">
                                </path>
                                <path id="europe_svg__GR" class="europe_svg__st0"
                                      d="m275.7 303.8 1.6 2.1-3 4.6-4.8-1.8-6.9 1.6.5 2.2 2.4 1.8-3.2-1.3 1.1 2.4-2.7-1.9 1 2.2-3.7-3.2.2-1.3-1.4.6-.2 3 3.8 5.7-1 .5v-1l-1.3-.3.8 1.8-2.6 1.1 3.5 1.3 4 3.4v3l-2.7-2.2-2.4 1 2.2 2.9-1.6.6-2.2-1.3 2.2 7-2.2-2.2-1.4 2.1-1.8-3.5-1 1.9-1.6-2.2.5-1.9-2.9-3.2 1.4-1.9 2.1-.8 5.6 2.4 1.1-1.4-3.7-1.8-4.8.8-.8-1.1-.8 1-2.1-3.5 1.8-.2v-.8h-2.1l-3.7-4.5 1.3.2.3-2.1 1.8-1 1.9-3.4-.3-1.6 3.2-.2 2.1-1.8h3l1.6-1.3 8-1.4 3.8 2.1 3.4-.5 1.1-.5-.3-2.2h1.9zm-7.8 7.5-1.3-.2.5-1 .8 1.2zm3.3 4.1-.5 1.1-1.4-.3v-1l1.9.2zm-27.3 3.7-2.2-2.2h1.4l.8 2.2zm32.3.6 1 1.9-.6.5-1.9-.6.8-.8-1 .6-1.1-.6 2.8-1zm-15.4 2.6 3.7 2.1 2.1 4.3-2.6-2.7-5.9-3.2 2.7-.5zm-13.9 2.2-.6.2.6-1.8v1.6zm27.7 2.6-1-.2-.2-2.1 1.6.2-.4 2.1zm-28-1.1.8 2.1-2.1-.6 1.3-1.5zm1.5 3.6.5.6-1 .3-1-1.3 1.5.4zm30.1 0 1.1.6-2.4-.2 1.3-.4zm-6.5 5.5-1-.6.8-.8.2 1.4zm11.8 6.5-.6-1.6 2.7-1.6-2.1 3.2zm-20.4 2.6 1.6-.3 1 1.4h7l.3 1.4 2.7-1.1-.8 1.9-7 .5-1.8-1.4-4.5-.6-.2-1.8.8-.8.9.8z">
                                </path>
                                <path id="europe_svg__GG" class="europe_svg__st0" d="m128.6 247.1-.2.5-.5-.2.7-.3z">
                                </path>
                                <path id="europe_svg__GE" class="europe_svg__st0"
                                      d="m378.2 302.7-1.3 1.6 2.6 2.6-.6 1.3-6.4-2.4-1.4 1.1-8 1.3-3.5-3.2-1.4 1-4.9-.5 1.3-3-1.4-4.8-7.7-5.3.8-1.1 2.6.3 4.8 2.2 6.1.3 5.3 2.9.2 1.3 3.5-1.3 1.3 1 .5-1 4.3 1.8-.3 2.1 3.6 1.8z">
                                </path>
                                <path id="europe_svg__FR" class="europe_svg__st0"
                                      d="m170.9 246.8 2.9.6 2.1 2.2h3.7l3.5 1.4-2.7 6.2v4.3l-1.4 1.3-1.9-.2-5.1 9.3 1.1.2 1.1-1.8 1.8.2 1.3 3.7-1.1 1.3 1.8 2.6-2.6 2.2 1.8 1.8-.5 3.5 2.1 1.4 1.6-.2-.8 2.9-7 4.8-5.4-2.6-1.8.5-4.2-1.3-4.3 4.5.8 3.4-6.1.5-1.6-1-1.4-.6-3.7-1.8-.3 1.1-6.2-.8-4.5-1.8.3-1.3-1.9-1.1 1.6-1.1 2.1-8-.8.2.8-6.2 2.7 3.8-1.3-3.4-2.1-1.8.8-.2-.6-4.2-3.2-1.4-1.4-2.2-.6-2.7.8-.8 1.8.2-1.1-.6h-2.7l.3-1.1-1.8-.3-.2-.8-7.8-1.4-1.9-1.6 1.8-1-1.3-1 1.8-.2-2.4-.5v-1.3l7.7-2.4 2.7 2.4 1.3-.8 2.2.5.5-1 2.7.3-2.4-8h3l.6 2.2 4.9.6 3-1.1-1.4-.5.3-1.6 5.4-2.4 1.8-2.1.5-5.1 4.3-1.8 1.1 2.9 1.8-.2 3 3.8 2.6.5-.2 2.2 2.1.2 1.4-1.6.3 2.9 3.2 2.2.9.1zm-35.4 27.4-.2.6-1-1.8 1.2 1.2zm54.3 22.1.3 4.6-1.9 5.1-1.9-1.4-1.3-5.3 1.3-1.8 2.6-.8.3-2.1.6 1.7z">
                                </path>
                                <path id="europe_svg__FO" class="europe_svg__st0"
                                      d="m108.8 129.9-.6.6v-1.6l.6 1zm-1.2.3-.2 1.4-1-.3.6 1.8-2.2-3.7 2.8.8zm-2.8 1 .3 1-1.3-.3-.2-.6 1.2-.1z">
                                </path>
                                <path id="europe_svg__FI" class="europe_svg__st0"
                                      d="m289.3 45.6-2.9 1.6 1.8 1-1.4 4.3.5 2.6.6 2.2 3.4 1.8 3.4 5.3-4.6 10.2 5.3 14.1V90l-1.9.6-.5 4.6 1.1 1.3-1.1 2.1 2.6 2.9-.6 2.6 2.6 3.4.2 1.9-2.7 4 6.1 6.1 1.8 3.7-3 6.2-16 19-1.8.8-1.3-.8-3.4 1.3.2-2.2-1 2.1-2.1-.5.5 1.4-1.4.8-.5-.6-6.2 3.2-4.9.3-2.2 1.8 1-2.1-1.4-1.9-.8 1.6-1.4.3.6-3.7-5.9-2.2-.3-3.8 1.3-6.5-1.8-4.3.5-3.2-1.3-3.8 1.9-4.6h1l-.5-1.9 4-1.3v-2.2l6.5-6.2 4.9-8.9 3.7-.6.5-1.8-.2-5.7-3.4-2.4-.3-2.4-2.4.6-2.4-5.6 1.4-7.2-1.8-4.2.5-3.8-1.4-.5 1-6.7-4-5.6-4.3-2.1-7-7.3h2.2v-3l2.7-.8 4.2 7.8 4.6 1 2.7-2.2 5.6 3 4.2-5.6 1.6-10.2 2.2-3.4 3 .2 3.2-2.4 7 5.9 1 2.9-2.6 4.3-.4 2.1zm-21.1 52.8-1.4.2v-.8l2.1-.2-.7.8zm-18.5 20.5 1 .5-.8.5-.8-1.4.6.4zm1.1 29.4-.8.5-.3-1.4 1.1.9zm3.8 1.6 1.3.6-.3 1.4-1.4-1.3.4-.7zm-1.8 2.4-.6.3.3-.8.3.5z">
                                </path>
                                <path id="europe_svg__EE" class="europe_svg__st0"
                                      d="m284.3 159 .6 1.1-3.7 5.9.3 5.6 1.4 3.4-2.2 3.2-1.9-.8-2.6.6-2.4-2.9-3.7-2.1-4.9 1.8 1.1-4.6-2.1.8-1.8-1-1.3-2.9 1-1.3-1.3-1.3.3-2.7 3-1 1.4-1.8 5.4-.5.3-1.1 7.5 1.9 4.6.3 1-.6zm-25.9 6.5-1.9 1.3-.6-1.8-1.8-.8 3-1.4 1.3 1v1.7zm2.1 2.7-1.1-1.1 1.1.2v.9zm-3.7-.8 3.7 1.6-4.8 2.2-1.9 2.7 1-2.1-1.6-1.1-.2-2.2 3.8-1.1z">
                                </path>
                                <path id="europe_svg__ES" class="europe_svg__st0"
                                      d="m132.3 292.1 1.9 1.1-.3 1.3 4.5 1.8 6.2.8.3-1.1 3.7 1.8.2 1.1 1.3-.5 1.6 1 6.1-.5.2 3.4-1.3 1.3L145 310l1 .6-1.4.8-4.6 7.3.6 3 2.1 1.9-3.7 2.9-1.4 3.5.5 1-4.6 1.6-2.4 3.8-11.5.3-4.2 1.9-2.4 2.6-2.1-1-1.8-2.9.8-1.8-1 .5-2.4-2.9-2.7.6-.2-3.5 2.6-3-1.9-1.8 1.8-3.8-2.7-4 2.9-1-.3-2.4 1.1-1.1-.6-4.5 3.7-3.5-1.8-1-.3-1.9-7.8 1-.6-2.2-2.6 1.3.2-3.2-.5-1.6-1.1.3.5-1.4-1.6-1.3.3-1.4 7.5-4.2 3.2 1.4 6.2-.6 6.7 1.6 4.6-.8 2.9 1h6.3zm31 24.3-2.2-1.4 1.9.2.3 1.2zm-5.8.3 1.6.6-1.9 2.6-3.5-1.8 4-2.7-.2 1.3zm-8.8 5.8-1.1.2 1.8-1.4-.7 1.2zm-77.2 61.4-.8.3.2-.8 1.9-1.3v1.3l-1.3.5zm-21.1 2.4-.5-2.1 1 .6-.5 1.5zm18.7 1.9-1.4.3 3.2-3.7-.3 2.9-1.5.5zm-11-1.2-1.6 2.1-1.3-1.9 4-1.3-1.1 1.1zm4.7 1.4-.2 1.9-1.4.2.2-2.1h1.4zm-12.6 1.9-.5 1-1-.6 1.5-.4z">
                                </path>
                                <path id="europe_svg__GB" class="europe_svg__st0"
                                      d="m136 237.7-1 .8-1.6-.6 1.3-.8 1.3.6zm-16-21.9.8.2-1.6 1.4-1-2.1 1.8.5zm-10.2-6.5-2.2.3-1.8-3-1.6 2.4-1.4-.2-2.6-2.4 1.9-1.6-.8-1 1.9-.6 1.8-2.9 3.8-1.3 2.2.8 1.6 2.9-.8 1.6 1.4-.2.6 1.4-1-.5.3 2.4-2.1 1.9h-1.2zm5.6-12.2-1.1-.3v-2.1l1.1 2.4zm-5.3-4.3.3 2.1-1.3.8.2-1.4-1.1.6.2-1 1.7-1.1zm1 1.1-.5-.6 1.8-2.1-1.3 2.7zm.9-4.9-2.7.5 1-1.8-.8-1.1 2.7 1.1-.2 1.3zm-7.5-7.1-.8-2.6.8.2v2.4zm5.6-3.6v1.8l2.4.6-1.4 1.9-.5-1.4h-1.4L107 179l2.1-2.1 1 1.4zm-5.4-1.8.2 1.4-1.8-.6 1.6-.8zm5.1-6.5-1.8 2.6.6.6-2.9 2.6-.5-.6 1.1-1.1-1.1-2.6h1.8l-.3-1.1 2.7-1.9.4 1.5zm15.8-1.5-.5 1.9-4 3.5-.2 1 1 .3-1.4 2.2 3.7-1.3h6.7l1.4 2.2-4.2 8.6-3.7 1.8 2.2-.3 1.1 1.3-3.5 2.1-2.2-.6 3.8 1.3 2.2-.6 4.8 4.2 2.2 7.7 5.9 5.1-.6.8 1.6 3.5-1.9-1.1-1.9.2 1.9.3 2.9 3 .5 1.4-1.6 2.2 1.1.8 1.4-1.3h2.6l3 1.8-.3 5.3-1.8 1.3-.2 1.4-2.2.6.6 1.3-2.4.8 5.1.8-.2 1.4-2.2 2.1-3.8 1.3-8.3-1.1-.5 1.3-2.9.5v1l-4.9-1-1.9.5-1.4 3.2-2.6-1.3-2.7.8-1.9 2.1-2.6-.2 7.3-9.1 5.4-.2 3.5-4.3-4.3 2.9-3-1.6-1.8.2.8-.8-1.4-.6-2.7 1-1.3-1v-1.8l4.5-2.7 1.3-2.2-.6-3.2-3 1 2.1-2.9 2.6-1.4 3.4.5.2-1.4 1.6 1-1.6-1.8 1.1-5.4h-1.6l-2.2-3.8.6-1.8 2.2-1.6h-2.6l-2.1 1.4-4.3-.6-.5 1.4-.6-.6-.6-1.9 2.6-4.6-1-3.4 1.4-.6-1.3-1 .2-1-2.2 2.6.8-2.9-1.6 1.9-.8 5.4-1 .5 1-8.3 1.8-4.6-2.4 2.1-2.4-1.6 2.1-1.4-.6-.5 1.6-3-1.1-1.4 1.1-1.6-.8-1.1.6-2.1h2.1l-1.3-1.8.3-1.6 1.8-.2v-2.9l3 .5 6.1-1.3 1.1.2-.7.9zm.3-5.1 1.3 1.3-2.7-.6.2-1.6 1.2.9zm8.8-15.3 1.3 1-1.3 5.7v-2.9l-1.9-1.3 1.4-.5-1-1.6 1.1-1.1.4.7z">
                                </path>
                                <path id="europe_svg__DK" class="europe_svg__st0"
                                      d="m191.1 202.7-5.4-.6-.3-4.6-2.4-1.6.2-9.3 2.6 1 1.1-2.2 1-.5.6.8.3-2.9h-1.3l-1.1 2.7-1.6.6-1-1.8 1.8-2.4 4.2-.6 2.7-3.8 3.4-1.4-1.6 10.5 3.4 1.6-1 1.9-2.2.3-.6 3.2-1.4.2.6.8-2.2 2.4.5 2.1-1.1 2.1 1.4.6-.6.9zm6.7-22-1-.2 1.6-.6-.6.8zm7.8 13.5-1.8 2.9 1 1.6-1.6 1-.2 3.3-1 .3-1.1-3.7-1.9-.2-1.6-4.6 1.8-.3 1.6-1.9 1 2.4.2-2.4 1.8-1.4 1.8.5v2.5zm.5 1.6-.6.3.3-1.1.3.8zm-10.4-.1.8 4.3-1.8.8-2.4-1-.6-3.2 4-.9zm22.7 5.2-2.1-.6.5-1.8 1.9 1.3-.3 1.1zm-22.2 2.4-.6-1 1.8-2.7-1.2 3.7zm-3.4-1.1-1.3-.2-.2-1.4 1.5 1.6zm12.6-.6-2.2.5.8-1.3 1.4.8zm-6 .6 1.9.8.2 1.1-1.6.5-2.2-1.3.2-1.4 1.5.3z">
                                </path>
                                <path id="europe_svg__DE" class="europe_svg__st0"
                                      d="M213.9 210.4v.6h-1.4l-.5-2.1 1.9 1.5zm-2.6-3.7v1l-2.7-.3.8-3.2 1.6 1.3.3 1.2zm-20.2-4 1.4 1.3-.8 1.8 4.5 1.4 1.4-.5-.8 3.2 2.7.6 6.1-4.6 2.2.5 2.1 2.4 1.4-.2.8 2.6 2.1 1.1.8 4.5-1.4 2.7 2.6 2.9.6 3.7-.8 2.1 2.1 4.8-1.1 3.2-2.6-1.4.3 1.1-7.3 4-2.1.2-1.4 1.8-1-1 2.1 3.2-.6 1.3 1.4 2.6 5.7 5.1-.5 1.8-1.3-.3-.6 1.8-3.2 1.9 1.3 4.8-4.2-2.1-5.9 2.4-3-1.1-1.3 2.1-1.1-1.8-2.2-.2-4.8-1.9-.6 1.3h-4.3v-4.3l2.7-6.2-3.5-1.4h-3.7l-2.1-2.2.8-2.7-1.9-2.6 1.3-1.6-1.8-3.5.3-1.3-1.1-1 1.4-1 .3-2.4-1.3-2.9 4.3-1.4.2-1.1 1.6-2.6-1.4-.6-.2-1.3 1.6-.3.8-5.3-.6-1.6 1.1-1.8h3.7l.5 1.9 1.1-1.1.8 1.8.6-4.2 3 .2 2.9 2.6-2.4-2.6-1.8-.6-.3-2.9-1.3-.3 1.6-2.1-1.4-3.2 5.5.5zm-7.2.3.8-2.4-.3 1.4h1.3l-1.8 1z">
                                </path>
                                <path id="europe_svg__CZ" class="europe_svg__st0"
                                      d="m216.9 236.2 1-1.3 5.1 3.2 1.4-.3.6.6-1.1 1.3 2.2 2.6 1.8-1.1-.5-1.4 2.7 1.4 1.4-.5-.3 1.6 4.8 1.9 1.4 2.9-3.4 1.9-2.1 2.9-3.2.3-1 1.9-2.1-1.6-2.6.3-5.1-1.9-1.9 3h-3.2l-1.1-1.3-5.7-5.1-1.4-2.6.6-1.3-2.1-3.2 1 1 1.4-1.8 2.1-.2 7.3-4-.3-1.1 2.3 1.9z">
                                </path>
                                <path id="europe_svg__CH" class="europe_svg__st0"
                                      d="M189.9 262.3v1.9l-.2 1.6h.5l2.9 1.6 1.1-1 .5 1-.2 2.4-1.8-.3.2 2.7-4.5-1.8-1.3 4.6-2.9-2.9-.2-1.4-3.2 3.8h-4l-1.3-3.7-1.8-.2-1.1 1.8-1.1-.2 5.1-9.3 1.9.2 1.4-1.3h4.3l.6-1.3 5.1 1.8z">
                                </path>
                                <path id="europe_svg__BY" class="europe_svg__st0"
                                      d="m284.9 190.9 3.4 1.8 1.3-.8 1.8.8.5 2.2 3.8-1.4 3.5 2.6-.5 2.4.8 2.2-1 2.4 1.8 1.4-.3 1.1 1.6 2.6 2.2 1.4-.3 1.9 3.5 1 1.3 2.4-2.9 2.7-3.7-1-.8 1.6 1.6 2.2 1 5.4-3.5.2-1.6 1.4-1.1 5.1-1.9-1.8-4.2.8-1.3-2.1-1.9 1.6-2.7-1.4-2.4 1.1-2.9-2.2-6.9-1.4-7.2.5-3.8 2.9.3-4.3-2.4-2.1 3.8-4-2.2-10.1 4.3.5 5.9-3.5.3 1.1h1.3l-1-1.6 1.6-5.1 4.6-3.2-1.6-.6.6-2.9 2.4-1.4 2.7.3 2.2-2.7z">
                                </path>
                                <path id="europe_svg__BA" class="europe_svg__st0"
                                      d="m238.3 281.7 1.8-.2-1.1 3.7 2.4 2.2-1.8.5 1.3 2.2-1.6.8H238l.3 1.6-1-.3-1.9 2.4-.2 3-4-2.4-.5-.3-1.6-3.5-4.9-4.8-2.9-4.6.3-3 2.6 1.3 3.2-1.9 4.6 1.4h4.3l2 1.9z">
                                </path>
                                <path id="europe_svg__BG" class="europe_svg__st0"
                                      d="m287.2 289.7-.6 2.6h-1.8l-1.3 4.5-2.1 1.9 2.7 3.4-2.4.3-1.4-1.1-3.2 1-1.4 1.8-1.1.2.3 2.2-1.1.5-3.4.5-3.8-2.1-8 1.4.5-2.7-3.4-4 1-1-.3-2.7 2.6-2.4-3-4.2 1.8-3.2 1.6 1.1-.5 1.8 13.1 1.1 3.7-2.4 4.5-1.1 7 2.6z">
                                </path>
                                <path id="europe_svg__BE" class="europe_svg__st0"
                                      d="m170.9 234.6-.2.5-.6 1.3 1.9.6 1.8 3.5-1.3 1.6-.8-.3-1.1 1.9.2 3-1.4.2-3.2-2.2-.3-2.9-1.4 1.6-2.1-.2.2-2.2-2.6-.5-3-3.8-1.8.2-1.2-2.9 4.2-2.2.5 1.1 2.4.3 1.6-1.4 4.2-.6 4 3.4z">
                                </path>
                                <path id="europe_svg__AZ" class="europe_svg__st0"
                                      d="m389.2 303 4.5 7 4.6 3.5-4.2.6-1 5.6-2.6 3.4v2.6l-1.4.2-3-2.9 1.4-1.1-1-1.4 1.1-1-1.6-1.9-7.7 5.1v-4.3l-4.6-2.7 1.6-.3.5-1.4-2.6-1.9.6-2.1-2.7-1.6.6-.5-1-1 1.4-1.1 6.4 2.4.6-1.3-2.6-2.6 1.3-1.6 1.6.5 2.9 3.7 2.4.6 4.5-4.5zm-12.6 19.8-3.2-.8-3.4-4.3-.3-.3 1.3-.5.8 1.3 3.2.2 1.6 4.4z">
                                </path>
                                <path id="europe_svg__AT" class="europe_svg__st0"
                                      d="m227.9 254.1-.5 1.6 1.4 2.9-.5 2.2-3.4.3 1.3 1.1-1.1 1v2.9l-1.9 1.1-.6 1.4-5.4.5-1.8 1.6-4.3-1-6.7-1.3-1.1-2.9-4.8.8-1.3 1.4-2.7-.6-.5-1-1.1 1-2.9-1.6-.3-1.6V262l2.2.2 1.1 1.8 1.3-2.1 3 1.1 5.9-2.4 4.2 1.8-1.3-4.8 3.2-1.9.6-1.8 1.3.3.5-1.8 1.1 1.3h3.2l1.9-3 5.1 1.9 2.6-.3 2.3 1.8z">
                                </path>
                                <path id="europe_svg__AM" class="europe_svg__st0"
                                      d="m378.5 322.6-1.9.2-1.8-4.3-3.2-.2-.8-1.3-1.3.5-2.4-2.2-3.2-.6-.5-2.4.8-1.6-1.4-2.6 8-1.3 1 1-.6.5 2.7 1.6-.6 2.1 2.6 1.9-.5 1.4-1.6.3 4.6 2.7.1 4.3z">
                                </path>
                                <path id="europe_svg__AX" class="europe_svg__st0"
                                      d="m243.4 150 1.4 1-2.4 1.9-.6-1.9.8.5-.2-1.8 1 .3zm-1.7 1.8-.6.5v-1l.6.5z">
                                </path>
                                <path id="europe_svg__AL" class="europe_svg__st0"
                                      d="m243.7 298.2 2.1 2.2.5 2.4-.3 4.2 2.4 2.9.3 1.6-1.9 3.4-1.8 1-.3 2.1-1.3-.2-.8-2.2-2.7-2.4h.6l-.6-1.8 1.3-6.5-1.1-1.6-.3-2.1 1.9-3.2.6 1.1 1.4-.9z">
                                </path>
                                <path id="europe_svg__IT" class="europe_svg__st0"
                                      d="m220.9 327.1-2.4 4.9 1 2.6-1 2.4-3-.6-1.3-1.6-8.3-3.5-1-1.4 1.6-2.4.8 1 1.9-1 2.6 1.3 9.1-1.7zm-30.3-17.6 1 2.6-1.3 8.8-2.6-.5-.5 1.8-1.6.3-1.1-1.8.6-4.2-1.6-7.2 1.8.5 3.4-2.7 1.9 2.4zm3.8-13.6.2 1-1.4-.2 1.2-.8zm16.9-26.1-1.6 1.9 1.3.6-.8 1.3 2.1 2.9-.8.2-.5-1.3h-2.1l-4.8 2.4-.3 1.4 1.6 1.9-1.4 1.8.8 3.5 5.9 4.6 2.2 6.2 2.7 3 3.2 2.1 5.1.3-1.3 2.6 10.5 5.7 2.6 2.9-.6 2.7-2.4-3-4.8-1.1-2.1 4.8 3 2.4.3 2.6-2.9 1.3-.2 2.5-2.6 3-2.1-.6 2.9-5.9-2.7-6.9-3.8-1.6-1-2.9-2.2.5.6-.8-2.1-.6-1.6-2.9H208l-7.3-7.2-2.7-1 .3-.8-3.4-3-1.6-6.9-7.2-3.4-3.8 3.8-2.6.8.8-2.9-1.6.2-2.1-1.4.5-3.5-1.8-1.8 2.6-2.2-1.8-2.6 1.1-1.3h4l3.2-3.8.2 1.4 2.9 2.9 1.3-4.6 4.5 1.8-.2-2.7 1.8.3.2-2.4 2.7.6 1.3-1.4 4.8-.8 1.1 2.9 6.1 1.5z">
                                </path>
                                <path id="europe_svg__AD" class="europe_svg__st0"
                                      d="m150.7 297.9-.6.3-.3.2h-.5l-.2-.2v-1l.2-.2.2-.2h.3l.8.2.2.2v.7h-.1z">
                                </path>
                                <path id="europe_svg__MT" class="europe_svg__st0"
                                      d="m214.8 340.3-.3.2-.3-.2v-.2l.5-.2.2.2-.1.2zm1.3 1.2-.2.2h-.5l-.5-.3v-.6l.5.2.5.5h.2z">
                                </path>
                                <path id="europe_svg__MC" class="europe_svg__st0" d="m179.9 289.1-.3.2v-.4l.3.2z">
                                </path>
                                <path id="europe_svg__SM" class="europe_svg__st0"
                                      d="m205.1 287.8.2-.3h.3v.3l-.2.3h-.3v-.3z">
                                </path>
                                <path id="europe_svg__GI" class="europe_svg__st0" d="M114.3 340.2v.3-.3z">
                                </path>
                                <path id="europe_svg__VA" class="europe_svg__st0" d="M205.4 302z">
                                </path>
				</svg>
                        </div>
                    </div>
                    <div class="top-0 sm:absolute flex-col flex justify-center h-full w-full text-center">
                        <h3 class="gap-1 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-bold rounded-md text-white bg-everglade-600 hover:bg-everglade-500 w-fit mx-auto">
                            Explore Europe<!-- -->
                            <div class="" aria-hidden="true">→</div>
                        </h3>
                    </div>
                </a>
            </li>
            <li class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl locations sm:shadow-sm rounded-3xl hover:bg-gray-50 duration-300">
                <a href="/listings/locations/area/asia" class="block mt-2 relative">
                    <div class="flex-shrink-0">
                        <div class="hidden sm:block md:h-56 h-48 md:w-56 w-48 mx-auto">
                            <svg id="asia_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                 viewBox="0 0 380 380" style="enable-background:new 0 0 400 400" xml:space="preserve"
                                 class="w-full">
					<style>.asia_svg__st0 {
                            fill: #ccc;
                            stroke: #fff;
                            stroke-width: .5
                        }</style>
                                <path id="asia_svg__AE" class="asia_svg__st0"
                                      d="m67.2 295.1.4-.1.1.7 1.7-.4 1.8.1 1.3.1 1.5-1.6 1.6-1.5 1.4-1.5.4.8.3 1.9h-1.1l-.2 1.6.4.3-1 .5v1l-.6 1-.1.9-.4.5-6.6-1.2-.8-2.4-.1-.7z">
                                </path>
                                <path id="asia_svg__AF" class="asia_svg__st0"
                                      d="m88.3 266.4 2.2 1 1.6-.4.5-1.2 1.7-.4 1.2-.8.4-2.2 1.8-.5.3-1 1 .7.7.1h1.2l1.7.6.7.3 1.6-.9.7.5.7-1.2 1.3.1.3-.4.2-1.1.9-1 1.2.6-.2.9.7.1-.2 2.3.9.9.8-.6 1-.3 1.4-1.2 1.5.2h2.3l.4.8-1.3.3-1.1.5-2.5.3-2.4.6-1.3 1.2.5 1.1.3 1.3-1.1 1.1.1 1-.6 1-2.1-.1.9 1.7-1.4.7-.9 1.6.1 1.5-.9.7-.8-.2-1.7.3-.2.7h-1.6l-1.2 1.4-.1 2.1-2.9 1-1.5-.2-.4.5-1.3-.3-2.2.4-3.7-1.3 2-2.3-.2-1.6-1.7-.4-.2-1.6-.7-2.1.9-1.4-1-.4.6-1.9 1.1-3.1z">
                                </path>
                                <path id="asia_svg__BD" class="asia_svg__st0"
                                      d="M157.2 300.3v1.7l-.8-.4.1 1.9-.6-1.2-.1-1.2-.4-1.1-.9-1.4-2-.1.2 1-.7 1.3-.9-.5-.3.4-.6-.3-.8-.2-.3-1.9-.8-1.8.4-1.4-1.3-.6.5-.9 1.4-.9-1.6-1.3.8-1.6 1.7 1 1 .1.2 1.7 2.1.3h2l1.3.4-1 2-1 .1-.7 1.4 1.2 1.2.4-1.5h.6l.9 3.8z">
                                </path>
                                <path id="asia_svg__BN" class="asia_svg__st0"
                                      d="m204.4 339.7.9-.8 1.9-1.2-.1 1.1-.1 1.4-1-.1-.5.7-1.1-1.1z">
                                </path>
                                <path id="asia_svg__BT" class="asia_svg__st0"
                                      d="m155.1 286.6.9.8-.2 1.5-1.8.1-1.8-.2-1.4.4-2-.9v-.5l1.4-1.8 1.2-.6 1.6.6 1.2.1.9.5z">
                                </path>
                                <path id="asia_svg__CN" class="asia_svg__st0"
                                      d="m196.9 304.9.5.9-1 1-.5 1.3-1.9 1.1-1.8-.7-.1-2 1.1-1 2.4-.6h1.3zm49.5-75.5-1.9 1.3h-3.3l-.9-3.1-2.6-2.4-3.8-1.1-.8-3.3-.8-2.1-.8-1.5-1.4-3.6-1.9-1.3-3.3-1.1-2.9.1-2.7.7-1.8 1.8 1.2.9v2l-1.2 1.1-2 3.7v1.5l-3.1 2.1-2.6-1.3-1.1 2.5-1.5 3.3.6 1.3 1.2-.4 2.2.5 1.7-1.2 1.8 1 2 2.3-.2 1.1-1.7-.4-3.2.4-1.5.9-1.6 2.1-3.3 1.2-2.2 1.6-2.2-.6-1.2-.3-1.1 2 .7 1.2.4 1-1.5 1-1.6 1.6-2.6 1-3.3.1-3.5 1-2.5 1.6-1-.9H181l-3.2-1.8-2.2-.4-2.9.4-4.5-.7-2.4.1-1.3-1.8-1-2.8-1.4-.3-2.6-1.9-3-.4-2.6-.5-.8-1.4.8-3.7-1.9-2.5-3.1-1.2-1.8-1.7-.6-2.3-.9.3-1.7 2.2-1.8.3-.1 3.3-1.2 1.5-4.3-1.1-1.6 5.7-1.1.7-4.3 1.2 2 5.3-1.5.8.2 1.7-.3.7-3.5 1.6-.8 1.2-2.8.3-.8 1.8-2.3-.4-1.5.6-2.1 1.4.3.7-.6.6.6 2.6.7-.3 1.3.6-.1 1.1.3 1.6.4.8 1.6 1.3.6 2.1 3.5 1h.1l3-1.1 2.2 1.1-.7 2.2-1.2 1.7-1 .1-.1 1.4.9 1.3-.1 1.3-1.6-.3.6 2.8 2.1 1.6 3 1.8.9-.6 1.8.8 2.2 1.6 1.2.4.7 1.2 1.7.5 1.8 1.1 2.5.6 2.6.2 1.3-.5.2 1.9 1.4-1.8 1.2-.6 1.6.6 1.2.1 1 .7 1.8-.3 2-1.8 2.5-1.6 1.8.6 1.6-1.1 1 1.6-.7 1 2.4.4 1.3-.2.7 1.5 1 .6.1 1.9-.1 2-2.1 2-.5 2.3 2.3-.4.5 2.2 1.4.5-.6 2 1.6.9.9.4 1.6-.7.1 1 .2.5 1.2.1-.3-2.7 1.1-.3 1.2-.6h1.7l2.1-.3 1.9-1.3 1.1.9 2 .4-.3 1.4 1 1 2.2.6 1-.4 2.9.7-.5.9.6 1.7 1.2-.1.7-2.5 2.3-.4 3.1-1.2 1.2-1.2.8.8 1.3-1 2.5-.3 3-2 3-2.2 2-2.9 1.8-3.2 1.6-2.7 1.2-.2.6-2 .3-2-1.3-.8-.5-1.4 1.4-.7v-1.9l-1.5-2-1.3-2.4-.9-2.6-2.4-1.5 1.1-1.9 2.1-1.4 1-1.5 3.1-.8-.4-1.4-1.4-.1-1.9-1.1-2.5 2-1.7-.8-.1-1.2-1.8-.5-1.2-1.9 1.1-1.3 2.1-.1 1.4-1.8 2.5-2 1.9-1 1.2 1.5-1.7 1.9.5 1.1-1.2 1.3 2.4-.8 1.6-1.3 3.1-.8 1.8-1.8 2.4-1.5 1.5-2.1 1 .9 1.9.1-.3-1.5 3.4-1.3.9-1.7 1.4 1.7v-1.5l1.1-.1.3-3.6-.6-2.6 1.9-1.1 2.7.5 1.5-3 .7-3.5.9-1.2 1.1-2.9-3.4 1.4z">
                                </path>
                                <path id="asia_svg__ID" class="asia_svg__st0"
                                      d="M218.7 371.9h-.9l-2.9-1.5 2-.4 1.1.7.8.7-.1.5zm8.1-.2-1.9.5-.3-.3.2-.7.9-1.3 2.2-.9.2.4v.7l-1.3 1.6zm-14.3-4.5.8.6 1.4-.2.5.9-2.5.4-1.5.3H210l.7-1.3h1.2l.6-.7zm11 0-.3 1.2-3.3.6-2.9-.3v-.8l1.7-.5 1.4.7 1.5-.2 1.9-.7zm-31.3-2.9 4.2.2.5-.9 4.1 1.1.8 1.4 3.3.4 2.7 1.3-2.5.8-2.4-.9-2 .1-2.3-.2-2-.4-2.5-.8-1.6-.2-.9.3-4-.9-.4-.9-2-.2 1.5-2.1 2.7.1 1.8.9.9.2.1.7zm57.2-1.2-1.1 1.5-.2-1.6.4-.8.5-.7.5.6-.1 1zm-16.4-6-.8.7-1.5-.4-.4-.9 2.2-.1.5.7zm7-.8.8 1.7-1.8-1-1.8-.2-1.2.1-1.5-.1.5-1.2 2.7-.1 2.3.8zm8.1-4.3.6 3.5 2.3 1.3 1.8-2.3 2.5-1.3h1.9l1.9.8 1.6.8 2.4.4v14.3l-2-1.8-2.2-.4-.5.6-2.8.1.9-1.8 1.4-.6-.6-2.4-1.1-1.8-4.2-1.9-1.8-.2-3.3-2-.6 1.1-.8.2-.5-.8v-.9l-1.7-1.1 2.4-.8h1.6l-.2-.6h-3.2l-.9-1.3-2-.4-.9-1.1 3-.5 1.1-.7 3.5.9.4.7zm-19.5-5.6-1.8 2.2-1.6.4-2.1-.4-3.6.1-1.9.3-.3 1.6 2 1.9 1.2-1 4.1-.7-.2 1-1-.3-1 1.3-1.9.8 2.1 2.8-.4.7 2 2.5v1.4l-1.2.6-.9-.8 1.1-1.8-2.1.8-.5-.6.3-.8-1.6-1.3.2-2.1-1.5.7.2 2.5.1 3.1-1.4.3-.9-.6.6-2-.3-2.1h-.9l-.7-1.5.9-1.4.3-1.7 1.1-3.3.5-.9 1.9-1.6 1.7.6 2.8.3 2.5-.1 2.2-1.6v.7zm7.5.7-.1 1.9-1.1-.2-.3 1.3.9 1.1-.6.3-.9-1.4-.6-2.8.4-1.7.7-.8.2 1.2 1.3.2.1.9zm-23.6-1.5 2.5 2-2.6.3-.7 1.5.1 2-2.1 1.5v2.2l-.8 3.3-.3-.8-2.5 1-.9-1.3-1.6-.1-1.1-.7-2.6.8-.8-1.1-1.4.1-1.8-.2-.3-2.9-1.1-.6-1.1-1.9-.3-1.9.3-2 1.3-1.4.4 1.5 1.5 1.2 1.4-.4 1.4.2 1.3-1.1 1-.2 2.1.6 1.8-.5 1.1-3 .8-.8.8-2.5h2.5l1.9.4-1.2 2 1.6 2.1-.6.7zM186 362.3h-2.4l-1.8-1.8-2.8-1.8-.9-1.3-1.7-1.8-1.1-1.6-1.7-3-1.9-1.8-.6-1.9-.8-1.7-2-1.4-1.1-1.9-1.6-1.2-2.3-2.4-.2-1.1 1.4.1 3.4.4 1.9 2.1 1.7 1.5 1.2.9 2.1 2.3h2.2l1.8 1.5 1.3 1.8 1.7 1-.9 1.8 1.3.8.8.1.4 1.5.8 1.2 1.6.2 1.1 1.4-.5 2.7-.4 3.4z">
                                </path>
                                <path id="asia_svg__IL" class="asia_svg__st0"
                                      d="m32.5 274.1-.4.8-.8-.4-.5 1.7.5.3-.6.4-.1.7 1-.4.1 1-1.1 4-1.4-4.3.6-.8-.1-.1.6-1.2.4-2 .3-.7H31.8l.2-.5h.6v1.1l-.1.4z">
                                </path>
                                <path id="asia_svg__IN" class="asia_svg__st0"
                                      d="m167.6 286.3-.2-.9-2.4-.4.7-1-1-1.5-1.6 1-1.8-.6-2.5 1.6-2 1.8-1.8.3.9.8-.2 1.5-1.8.1-1.8-.2-1.4.4-2-.9v-.5l-.2-1.9-1.3.5-.2 1.1.3 1.6-.2 1h-1.8l-2.6-.6-1.7-.2-1.3-1.2-3-.3-2.9-1.4-2.1-1.2-2.1-.9.9-2.3 1.4-1.1-3-1.8-2.1-1.6-.6-2.8 1.6.3.1-1.3-.9-1.3.1-1.4 1-.1 1.2-1.7.7-2.2-2.2-1.1-3 1.1h-.1.1l-3.6-1.1-.6-2.1-1.6-1.3-1.3.3-1.1.5-1 .1-.1.1-2.4 1.8.3.9h.7l2.4 2-1.5 1.3.5 3.7 1.9.8h.1l1.8 1.3-1.9 1.5v1.8l-2.1 2.5-1.4 2.5-2.3 2.6-2.5-.2-2.4 2.6 1.4 1.1.2 1.9 1.2 1.2.4 2.1h-4.8l-1.5 1.6 2.6 2 .6.9-1.1.9 2.9 2.8 1.5.3 3.2-1.4.4 2.2v2.8l.7 2.9.9 4.4 2 3.1.4 1.4.5 2.8 1.2 2.1.8 1 .8 2.2 1 3.1 2.1 2.1.9-.6.7-1.5 2-.6-.7-.7 1-1.7 1.1-.1v-3.8l.9-2.1-.1-1.9-.5-2.9.7-1.7 1-.1 2-.8 1.1-.6v-1l2.2-1.5 1.6-1.4 2.5-2.7 3.1-1.6 1.2-1.4-.1-1.8 2.7-.5h1.5l.3-.9-.3-1.9-.8-1.8.4-1.4-1.3-.6.5-.9 1.4-.9-1.6-1.3.8-1.6 1.7 1 1 .1.2 1.7 2.1.3h2l1.3.4-1 2-1 .1-.7 1.4 1.2 1.2.4-1.5h.6l1.1 3.7 1.1-.6-.2-1 .5-.8.1-2.5 1.7.5 1-2 .1-1.2 1.2-2-.1-1.4 2.8-1.7 1.6.4-.2-1.5.8-.1z">
                                </path>
                                <path id="asia_svg__IQ" class="asia_svg__st0"
                                      d="m53.8 265.5 1.4.8.2 1.6-1.1.9-.5 2.1 1.5 2.5 2.7 1.4 1.1 2-.4 1.9h.7v1.4l1.2 1.3-1.3-.1-1.5-.2-1.6 2.4-4.1-.2L46 278l-3.3-1.8-2.6-.7-.9-3.2 4.9-2.7.8-3.2-.2-2 1.2-.7L47 262l.9-.4 2.5.4.8.7 1-.5 1.6 3.3z">
                                </path>
                                <path id="asia_svg__IR" class="asia_svg__st0"
                                      d="m72.4 262.2 1.9-.5 1.6-1.6 1.5.1 1-.5 1.6.3 2.4 1.4 1.7.3 2.5 2.4 1.6.1.2 2.3-.9 3.3-.6 1.9 1 .4-.9 1.4.7 2.1.2 1.6 1.7.4.2 1.6-2 2.3 1.1 1.3.9 1.5 2.1 1.1.1 2.2 1 .4.2 1.1-3.2 1.3-.8 2.8-4.1-.7-2.4-.6-2.5-.3-.9-3-1-.4-1.7.4-2.2 1.2-2.7-.8-2.2-1.9-2.1-.7-1.5-2.4-1.6-3.3-1.2.4-1.4-.8-.8 1-1.2-1.3v-1.4H59l.4-1.9-1.1-2-2.7-1.4-1.5-2.5.5-2.1 1.1-.9-.2-1.6-1.4-.8-1.4-3.2-1.2-2.2.4-.9-.7-3.2 1.5-.8.3 1.1 1.1 1.3 1.5.4.8-.1 2.6-2.1.8-.2.6.8-.7 1.4 1.4 1.5.5-.1.7 2 2.1.6 1.5 1.4 3.1.5 3.4-.7v-.7z">
                                </path>
                                <path id="asia_svg__JO" class="asia_svg__st0"
                                      d="m32.1 274.9.4-.8 2.4 1 4.3-2.8.9 3.2-.4.4-4.4 1.3 2.2 2.5-.7.4-.4.9-1.7.3-.5.9-1 .8-2.4-.4-.1-.4 1.1-4-.1-1 .3-.7v-1.6z">
                                </path>
                                <path id="asia_svg__JP" class="asia_svg__st0"
                                      d="m249.2 270.3.3.9-1.2 1.6-.9-.8-1.1.6-.6 1.5-1.4-.7v-1.2l1.2-1.6 1.2.3.9-1.1 1.6.5zm13.8-8-.8 2.2.4 1.4-1.1 1.9-2.8 1.2-3.9.2-3.1 3-1.5-1-.1-2-3.8.6-2.6 1.2h-2.6l2.2 1.9-1.5 4.4-1.4 1.1-1.1-1 .5-2.3-1.4-.7-.9-1.8 2.1-.8 1.1-1.6 2.2-1.4 1.6-1.8 4.4-.8 2.3.5 2.3-4.8 1.5 1.3 3.2-2.7 1.2-1.1 1.4-3.4-.4-3.2.9-1.8 2.3-.5 1.2 4-.1 2.3-2 2.8.3 2.7zm6.5-20.2 1.5.6 1.5-1.3.5 3.4-3.2.8-1.9 2.9-3.4-2-1.2 3.2h-2.4l-.3-2.9 1.1-2.3 2.3-.2.6-4.2.6-2.4 2.6 3.2 1.7 1.2z">
                                </path>
                                <path id="asia_svg__KG" class="asia_svg__st0"
                                      d="m109.7 247.8.5-1.3 1.4-.4 3.6 1 .3-1.7 1.2-.6 3.1 1.3.8-.3 3.6.1 3.2.3 1.1 1.1 1.4.4-.3.7-3.5 1.6-.8 1.2-2.8.3-.8 1.8-2.3-.4-1.5.6-2.1 1.3.3.7-.6.6-4.1.4-2.7-.9-2.4.2.2-1.6 2.4.5.8-.9 1.7.3 2.8-2.1-2.6-1.5-1.6.7-1.6-1.1 1.8-1.9-.5-.4z">
                                </path>
                                <path id="asia_svg__KH" class="asia_svg__st0"
                                      d="m181 326.3-.9-1.2-1.1-2.3-.5-2.7 1.4-1.9 2.8-.4 2.1.3 1.8.9 1-1.6 1.9.8.5 1.5-.3 2.7-3.7 1.7 1 1.4-2.3.2-1.9.9-1.8-.3z">
                                </path>
                                <path id="asia_svg__KP" class="asia_svg__st0"
                                      d="m240.4 247.4.3.5-.8-.2-1 1-.7 1 .1 2.1-1.1.6-.4.5-.8.8-1.5.5-.9.8-.1 1.2-.3.3.9.5 1.2 1.2-.3.7-.9.2-1.5.1-.9 1.2-1-.1-.1.2-1.1-.5-.3.5-.6.2-.1-.5-.6-.2-.6-.4.6-1.2.5-.3-.2-.5.6-1.5-.1-.5-1.3-.3-1-.8 1.8-1.8 2.4-1.5 1.5-2.1 1 .9 1.9.1-.3-1.5 3.4-1.3.9-1.7 1.4 1.8z">
                                </path>
                                <path id="asia_svg__KR" class="asia_svg__st0"
                                      d="m235.4 258.3 1.9 3.3.5 1.8v3.1l-.8 1.5-2 .5-1.7 1.1-2 .2-.2-1.4.4-2-1-2.8 1.6-.5-1.5-2.3.1-.2 1 .1.9-1.2 1.5-.1.9-.2.4-.9z">
                                </path>
                                <path id="asia_svg__KW" class="asia_svg__st0"
                                      d="m59.4 281.1.5 1.1-.2.6.7 1.9-1.5.1-.5-1.2-2-.2L58 281l1.4.1z">
                                </path>
                                <path id="asia_svg__KZ" class="asia_svg__st0"
                                      d="m109.7 247.8-1.3.5-2.9 2-1 2.1h-.8l-.6-1.4-2.8-.1-.4-2.4h-1.1l.2-3-2.6-2.2-3.8.2-2.6.4-2.1-2.7-1.8-1.2-3.4-2.2-.4-.3-5.6 1.8.1 11-1.1.1-1.5-2.3-1.5-.8-2.5.6-1 1-.1-.7.5-1.2-.4-1-2.5-1-1-2.7-1.2-.8-.1-1 2.1.3.1-2.2 1.9-.5 1.9.5.4-3.1-.4-2-2.2.2-1.9-.8-2.5 1.4-2 .7-1.1-.5.2-1.6-1.4-2.2-1.6.1-1.9-2.2 1.3-2.5-.6-.7 1.7-3.7 2.3 2 .3-2.5 4.5-3.8 3.4-.1 4.8 2.4 2.6 1.4 2.3-1.5 3.5-.1 2.8 1.8.6-1 3.1.1.6-1.6-3.6-2.4 2.1-1.7-.4-1 2.1-.9-1.6-2.5 1-1.3 8.2-1.3 1.1-.9 5.5-1.4 2-1.6 3.9.8.7 3.9 2.3-.9 2.8 1.3-.2 2 2.1-.2 5.5-3.5-.8 1.2 2.8 2.9 4.9 9 1.2-1.8 3 2 3.1-.9 1.2.6 1.1 2 1.5.7.9 1.4 2.8-.5 1.2 2.1-1.7 2.2-1.8.3-.1 3.3-1.2 1.5-4.3-1.1-1.6 5.7-1.1.7-4.3 1.2 2 5.3-1.5.8.2 1.7-1.4-.4-1.1-1.1-3.2-.3-3.6-.1-.8.3-3.1-1.3-1.2.6-.3 1.7-3.6-1-1.4.4-.8 1.5z">
                                </path>
                                <path id="asia_svg__LA" class="asia_svg__st0"
                                      d="m184.7 318.1.7-1 .1-1.9-1.8-2-.1-2.2-1.7-1.9-1.7-.2-.4.8-1.3.1-.7-.4-2.3 1.4-.1-2 .5-2.4-1.5-.1-.1-1.4-1-.7.5-.9 1.9-1.5.2.5 1.2.1-.3-2.7 1.1-.3 1.3 1.9 1 2.1h2.7l.9 2-1.4.6-.6.8 2.6 1.4 1.8 2.7 1.4 2 1.7 1.6.6 1.6-.4 2.2-1.9-.8-1 1.6-1.9-1z">
                                </path>
                                <path id="asia_svg__LB" class="asia_svg__st0"
                                      d="M32.7 272.6h-.6l-.2.5h-.7l.8-2.1 1.1-1.9v-.1l1 .1.4 1-1.2 1-.6 1.5z">
                                </path>
                                <path id="asia_svg__LK" class="asia_svg__st0"
                                      d="m133.4 333.1-.3 2.3-.9.6-1.9.5-1-1.7-.4-3.1 1-3.6 1.5 1.2 1 1.5 1 2.3z">
                                </path>
                                <path id="asia_svg__MM" class="asia_svg__st0"
                                      d="m172.3 304.7-1.3 1-1.5.1-1 2.5-.9.4 1.1 2 1.4 1.7.9 1.5-.8 2-.8.4.5 1.1 1.5 1.8.2 1.2v1l.9 2-1.2 2.1-1.1 2.3-.2-1.6.7-1.7-.7-1.3.2-2.4-.9-1.2-.7-2.7-.6-2.9-.9-1.9-1.4 1.1-2.5 1.6-1.2-.2-1.4-.5.8-2.8-.5-2.1-1.7-2.6.3-.8-1.3-.3-1.6-1.9-.1-1.9.8.4v-1.7l1.1-.6-.2-1 .5-.8.1-2.5 1.7.5 1-2 .1-1.2 1.2-2-.1-1.4 2.8-1.7 1.6.4-.2-1.5.8-.5-.2-.9 1.3-.2.7 1.5 1 .6.1 1.9-.1 2-2.1 2-.3 2.8 2.3-.4.5 2.2 1.4.5-.6 2 1.6.9 1 .4 1.6-.7.1 1-1.9 1.5-.5.9-1.3.6z">
                                </path>
                                <path id="asia_svg__MN" class="asia_svg__st0"
                                      d="m146.5 225.7 2.3-.6 4.2-2.9 3.3-1.6 1.9 1.1h2.3l1.5 1.6 2.2.1 3.2.9 2.1-2.4-.9-2 2.3-3.6 2.5 1.5 2 .4 2.6.9.4 2.6 3.1 1.4 2.1-.6 2.8-.4 2.2.5 2.1 1.6 1.3 1.7h2l2.8.5 2-.8 2.9-.6 3.2-2.4 1.3.4 1.1 1.1 2.6-.3-1.1 2.5-1.5 3.3.6 1.3 1.2-.4 2.2.5 1.7-1.2 1.8 1 2 2.3-.2 1.1-1.7-.4-3.2.4-1.5.9-1.6 2.1-3.3 1.2-2.2 1.6-2.2-.6-1.2-.3-1.1 2 .7 1.2.4 1-1.5 1-1.6 1.6-2.6 1-3.3.1-3.5 1-2.5 1.6-1-.9h-2.6l-3.2-1.8-2.2-.4-2.9.4-4.5-.7-2.4.1-1.3-1.8-1-2.8-1.4-.3-2.6-1.9-3-.4-2.6-.5-.8-1.4.8-3.7-2-2.5-3.1-1.2-1.9-1.8-.5-2.3z">
                                </path>
                                <path id="asia_svg__MY" class="asia_svg__st0"
                                      d="m175.7 336 .2 1.1 1.4-.3.7-.9.5.2 1.3 1.3.9 1.5.1 1.5-.2 1 .2.7.2 1.3.8.6.9 1.9v.7l-1.6.1-2.1-1.6-2.6-1.7-.3-1.1-1.3-1.5-.3-1.8-.8-1.2.2-1.6-.5-.9.4-.4 1.9 1.1zm38.4 3.8-1.6.7-1.9-.4h-2.5l-.8 2.5-.8.8-1.1 3-1.8.5-2.1-.6-1 .2-1.3 1.1-1.4-.2-1.4.4-1.5-1.2-.4-1.5 1.6.7 1.7-.4.4-1.8.9-.4 2.6-.5 1.6-1.7 1.1-1.4 1 1.1.5-.7 1 .1.1-1.4.1-1.1 1.7-1.5 1.1-1.7h.9l1.1 1.1.1 1 1.4.6 1.8.7-.2.9-1.5.1.6 1z">
                                </path>
                                <path id="asia_svg__NP" class="asia_svg__st0"
                                      d="m147.3 286.3-.2 1.1.3 1.6-.2 1h-1.8l-2.6-.6-1.7-.2-1.3-1.2-3-.3-2.9-1.4-2.1-1.2-2.1-.9.9-2.3 1.4-1.1.9-.6 1.8.8 2.2 1.6 1.2.4.7 1.2 1.7.5 1.8 1.1 2.5.6 2.5-.1z">
                                </path>
                                <path id="asia_svg__OM" class="asia_svg__st0"
                                      d="m83.2 302.5-.8 1.6-1-.1-.5.6-.4 1.2.3 1.5-.2.3h-1l-1.4.9-.2 1.1-.5.5h-1.4l-.9.6v.9l-1.1.6-1.2-.2-1.5.8-1 .1-.7-1.6-1.7-3.8 6.6-2.3 1.5-4.7-1-1.7.1-1 .6-1v-1l1-.5-.4-.3.2-1.6h1.1l1 1.6 1.3 1 1.6.3 1.3.4 1 1.4.6.8.8.3v.5l-.8 1.4-.4.7-.9.7zm-5.4-11.4-.3.4-.4-.8.6-.8.3.2-.2 1z">
                                </path>
                                <path id="asia_svg__PH" class="asia_svg__st0"
                                      d="m231.1 331.2.2 1.5.1 1.2-.7 2-.8-2.2-1 1.1.7 1.6-.6 1-2.6-1.3-.6-1.6.7-1-1.4-1-.7.9-1-.1-1.6 1.2-.4-.6.9-1.9 1.4-.6 1.2-.8.8 1 1.7-.6.4-1 1.5-.1-.1-1.7 1.8 1 .2 1.1-.1.9zm-5.3-4.2-.8.7-.7 1.4-.7.7-1.4-1.5.5-.6.5-.6.2-1.4 1.2-.1-.4 1.5 1.6-2.1v2zm-12 2.2-2.9 2.1 1.1-1.5 1.6-1.4 1.3-1.5 1.1-2.2.4 1.8-1.4 1.2-1.2 1.5zm7.4-5.7 1.3.7h1.4v.9l-1 .9-1.4.7-.1-1 .2-1.1-.4-1.1zm8-.6.6 2.5-1.7-.6v.7l.5 1.4-1 .5-.1-1.6-.7-.1-.3-1.3 1.3.2v-.8l-1.3-1.7h2.1l.6.8zm-8.7-2.1-.6 1.9-.9-1.1-1.1-1.7 1.9.1.7.8zm-.5-12.3 1.4.7.7-.6.2.6-.4 1 .7 1.6-.6 1.9-1.3.7-.3 1.8.5 1.8 1.2.2 1-.3 2.7 1.2-.2 1.2.7.5-.2 1-1.7-1.1-.8-1.2-.6.8-1.4-1.3-2 .3-1.1-.5.1-.9.7-.6-.7-.5-.3.8-1.1-1.3-.3-1-.1-2.2.9.7.2-3.6.7-2.1 1.4.4z">
                                </path>
                                <path id="asia_svg__PK" class="asia_svg__st0"
                                      d="m115.4 273.2-.5-3.7 1.5-1.3-2.4-2h-.7l-.3-.9 2.4-1.8.1-.1-1.5.2-2.4.6-1.3 1.2.5 1.1.3 1.3-1.1 1.1.1 1-.6 1-2.1-.1.9 1.7-1.4.7-.9 1.6.1 1.5-.9.7-.8-.2-1.7.3-.2.7h-1.6l-1.2 1.4-.1 2.1-2.9 1-1.5-.2-.4.5-1.3-.3-2.2.4-3.7-1.3 1.1 1.3.9 1.5 2.1 1.1.1 2.2 1 .4.2 1.1-3.2 1.3-.8 2.8 3.1-.3h3.6l4-.5 1.7 1.8.7 1.7 1.6.6 1.5-1.6h4.8l-.4-2.1-1.2-1.2-.2-1.9-1.4-1.1 2.4-2.6 2.5.2 2.3-2.6 1.4-2.5 2.1-2.5v-1.8l1.9-1.5-1.8-1.3h-.1l-2.1-.7z">
                                </path>
                                <path id="asia_svg__PS" class="asia_svg__st0"
                                      d="M32.1 274.9v1.6l-.3.7-1 .4.1-.7.6-.4-.5-.3.5-1.7.6.4z">
                                </path>
                                <path id="asia_svg__QA" class="asia_svg__st0"
                                      d="m65.6 293.9-.1-1.7.6-1.3.6-.3.7.8v1.4l-.5 1.4-.6.2-.7-.5z">
                                </path>
                                <path id="asia_svg__RU-asia" class="asia_svg__st0"
                                      d="m265.4 105.2 3.1 3 .3 2-3.3.1-4.5-.8-.4-.4 2.1-3.1 2.7-.8zm-81-40.8.6-4.5-5.6-6.5-1.6-.8-1.8 1.3-4 14.5 12.4-4zm97.5 34.1 2.5-3.3-5.5-2.2-4.1-1.3-.5 2.8 4.1 3.3 3.5.7zm66.6 28.6 2.9-.4 2.3-1.6.2-.9-3.2-2h-1.9l-.3.3-2.8 2.8.4 2.1 2.4-.3zm-86.2-29.9 8.1.2 1.7-6.4-7.9-4.7-5.8-.4-2.9 1.7-1.2 6.1 4.3 5.5 3.7-2zM158.7 51.7l3.6 4.5 6.1 3.3 4.8-1.4.5-10.6-5-12.5-4.3-7-4.7 3.2-5.7 9.2 3 2.6 1.7 8.7zM366.4 151l-5.9-.8.5 4-1.5-1.4.2-3.5-5.7-5.7-5.4-4.6-3.1-2.7-6.3-3-4.6.4-7-1.8-1 2.8 1.8 4-2.7 1.9-3.8-5.5-4.1.7-4.1-1.2-3.9.2-2.9 1.3-2.7-1.8.3-4.7-1.8-2.7-4.4-1.1-8.8 1.3-5.7-5.2-1.9-4.2-19.8-4.7-2.9 3.2 1.6 6.6-3.6-1-1.6 1.9-4.2-2.1-3.7 1.9-3.5-3.1-2.1 7.2-3.4-2.7-2.7-5.5 1.3-3-1-4.7-3.5-4h-3.5l-4.6-1.4-.1 5.8-9.2-1.1-.5-3.6-7-1.3-3.5 1.2-1 2-1.1-5-2 1.5-3.2-2-2.7-1.1 1.6-2.4 5.8-4.6 2.4-2.5.5-4.6-1.8-3.4-4.9-4.6-6.4-.1-2 2.3-.6-4.7-5-1.5 3-2.4-3.8-3.3L178 75l-2.1 4.2-.6 4.1-4-.2-4.9 4.9-1.8-2-5.7.8-.7 2.5-5.8 1.2-4.3 4.3-2.5.2-2.5 5.5 1.8 4.2-4.7 1-5.3-.3-3.8 1.6.2 8 1.9 6-4-4-4.5.4-3.7 2.8 1 5-2.3-1.2.9-6.8-1.1-4.1-1.1.2.5 5.2-3.9 4.7 2.8 5.5-1.7 6.5.5 3.5 2.4.5-1 4 1.3 3.3-1.9 2.7-.6 2.8-2.4 1.4-.9 2-2.5-.8 4.3-8 .9-3.9-2.4-3.7.5-8.6-.7-4.6-1.4-2.2 2.1-5.7-.5-4-5.8-2-1.6 1.5-1.4 6.6-4 6.2.1 2.1 1.2 5.1-.7 3 2.6.6.1 1.3 2.2 3.2-1.5 3.1-1.2-1.1.7 5.7-1.6 3.2-2.9 3-3.1 2.4-3.8 4.2-4.1 3.2-1.5 15.6-1 6.9-1.4 3.9-1.4 2.8-1.7 2.1-.4 1.9 1.6 1.4.2 1.7-1.3 2.1-2 .5-2.4.3 1 1.9.9 1.4 1.4 1.8 1-1.5 1.4-.9 1.5.8.6 1.4-1 1.1-.9 1.7.1 2.1 1.5.5.6 1.5.2.1 1.8-1.5-.4-1 2.1-.9-1.6-2.5 1-1.3 8.2-1.3 1.1-.9 5.5-1.4 2-1.6 3.9.8.7 3.9 2.3-.9 2.8 1.3-.2 2 2.1-.2 5.5-3.5-.8 1.2 2.8 2.9 4.9 9 1.2-1.8 3 2 3.1-.9 1.2.6 1.1 2 1.5.7.9 1.4 2.8-.5 1.2 2.1.9-.3 2.3-.6 4.2-2.9 3.3-1.6 1.9 1.1h2.3l1.5 1.6 2.2.1 3.2.9 2.1-2.4-.9-2 2.3-3.6 2.5 1.5 2 .4 2.6.9.4 2.6 3.1 1.4 2.1-.6 2.8-.4 2.2.5 2.1 1.6 1.3 1.7h2l2.8.5 2-.8 2.9-.6 3.2-2.4 1.3.4 1.1 1.1 2.6-.3 2.6 1.3 3.1-2.1v-1.5l2-3.7 1.2-1.1v-2l-1.2-.9 1.8-1.8 2.7-.7 2.9-.1 3.3 1.1 1.9 1.3 1.4 3.6.8 1.5.8 2.1.8 3.3 3.8 1.1 2.6 2.4.9 3.1h3.3l1.9-1.3 3.6-1-1.1 2.9-.9 1.2-.7 3.5-1.5 3-2.7-.5-1.9 1.1.6 2.6-.3 3.6-1.1.1v1.5l.3.5.3-1 2.9-2.2 1.4 1.5h1.4l2.9-1.8 1.4-1.8 3-3.5 3-3.6.7-2.2 3.3-4.7 1-5.4.2-4.1 1.7-3.5-.1-3.1-3.2-4.1-2.4-.2-1.4 1.9-2.1-.8-1.1-2.3-3.5-.5 8.4-9.2 7.1-8.1 7.2-1.3 6.7.7 2.7-2.1 3.4.7-.2 3.1 3.4-.4 4.9-1.1-1.8-2.6 5.5-7.5 5.7-1.6 1.8 5.6 5.6-5 1.3-3.8 2.7-.4-1.8 6.5-3.9 3.6-3.8 4.5-3.9 5.3-3.4.9-.1 1.9-1.9 2.4-1.1 5.4 1.2 8.3.9 5.2.8 2.4 3.2-3.3.7-3.6 3.3-.9.8-4.2 3.8-1.9-.9-1.6.9-3.2 2-.1.3-5.8-2.5-.9-.1-1.7 2.6-4.1.7-2.8 2.9.6 2.1-1.9 1 1.6 5.7-3.5 3.1 3 .8-2 3.2-2.7 3.4-3.2 1.9-.5 6.1-3.5 4.1 1 .6-1.2-.3-2-1-1.3-1.3-4.1-2-2.7 2.8.4 2.8-2.3 1.2-2.2-1-2.5 2.6-1.3-.5 2 1.2 1.9 2.5-.7 2.2.9.5 2.3 2.9 1.5 1.7 1.8 2.1.1.9-1.1.1-5 3.6-.5 2.2-2.3-4.2-5.4zm-95.3 75.8-2.2-6-.9-3.5.1-3.5-.8-3.5-.6-2.5-1 .5.9 1.7-2 1.7-.2 4.9 1.3 3.4-.1 4.6-.5 2.5.2 3.5-.2 3.1.4 2.7 1.4-2.4 1.7 1.9.1-2.2-2.1-3.3 1.3-4.8 3.2 1.2z">
                                </path>
                                <path id="asia_svg__SA" class="asia_svg__st0"
                                      d="m48 313.5-.3-1-.7-.7-.2-.9-1.1-.8-1.2-1.9-.6-1.9-1.5-1.6-1-.4-1.5-2.2-.2-1.6.1-1.4-1.3-2.6-1-.9-1.2-.5-.7-1.4.1-.5-.6-1.2-.6-.5-.9-1.8-1.3-2-1.1-1.7h-1.1l.3-1.4.1-.9.3-1 2.4.4 1-.8.5-.9 1.7-.3.4-.9.7-.4-2.2-2.5 4.4-1.3.4-.4 2.6.7L46 278l6.2 5.1 4.1.2 2 .2.5 1.2 1.5-.1.9 2.1 1.1.6.4.9 1.5 1 .1 1-.3.8.3.8.6.7.3.8.3.6.7.5.6-.2.4.9.1.6.8 2.4 6.6 1.2.4-.5 1 1.7-1.5 4.7-6.6 2.3-6.3.9-2 1-1.6 2.4-1 .4-.5-.8-.8.1-2.1-.2-.4-.2-2.5.1-.6.2-.9-.6-.6 1.1.2 1-.9.6z">
                                </path>
                                <path id="asia_svg__SY" class="asia_svg__st0"
                                      d="m39.2 272.4-4.3 2.8-2.4-1 .3-.4v-1.1l.5-1.4 1.2-1-.4-1-1-.1-.2-2 .5-1.1.6-.6.6-.6.1-1.5.7.5 2.4-.8 1.2.5h1.8l2.5-1h1.2l2.5-.4-1.1 1.7-1.2.7.2 2-.8 3.2-4.9 2.6z">
                                </path>
                                <path id="asia_svg__TH" class="asia_svg__st0"
                                      d="m179 322.8-2-1h-1.9l.3-1.8h-1.9l-.2 2.5-1.2 3.2-.7 2 .1 1.6 1.4.1.9 2 .4 1.9 1.2 1.3 1.3.3 1.1 1.1-.7.9-1.5.3-.2-1.1-1.8-1-.4.4-.9-.8-.4-1.1-1.2-1.2-1.1-1-.4 1.3-.4-1.2.2-1.4.6-2.1 1.1-2.3 1.2-2.1-.9-2v-1l-.2-1.2-1.5-1.8-.5-1.1.8-.4.8-2-.9-1.5-1.4-1.7-1.1-2 .9-.4 1-2.5 1.5-.1 1.3-1 1.2-.5 1 .7.1 1.4 1.5.1-.5 2.4.1 2 2.3-1.4.7.4 1.3-.1.4-.8 1.7.2 1.7 1.9.1 2.2 1.8 2-.1 1.9-.7 1-2.1-.3-2.8.4-1.4 1.9 1 2.5z">
                                </path>
                                <path id="asia_svg__TJ" class="asia_svg__st0"
                                      d="m109.8 253.6-.8.9-2.4-.5-.2 1.6 2.4-.2 2.7.9 4.1-.4.6 2.6.7-.3 1.3.6-.1 1.1.3 1.6h-2.3l-1.5-.2-1.4 1.2-1 .3-.8.6-.9-.9.2-2.3-.7-.1.2-.9-1.2-.6-.9 1-.2 1.1-.3.4-1.3-.1-.7 1.2-.7-.5-1.6.9-.7-.3 1.2-2.8-.5-2.1-1.6-.7.6-1.2 1.8.1 1-1.6.7-1.8 2.9-.7-.5 1.3.3.8h1.3z">
                                </path>
                                <path id="asia_svg__TL" class="asia_svg__st0"
                                      d="m228 369 .3-.5 1.9-.5 1.5-.1.7-.3.8.3-.8.6-2.3 1-1.8.6v-.7l-.3-.4z">
                                </path>
                                <path id="asia_svg__TM" class="asia_svg__st0"
                                      d="m88.3 266.4-.2-2.3-1.6-.1-2.5-2.4-1.7-.3-2.4-1.4-1.6-.3-1 .5-1.5-.1-1.6 1.6-1.9.5-.4-1.9.3-2.9-1.7-1 .6-1.9-1.5-.2.5-2.4 2.1.7 1.9-.9-1.6-1.7-.6-1.7-1.8.7-.2 2.1-.7-1.9 1-1 2.5-.6 1.5.8 1.5 2.3 1.1-.1h2.5l-.4-1.5 1.9-1 1.8-1.7 3 1.6.2 2.3.8.6 2.4-.1.7.5 1.1 3 2.5 2 1.4 1.3 2.3 1.4 2.9 1.2-.1 1.7-.7-.1-1-.7-.3 1-1.8.5-.4 2.2-1.2.8-1.7.4-.5 1.2-1.6.4-2.3-1.1z">
                                </path>
                                <path id="asia_svg__TW" class="asia_svg__st0"
                                      d="m221 294.8-1.3 3.8-.9 1.9-1.2-2-.2-1.8 1.3-2.3 1.8-1.8 1 .7-.5 1.5z">
                                </path>
                                <path id="asia_svg__UZ" class="asia_svg__st0"
                                      d="m100 261.7.1-1.7-2.9-1.2-2.3-1.4-1.4-1.3-2.5-2-1.1-3-.7-.5-2.4.1-.8-.6-.2-2.3-3-1.6-1.8 1.7-1.9 1 .4 1.5H77l-.1-11 5.6-1.8.4.3 3.4 2.2 1.8 1.2 2.1 2.7 2.6-.4 3.8-.2 2.6 2.2-.2 3h1.1l.4 2.4 2.8.1.6 1.4h.8l1-2.1 2.9-2 1.3-.5.6.3-1.8 1.9 1.6 1.1 1.6-.7 2.6 1.5-2.8 2.1-1.7-.3-.9.1-.3-.8.5-1.3-2.9.7-.7 1.8-1 1.6-1.8-.1-.6 1.2 1.6.7.5 2.1-1.2 2.8-1.7-.6-1.5-.3z">
                                </path>
                                <path id="asia_svg__VN" class="asia_svg__st0"
                                      d="m190.9 301.5-2.9 2-1.8 2.2-.5 1.6 1.7 2.4 2 3 2 1.4 1.3 1.8 1 4.2-.3 3.9-1.8 1.5-2.5 1.4-1.8 1.8-2.7 2-.8-1.4.6-1.5-1.6-1.3 1.9-.9 2.3-.2-1-1.4 3.7-1.7.3-2.7-.5-1.5.4-2.2-.6-1.6-1.7-1.6-1.4-2-1.8-2.7-2.6-1.4.6-.8 1.4-.6-.9-2h-2.7l-1-2.1-1.3-1.9 1.2-.6h1.7l2.1-.3 1.9-1.3 1.1.9 2 .4-.4 1.4 1 1 2.4.8z">
                                </path>
                                <path id="asia_svg__YE" class="asia_svg__st0"
                                      d="m70.6 312.8-1.6.6-.4 1-.1.8-2.2 1-3.5 1.1-2 1.6-1 .1-.7-.1-1.3.9-1.4.4-1.8.1-.6.1-.5.6-.6.2-.3.6h-1.1l-.7.3-1.5-.1-.6-1.3.1-1.2-.4-.7-.4-1.7-.6-.9.4-.1-.2-1 .3-.4-.1-1 1-.7-.2-1 .6-1.1.9.6.6-.2 2.5-.1.4.2 2.1.2.8-.1.5.8 1-.4 1.6-2.4 2-1 6.3-.9 1.7 3.8 1 1.4z">
                                </path>
				</svg>
                        </div>
                    </div>
                    <div class="top-0 sm:absolute flex-col flex justify-center h-full w-full text-center">
                        <h3 class="gap-1 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-bold rounded-md text-white bg-everglade-600 hover:bg-everglade-500 w-fit mx-auto">
                            Explore Asia<!-- -->
                            <div class="" aria-hidden="true">→</div>
                        </h3>
                    </div>
                </a>
            </li>
            <li class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl locations sm:shadow-sm rounded-3xl hover:bg-gray-50 duration-300">
                <a href="/listings/locations/area/south-america" class="block mt-2 relative">
                    <div class="flex-shrink-0">
                        <div class="hidden sm:block md:h-56 h-48 md:w-56 w-48 mx-auto">
                            <svg id="southAmerica_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                 viewBox="0 0 380 380" style="enable-background:new 0 0 400 400" xml:space="preserve"
                                 class="w-full">
					<style>.southAmerica_svg__st0 {
                            fill: #ccc;
                            stroke: #fff;
                            stroke-width: .5
                        }</style>
                                <path id="southAmerica_svg__AR" class="southAmerica_svg__st0"
                                      d="m176.7 322.9-3 .2-1.6-1.9-1.9-.1h-3.4v-12l1.2 2.5 1.6 4 4 3.3 4.4 1.3-1.3 2.7zm1.7-137.8 1.8 2.5 1.2-2.7 3.6.1.6.7 5.7 5.5 2.6.6 3.8 2.6 3.3 1.3.4 1.6-3.2 5.3 3.2.9 3.5.6 2.5-.6 2.8-2.7.6-3 1.6-.7 1.6 2.1-.1 2.8-2.7 1.9-2.1 1.5-3.6 3.5-4.2 5-.8 2.9-.9 3.8v3.7l-.7.8-.2 2.5-.2 2.1 4 3.3-.4 2.7 2.1 1.7-.1 1.9-3 5.1-4.7 2.1-6.3.9-3.5-.4.7 2.5-.7 3 .6 2.1-1.9 1.5-3.3.6-3-1.5-1.2 1.1.4 4.2 2.1 1.2 1.7-1.3.9 2.3-2.9 1.3-2.5 2.7-.4 4.4-.8 2.3h-2.9l-2.5 2.1-.9 3.4 3.2 3.4 3 .9-1.1 4.2-3.7 2.7-2.1 5.7-2.9 1.9-1.2 2.3 1 5.2 2.1 2.9-1.3-.2-2.9-.8-7.6-.7-1.3-2.9v-3.7l-2.1.4-1.1-1.8-.2-5.2 2.3-2.1 1-3-.4-2.3 1.7-4 1.1-5.9-.4-2.6 1.3-.9-.4-1.7-1.5-.9 1-1.8-1.5-1.7-.7-5 1.2-.9-.6-5.1.8-4.2.9-3.6 1.9-1.5-1-4v-4l2.3-2.6-.1-3.3 1.8-3.7V225l-.8-.7-1.5-6.4 1.9-3.7-.4-3.5 1.1-3.3 2.1-3.4 2.3-2.3-.9-1.3.7-1.1-.1-5.7 3.4-1.7 1.1-3.6-.4-.9 2.6-3 4.8.7z">
                                </path>
                                <path id="southAmerica_svg__BO" class="southAmerica_svg__st0"
                                      d="m185 184.9-3.6-.1-1.2 2.7-1.8-2.5-4.2-.8-2.6 3-2.3.4-1.2-4.7-1.7-3.7 1-3.3-1.7-1.3-.4-2.3-1.6-2.3 2.1-3.5-1.3-2.7.7-1.1-.6-1.2 1.2-1.6.1-2.7.1-2.3.7-1.1-2.7-5.2 2.3.2 1.6-.1.7-1 2.8-1.2 1.7-1.2 4.2-.6-.4 2.3.4 1.2-.2 2.1 3.5 2.8 3.5.6 1.2 1.2 2.1.7 1.3.9h2.1l1.8 1 .1 1.9.6.9v1.3h-.9l1.2 3.8 6.1.1-.4 1.9.4 1.2 1.7.9.8 2.1-.6 2.6-.9 1.5.4 1.9-1 .7v-1l-2.9-1.7h-2.9l-5.5 1-1.5 2.9-.1 1.8-1.2 4-1-.4z">
                                </path>
                                <path id="southAmerica_svg__BR" class="southAmerica_svg__st0"
                                      d="m201.5 213.6 4.2-5 3.6-3.5 2.1-1.5 2.7-1.9.1-2.8-1.6-2.1-1.6.7.7-2.1.4-2.1v-1.9l-1.1-.6-1.2.6-1.1-.1-.4-1.3-.4-3.2-.6-1-2.1-.9-1.2.7-3.4-.7.2-4.6-.9-1.9 1-.7-.4-1.9.9-1.5.6-2.6-.8-2.1-1.7-.9-.4-1.2.4-1.9-6.1-.1-1.2-3.8h.9v-1.3l-.6-.9-.1-1.9-1.8-1h-2.1l-1.3-.9-2.1-.7-1.2-1.2-3.5-.6-3.5-2.8.2-2.1-.4-1.2.4-2.3-4.2.6-1.7 1.2-2.8 1.2-.7 1-1.6.1-2.3-.2-1.8.6-1.5-.4.2-4.8-2.6 1.9-2.8-.1-1.2-1.7-2.1-.2.7-1.3-1.8-1.9-1.3-2.8.8-.6v-1.3l1.9-.9-.4-1.7.8-1.1.2-1.5 3.6-2.1 2.6-.6.4-.4 2.8.1 1.5-8.6.1-1.3-.4-1.8-1.3-1.1v-2.3l1.8-.6.7.4.1-1.2-1.8-.4v-1.9l6.2.1 1-1.1.9 1 .6 1.8.6-.4 1.8 1.7 2.5-.2.6-1 2.3-.7 1.3-.4.4-1.3 2.3-.9-.4-.8-2.7-.2-.4-2.1.1-2.1-1.3-.8.6-.4 2.3.4 2.5.8.9-.8 2.3-.4 3.5-1.1L192 99l-.4-.9 1.4-.1.8.7-.4 1.3 1.1.4.7 1.5-.9 1.1-.6 2.7.8 1.6.2 1.5 1.9 1.5 1.6.1.4-.6 1-.1 1.5-.6 1-.8 1.8.2.8-.1 1.7.2.2-.7-.6-.6.4-.9 1.2.2 1.5-.4 1.8.7 1.3.7 1-.9.7.1.4.9 1.5-.2 1.2-1.2 1-2.3 1.9-2.9 1.1-.1.8 1.7 1.8 5.5 1.7.6.1 2.1-2.3 2.6 1 .9 5.7.4.1 3.2 2.3-2.1 4 1.1 5.2 1.9 1.6 1.8-.6 1.7 3.7-1 6.2 1.7 4.7-.1 4.6 2.6 4 3.5 2.5.9 2.7.1 1.1 1 1.1 4 .6 1.9-1.2 5.3-1.6 2.1-4.4 4.4-2.1 3.6-2.3 2.8-.8.1-.9 2.3.2 6.1-.9 5.1-.4 2.1-1 1.3-.6 4.4-3.2 4.4-.6 3.5-2.6 1.5-.8 2.1H247l-5 1.3-2.3 1.5-3.5 1-3.7 2.7-2.7 3.5-.4 2.6.6 1.9-.6 3.6-.7 1.7-2.3 2.1-3.5 6.4-2.8 2.9-2.1 1.7-1.5 3.6-2.1 2.1-.9-2.1 1.3-1.8-1.8-2.5-2.5-2.1-3.3-2.3-1.1.1-3.2-2.8-1.4.4z">
                                </path>
                                <path id="southAmerica_svg__CL" class="southAmerica_svg__st0"
                                      d="M166.8 309.2v12h3.4l1.9.1-1 2.3-2.7 1.7-1.6-.2-1.9-.4-2.3-1.7-3.3-.8-4-3-3.3-2.9-4.4-5.9 2.6 1.1 4.4 3.5 4.2 1.9 1.7-2.5 1-3.6 2.9-2.1 2.4.5zM168 183l1.2 4.7 2.3-.4.4.9-1.1 3.6-3.4 1.7.1 5.7-.7 1.1.9 1.3-2.3 2.3-2.1 3.4-1.1 3.3.4 3.5-1.9 3.7 1.5 6.4.8.7v3.5l-1.8 3.7.1 3.3-2.3 2.6v3.6l1 4-1.9 1.5-.9 3.6-.8 4.2.6 5.1-1.2.9.7 5 1.5 1.7-1 1.8 1.5.9.4 1.7-1.3.9.4 2.6-1.1 5.9-1.7 4 .4 2.3-1 3-2.6 2.3.2 5.2 1.1 1.8 2.1-.4v3.7l1.3 2.9 7.6.7 2.9.8h-2.8l-1.6 1.2-2.8 1.9-.6 5-1.3.1-3.6-1.7-3.6-3.6-4-2.9-1.2-3.3.9-2.9-1.6-3.3-.4-8.2 1.3-4.5 3.4-3.6-4.8-1.3 3-4 1.1-7.4 3.5 1.6 1.7-9-2.1-1.1-1 5.3-2.1-.6 1-6.1 1.1-7.6 1.5-2.8-.9-4-.2-4.5 1.3-.1 1.9-6.3 2.1-6.1 1.3-5.7-.7-5.5.9-3-.4-4.5 1.8-4.4.6-6.7 1-7.2 1-7.6-.2-5.5-.7-4.7 1.6-.9.9-1.7 1.6 2.3.4 2.3 1.7 1.3-1 3.3 1.8 3.3z">
                                </path>
                                <path id="southAmerica_svg__CO" class="southAmerica_svg__st0"
                                      d="m145.5 114.5-1.3-.8-1.6-1-.9.4-2.7-.4-.8-1.3-.6.1-3.2-1.8-.4-1 1.2-.2-.1-1.6.8-1.1 1.6-.2 1.3-2.1 1.2-1.7-1.1-.8.6-1.8-.7-2.9.7-.8-.5-2.5-1.2-1.7.4-1.6 1 .2.6-.9-.7-1.8.4-.4 1.5.2 2.3-2.3 1.2-.4v-1l.6-2.7 1.8-1.5 2.1-.1.2-.7 2.5.2 2.5-1.6 1.2-.7 1.6-1.6 1 .4.8.9-.6 1.1-2.1.6-.8 1.6-1.2.9-.9 1.2-.4 2.3-.9 1.9 1.6.2.4 1.5.7.7.2 1.2-.4 1.1.1.7.8.2.8 1.1 4-.4 1.8.4 2.3 2.7 1.2-.4 2.3.1 1.8-.4 1.1.6-.6 1.7-.7 1-.2 2.3.7 2.1.9.9.1.7-1.6 1.6 1.1.7.9 1.1.9 3.2-.6.4-.6-1.8-.9-1-1 1.1-6.2-.1v1.9l1.8.4-.1 1.2-.5-.2-1.8.6v2.3l1.3 1.1.4 1.8-.1 1.3-1.5 8.6-1.6-1.7-.9-.1 2.1-3.2-2.3-1.5-1.9.2-1.1-.6-1.8.8-2.3-.4-1.8-3.3-1.5-.8-1-1.5-2.1-1.5-.6.4z">
                                </path>
                                <path id="southAmerica_svg__EC" class="southAmerica_svg__st0"
                                      d="m130 124.8 1.7-2.4-.7-1.4-1.2 1.5-1.9-1.3.7-.9-.6-2.8 1.1-.4.6-1.9 1.2-2.1-.2-1.2 1.7-.7 2.1-1.2 3.2 1.8.6-.1.8 1.3 2.7.4.9-.4 1.6 1 1.3.8.4 2.3-1 1.8-3.5 3.3-3.8 1.2-1.9 2.7-.6 2.1-1.8 1.2-1.3-1.6-1.2-.4-1.3.2-.1-1.1.9-.8-.4-.9z">
                                </path>
                                <path id="southAmerica_svg__FK" class="southAmerica_svg__st0"
                                      d="m190.2 305.1 3.8-3 2.7 1.2 1.9-2.1 2.5 2.3-.9 1.8-4.2 1.6-1.5-1.8-2.7 2.3-1.6-2.3z">
                                </path>
                                <path id="southAmerica_svg__GF" class="southAmerica_svg__st0"
                                      d="m217.5 106.2-1.2 1.2-1.6.2-.4-.9-.7-.1-1 .9-1.3-.7.8-1.3.2-1.5.6-1.3-1.2-1.8-.2-2.1 1.7-2.7 1.1.4 2.3.8 3.4 2.7.6 1.2-1.9 2.8-1.2 2.2z">
                                </path>
                                <path id="southAmerica_svg__GY" class="southAmerica_svg__st0"
                                      d="m194.8 87.7 2.1 1.1 1.9 2.1.1 1.7 1.2.1 1.7 1.6 1.2 1.1-.4 2.8-1.9.8.1.7-.6 1.7 1.3 2.3h1l.4 1.8 1.9 2.7-.8.1-1.8-.2-1 .8-1.5.6-1 .1-.4.6-1.3-.2-1.9-1.5-.2-1.5-.8-1.6.6-2.7.9-1.1-.7-1.5-1.1-.4.4-1.3-.8-.7-1.7.1-2.1-2.3.9-.9-.1-1.5 1.9-.6.8-.6-1.1-1.1.2-1.1 2.6-2z">
                                </path>
                                <path id="southAmerica_svg__PE" class="southAmerica_svg__st0"
                                      d="m163.7 170-.9 1.7-1.6.8-3.2-1.9-.2-1.3-6.3-3.3-5.7-3.6-2.5-2.1-1.3-2.7.6-.9-2.7-4.2-3.2-5.9-2.9-6.3-1.2-1.5-1-2.3-2.5-2.1-2.3-1.2 1-1.3-1.6-3 1-2.1 2.5-2.1.4 1.3-.9.8.1 1.1 1.3-.2 1.2.4 1.3 1.6 1.8-1.2.6-2.1 1.9-2.7 3.8-1.2 3.5-3.3 1-2.1-.4-2.3.9-.4 2.1 1.5 1 1.5 1.5.8 1.8 3.3 2.3.4 1.8-.8 1.1.6 1.9-.2 2.3 1.5-2.1 3.2.9.1 1.6 1.7-2.8-.1-.4.4-2.6.6-3.6 2.1-.2 1.5-.8 1.1.4 1.7-1.9.9v1.3l-.8.6 1.3 2.8 1.8 1.9-.7 1.3 2.1.2 1.2 1.7 2.8.1 2.6-1.9-.2 4.8 1.5.4 1.8-.6 2.7 5.2-.7 1.1-.1 2.3-.1 2.7-1.2 1.6.6 1.2-.7 1.1 1.3 2.7-2 3.3z">
                                </path>
                                <path id="southAmerica_svg__PY" class="southAmerica_svg__st0"
                                      d="m185.6 185.7 1.2-4 .1-1.8 1.5-2.9 5.5-1h2.9l2.9 1.7v1l.9 1.9-.2 4.6 3.4.7 1.2-.7 2.1.9.6 1 .4 3.2.4 1.3 1.1.1 1.2-.6 1.1.6v1.9l-.4 2.1-.7 2.1-.6 3.2-2.8 2.7-2.5.6-3.5-.6-3.2-.9 3.2-5.3-.4-1.6-3.3-1.3-3.8-2.8-2.6-.6-5.7-5.5z">
                                </path>
                                <path id="southAmerica_svg__SR" class="southAmerica_svg__st0"
                                      d="m203 95.3 3.8.7.4-.6 2.6-.2 3.4.9-1.7 2.7.2 2.1 1.2 1.9-.6 1.3-.2 1.5-.8 1.3-1.8-.7-1.5.4-1.2-.2-.4.9.6.6-.2.7-1.7-.2-1.9-2.7-.4-1.8h-1l-1.3-2.3.6-1.7-.1-.7 1.9-.8.1-3.1z">
                                </path>
                                <path id="southAmerica_svg__UY" class="southAmerica_svg__st0"
                                      d="m201.5 213.6 2.1-.4 3.2 2.8 1.1-.1 3.3 2.3 2.5 2.1 1.8 2.5-1.3 1.8.9 2.1-1.3 2.3-3.6 2.1-2.3-.8-1.7.4-2.9-1.7-2.1.1-1.9-2.1.2-2.5.7-.8V220l.9-3.8.4-2.6z">
                                </path>
                                <path id="southAmerica_svg__VE" class="southAmerica_svg__st0"
                                      d="m158.2 76.8-.1.8-1.9.4 1 1.5v1.7l-1.3 1.8 1.2 2.5 1.3-.2.7-2.3-1-1.1-.1-2.3 4-1.3-.4-1.5 1.1-1 1.1 2.3h2.3l2.1 1.8.1 1h2.8l3.4-.4 1.8 1.5 2.3.4 1.8-1v-.8l4-.2h3.8l-2.7.9 1.1 1.5 2.5.1 2.3 1.6.6 2.6 1.7-.1 1.2.8-2.5 1.8-.2 1.1 1.1 1.1-.8.6-1.9.6.1 1.5-.9.9 2.1 2.3.4.9-1.1 1.2-3.5 1.1-2.3.4-.9.8-2.5-.8-2.3-.4-.6.4 1.3.8-.1 2.1.4 2.1 2.7.2.2.7-2.3.9-.4 1.3-1.3.4-2.3.7-.6 1-2.5.2-1.8-1.7-.9-3.2-.9-1.1-1.1-.7 1.6-1.6-.1-.7-.9-.9-.7-2.1.2-2.3.7-1 .6-1.7-1.1-.6-1.8.4-2.3-.1-1.2.4-2.3-2.7-1.8-.4-4 .4-.8-1.1-.8-.2-.1-.7.4-1.1-.2-1.2-.7-.7-.4-1.5-1.6-.2.9-1.9.4-2.3.9-1.2 1.2-.9.8-1.6 1.8-.7z">
                                </path>
				</svg>
                        </div>
                    </div>
                    <div class="top-0 sm:absolute flex-col flex justify-center h-full w-full text-center">
                        <h3 class="gap-1 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-bold rounded-md text-white bg-everglade-600 hover:bg-everglade-500 w-fit mx-auto">
                            Explore South America<!-- -->
                            <div class="" aria-hidden="true">→</div>
                        </h3>
                    </div>
                </a>
            </li>
            <li class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl locations sm:shadow-sm rounded-3xl hover:bg-gray-50 duration-300">
                <a href={{ route("listings-locations-proximity-wework") }} class="block mt-2 relative">
                <div class="flex-shrink-0">
                    <div class="hidden sm:block md:h-56 h-48 md:w-56 w-48 mx-auto">
                        <div class="text-center h-full flex flex-col justify-center">
                            <h3 class="text-lg font-bold font-display text-everglade-600 tracking-tight leading-12">
                                Locations near a <br> <br> <br> <br> <br> <span
                                    class="text-3xl font-serif text-black">Wework</span></h3>
                        </div>
                    </div>
                </div>
                <div class="top-0 sm:absolute flex-col flex justify-center h-full w-full text-center">
                    <h3 class="gap-1 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-bold rounded-md text-white bg-everglade-600 hover:bg-everglade-500 w-fit mx-auto">
                        Explore Near Weworks<!-- -->
                        <div class="" aria-hidden="true">→</div>
                    </h3>
                </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="max-w-screen-xl mx-auto my-10 px-4 ">
        <div class="flex items-center justify-between">
            <h2 class="font-serif tracking-tight sm:text-3xl text-xl py-2">Discover Our Latest Listings</h2>
            <a href="/listings"
               class="w-10 flex text-white items-center text-center h-10 rounded bg-everglade-600 hover:bg-everglade-500">
                <div class="w-full" aria-hidden="true">→</div>
            </a>
        </div>
            @include('components.listingGrid', ['listings' => $featuredListings])
        <div class="flex items-center justify-center mt-5">
            <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500"
               href="/listings">See all our Nomad Listings</a>
        </div>
    </div>
    <div class="max-w-screen-xl sm:my-20 mx-auto" id="how-it-works">
        <div class="mx-auto md:flex items-center w-full justify-between gap-x-10 sm:px-10 px-4">
            <div class="">
                <h2 class="font-display text-3xl lg:text-5xl text-black font-medium">
                    <span class="sr-only">Nomad Stay</span> A curated list of locations for remote workers</h2>
                <div
                    class="my-6 sm:space-y-6 space-y-2 font-display sm:text-lg tracking-tight text-gray-600 text-justify sm:max-w-lg mx-auto">
                    <p>Join a curated list of locations all across the globe. Our selection of <span
                            class="font-bold text-green-700">Airbnb listings </span>and <span
                            class="font-bold text-green-700"> select locations</span> have all been verified and fill
                        all the requirements for the modern day nomad.</p>
                    <p>We install the latest tech and insure the most comfortable setup for our community of nomads.
                        With our certification, you will attract the highest talent of remote workers to your
                        location.</p>
                    <div class="w-full flex mx-auto my-2 sm:justify-center">
                        <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-sm sm:text-base rounded-md text-white bg-everglade-600 hover:bg-everglade-500"
                           variant="solid" href="/pricing">
									<span>Get featured <span aria-hidden="true">→</span>
								</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <img
                    src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/pilot/bf876277655267.5c8f6539aac51.webp"
                    alt="Nomad setup with screen, chair and desk">
            </div>
        </div>
    </div>
    <div class="lg:grid lg:grid-cols-4 flex flex-col-reverse gap-y-10 max-w-screen-2xl mx-auto my-20">
        <div class="lg:col-span-2 col-span-7 mx-auto flex flex-col justify-center">
            <span class="rounded-full bg-everglade-600 text-sm text-white px-3 py-1 h-fit w-fit my-2">New</span>
            <div class="space-y-6">
                <div class="space-y-4">
                    <h2 class="text-black font-display font-bold sm:text-5xl text-4xl tracking-tight leading-8">
                        Introducing Boundra</h2>
                    <p class="sm:text-xl text-lg leading-5 text-gray-500 tracking-tight font-serif italic">An
                        apartment built for Remote Workers</p>
                </div>
            </div>
            <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 w-full bg-everglade-800 max-w-xs mt-5 font-light py-3 text-sm mx-auto lg:mx-0"
               href="https://boundra.com">Discover <span class="font-bold mx-1"> Boundra</span> →</a>
        </div>
        <div class="col-span-2">
            <img class="object-cover mx-auto w-full max-w-sm col-span-3 aspect-square align-middle"
                 alt="nomad setup with screen, chair and desk"
                 src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/pilot/f4b5e877655267.5c8e5635d97e8.webp"
                 decoding="async" data-nimg="future">
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto h-3/4" id="a-complete-setup">
        <div class="my-6 px-4">
            <h2 class="font-display text-3xl tracking-tight font-bold text-black sm:text-3xl">
                <p class="sr-only">A standard for remote working</p>A standard for remote working
            </h2>
            <h3 class="font-display text-xl sm:text-xl tracking-tight font-light text-gray-500">The latest tech in all
                our locations</h3>
        </div>
        <div class="grid grid-cols-7 mx-auto flex items-center gap-y-10">
            <div
                class="px-4 mx-auto font-medium flex flex-col gap-10 col-span-full md:col-span-2 w-full grid grid-cols-2 sm:grid-cols-1">
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Ergonomic Office chair
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Herman Miller
                        Aeron Chair</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Standing Desk
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Jarvis
                        Hardwood</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        HD Webcam
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Logitech C920x HD
                        Pro</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Green screen
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Keep it low key
                        during meetings</p>
                </div>
            </div>
            <div class="col-span-full md:col-span-3 hidden sm:block">
                <img alt="nomad office" src="https://i.pinimg.com/564x/e1/eb/28/e1eb28c90f4bbd9dffc35182d9606c0c.jpg"
                     width="400" decoding="async" data-nimg="future" class="object-cover mx-auto">
            </div>
            <div
                class="px-4 mx-auto font-medium flex flex-col gap-10 col-span-full md:col-span-2 w-full grid grid-cols-2 sm:grid-cols-1">
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        4k Monitor
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">LG 27GN88A-B</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Mechanical Keyboard
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Keychron - K8</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Wireless multitask mouse
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Logitech MX Master
                        2</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Microphone
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">RØDE NT-USB
                        Microphone</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative sm:my-20 my-5 font-display max-w-screen-xl mx-auto">
        <div class="h-56 bg-white sm:h-72 md:absolute md:left-0 md:h-full md:w-1/3">
            <img class="w-full h-full object-cover"
                 src="https://www.contemporist.com/wp-content/uploads/2018/04/cantilevered-home-office-windows-modern-house-300418-315-03.jpg"
                 alt="">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:py-12 py-8 sm:px-4 lg:px-8 lg:py-16">
            <div class="md:ml-auto md:w-2/3 md:pl-10">
                <h2 class="text-base font-semibold uppercase tracking-wider text-gray-700">Start hosting nomads</h2>
                <p class="font-display mt-2 text-black text-3xl font-medium tracking-tight sm:text-4xl">List your
                    Airbnb on Nomad Stay</p>
                <p class="mt-3 text-lg font-display text-gray-600">Once we have certified your listing on Airbnb, we
                    will promote it on Nomad Stay. Our portfolio of Nomad Listings will be accessible to all of our
                    community.</p>
                <div class="mt-8">
                    <div class="inline-flex rounded-md shadow">
                        <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500"
                           href="/pricing">Our plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-12 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900 font-display">Our partners working to
                help nomads worldwide</h2>
            <div
                class="mx-auto mt-10 max-w-lg flex justify-center items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5 max-h-12">
                <a href="https://remotebase.co">
                    <img class="max-w-xs max-h-16 py-2 w-full object-contain"
                         src="https://static.tildacdn.com/tild3363-3134-4638-b164-323062306532/RemoteBase_Logo.png"
                         alt="Transistor" width="158" height="48">
                </a>
                <a href="https://nomadcowork.com">
                    <img class="max-w-xs max-h-16 py-2 w-full object-contain"
                         src="https://icowork-static-prd.s3.amazonaws.com/static/static_images/icw-logo-text.png"
                         alt="nomadcowork" width="158" height="48">
                </a>
                <a href="https://manaapartments.com">
                    <img class="max-w-xs max-h-16 w-full object-contain bg-everglade-600 rounded-lg"
                         src="https://manaapartments.com/wp-content/uploads/2023/02/LOGO-Mana-Grises-2-1.png"
                         alt="manaapartments" width="158" height="48">
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 sm:px-6" id="start-hosting-nomads">
        <div class="space-y-10">
            <div class="space-y-4 py-20">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-serif tracking-tight text-3xl mb-4">Host nomads working in the most remote
                        companies</h2>
                    <p class="font-display text-gray-600">Have you ever been scared that your guest will not be tidy, or
                        will throw a party in your Airbnb? With Nomad Stay, you can be sure this won't happen. Rent
                        out to nomads who are looking only looking for <span class="font-bold">mid-long stays</span> and
                        who are <span class="font-bold">looking to work</span> out of your Airbnb!</p>
                </div>
                <div class="max-w-sm md:max-w-4xl mx-auto grid gap-2 grid-cols-4 md:grid-cols-5">
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="h-16"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img alt="Qries"
                             src="https://lh3.googleusercontent.com/NGPrjka2ai0w7sfhxkxCwtOSh2wVyEZMdtrVxI4vrA22ebA_fcyl9PSvhTaCYXSWh0A68ZhvXhVZ4U-Nnp3v9IfoXg5o5H1tjjK97cs">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://upload.wikimedia.org/wikipedia/fr/2/23/Payfit_logo_blue.png" class="h-16"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://download.logo.wine/logo/Zendesk/Zendesk-Logo.wine.png" class="h-20"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto col-start-2 col-end-4">

                    </div>
                </div>
            </div>
            <h3 class="max-w-screen-lg mx-auto w-full mt-6 font-display md:text-3xl text-xl font-bold">Join a community
                of remote workers</h3>

            <div class="marquee"
                 style="--play: running; --direction: normal; --duration: 23s; --delay: 0s; --iteration-count: infinite;">
                <div class="max-w-screen-xl sm:flex mx-auto space-y-10 sm:gap-x-10 my-8 items-center">
                    <a href="https://www.linkedin.com/in/remybroun"
                       class="relative flex items-start w-full cursor-pointer">
                        <div
                            class="py-6 pt-16 px-4 md:mx-0 bg-white border-4 border-everglade-600 rounded-2xl text-gray-900">
                            <div class="absolute top-0 -mt-8 transform">
                                <img alt="Testimonial 01"
                                     src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/nomadremy.webp" decoding="async" data-nimg="future"
                                     class="relative rounded-full border-4 border-everglade-700 h-20 w-20" loading="lazy">
                            </div>
                            <blockquote class="text-justify text-xs leading-5 tracking-tight font-display pb-4">
                                <p>"After Spending so much time looking for convinient Airbnbs, I decided to found
                                    Nomad Stay. An airbnb curation list driven by a community of nomads. <br> My
                                    goal is to ensure that all remote workers find a perfect place to live and work
                                    in harmony."</p>
                            </blockquote>
                            <cite class="block font-bold text-lg not-italic">
                            </cite>
                            <div class="text-everglade-700 text-sm font-bold">
                                <p class="text-xs italic mb-2">Founding Nomad </p>
                                <span>Software Engineer </span>
                                <div class="text-everglade-600 hover:underline">@Apple</div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/emrick-donadei/"
                       class="relative flex items-start w-full cursor-pointer">
                        <div
                            class="py-6 pt-16 px-4 md:mx-0 bg-white border-4 border-everglade-600 rounded-2xl text-gray-900">
                            <div class="absolute top-0 -mt-8 transform">
                                <img alt="Testimonial 01"
                                     src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/1590874819807.webp"
                                     width="120" height="120" decoding="async" data-nimg="future"
                                     class="relative rounded-full border-4 border-everglade-700 h-20 w-20" loading="lazy">
                            </div>
                            <blockquote class="text-justify text-xs leading-5 tracking-tight font-display pb-4">
                                <p>"Ever since Google has offered us the chance to work remotely, I have always
                                    dreamed of finding the perfect airbnb made for the remote worker. <br>Now with
                                    Nomad Stay, I don't have one, but hundreds of airbnbs to choose from."</p>
                            </blockquote>
                            <cite class="block font-bold text-lg not-italic">
                            </cite>
                            <div class="text-everglade-700 text-sm font-bold">
                                <span>Software Engineer </span>
                                <div class="text-everglade-600 hover:underline">@Google</div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/josh-balard-7b299b212"
                       class="relative flex items-start w-full cursor-pointer">
                        <div
                            class="py-6 pt-16 px-4 md:mx-0 bg-white border-4 border-everglade-600 rounded-2xl text-gray-900">
                            <div class="absolute top-0 -mt-8 transform">
                                <img alt="Testimonial 01"
                                     src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/1627333510820.webp"
                                     width="120" height="120" decoding="async" data-nimg="future"
                                     class="relative rounded-full border-4 border-everglade-700 h-20 w-20" loading="lazy">
                            </div>
                            <blockquote class="text-justify text-xs leading-5 tracking-tight font-display pb-4">
                                <p>"I have been a full-time nomad since 2018. I haven't stopped travelling! Work
                                    also can't stop. Multiple times I was at risk of losing my job due to a bad set
                                    up, poor Wi-Fi or colleagues questionning my whereabouts. Nomad Stay seems to
                                    be the way to go. I can't wait until I try my first Nomad Listing."</p>
                            </blockquote>
                            <cite class="block font-bold text-lg not-italic">
                            </cite>
                            <div class="text-everglade-700 text-sm font-bold">
                                <span>Software Engineer </span>
                                <div class="text-everglade-600 hover:underline">@Google</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section id="newsletter" aria-label="Newsletter">
            <div class="mx-auto max-w-7xl px-4">
                <div
                    class="relative -mx-4 overflow-hidden bg-everglade-100 py-16 px-4 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-5xl md:px-16 xl:px-24 xl:py-24 sm:mt-20 text-white">
                    <div class="absolute inset-0">
                        <img class="w-full h-full object-cover"
                             src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&amp;q=35&amp;w=1280"
                             alt="">
                        <div class="absolute inset-0 bg-gray-500 mix-blend-multiply" aria-hidden="true">
                        </div>
                    </div>
                    <div
                        class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                        <div>
                            <p class="font-serif text-4xl font-medium tracking-tight text-white sm:text-5xl">Get news on
                                our latest locations</p>
                            <p class="mt-4 text-lg tracking-tight text-white">Get notified when we add new locations to
                                our collection. You will receive promo codes and lifestyle hacks as well.</p>
                        </div>
                        <form name="newsletter2">
                            <h3 class="text-lg font-semibold tracking-tight text-white">Sign up to our newsletter <span
                                    aria-hidden="true">↓</span>
                            </h3>
                            <div
                                class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 shadow-xl shadow-black/5 focus-within:ring-2 focus-within:ring-black overflow-hidden">
                                <input type="email" name="email" value="" required="" placeholder="Email address"
                                       aria-label="Email address"
                                       class="-my-2.5 flex-auto bg-transparent pl-6 pr-2.5 text-base text-slate-900 placeholder:text-slate-400 focus:outline-none">
                                <button
                                    class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-everglade-900 hover:bg-everglade-600"
                                    type="submit">
                                    <span class="sr-only sm:not-sr-only">Sign up</span>
                                    <span class="sm:hidden">
									<svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6">
										<path d="m14 7 5 5-5 5M19 12H5" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										</path>
									</svg>
								</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</main>
@include('components.footers.main')
