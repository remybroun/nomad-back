@php

@endphp


<div class="w-full mx-auto">
    <div class="relative">
        <div class="relative max-w-screen-xl mx-auto">
            <div class="mt-4">
                <ul class="max-w-screen-xl mx-auto grid grid-cols-1 gap-x-5 gap-y-4 sm:gap-x-5 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($coworkings as $coworking)
                        <li key="{{ $coworking?->name }}"
                            class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl">
                            <a href="{{ route('coworkings-show', $coworking->slug) }}"
                               class="flex flex-col h-full space-y-2">
                                <div class="flex-shrink-0 relative">
                                    <img
                                        class="sm:h-48 h-64 w-full object-cover rounded-lg"
                                        src="{{ str_replace('w=1200', 'w=480', $coworking->image_url) ?: asset('images/round-logo.png') }}"
                                        alt={{"Coworking for remote work in ".$coworking?->location_slug?->name}}
                                    />
                                </div>
                                <div class="flex items-start justify-between gap-4 py-2">
                                    <div class="grid gap-2">
                                        <h2 class="font-semibold text-xl">{{$coworking?->name}}</h2>
                                        <div class="flex items-center gap-x-2 text-gray-500">
                                            <x-icon name="flag-country-{{ strtolower($coworking->location_slug?->country?->code) }}" width="20" height="20"/>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">{{$coworking?->location_slug?->name}}</p>
                                        </div>
                                        <div class="px-4 py-2 text-sm font-medium bg-gray-100 rounded-md w-fit">
                                            <p class="text-gray-500 dark:text-gray-400">
                                                {{$coworking->closeListings->count()." nearby apartment".($coworking->closeListings->count() > 1 ? "s" : "") }}
                                            </p>
                                        </div>
                                    </div>
                                    <a
                                        @click="event.stopPropagation(); window.open('https://www.google.com/maps/search/?api=1&amp;query={{ urlencode($coworking?->name) }}')"
                                        class="inline-flex items-center justify-center whitespace-nowrap text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 self-start"

                                        href="https://www.google.com/maps/search/?api=1&amp;query=1234+Sunshine+Blvd%2C+Miami%2C+FL"
                                    >
                                        Open in Maps
                                    </a>
                                </div>
                            </a>
                        </li>
                    @empty
                        <p>No Coworking spaces in this location.</p>
                        {{--                        TODO ADD INSPIRATION SECTION--}}

                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
