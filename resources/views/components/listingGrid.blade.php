<div class="w-full mx-auto">
    <div class="relative">
        <div class="relative max-w-screen-2xl mx-auto">
            <div class="mt-4">
                <ul class="mx-auto grid grid-cols-1 gap-x-5 gap-y-2 sm:gap-x-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @forelse ($listings as $listing)

                        <li key="{{ $listing->title }}"
                            class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl">
                            <a href="{{ ("/listings/" . $listing->id) }}" class="block">
                                <div class="flex-shrink-0 relative">
                                    @if ($listing->latest_price?->price_per_night)
                                        <div
                                            class="absolute bottom-2 right-2 text-right z-40 bg-white px-3 py-1 rounded-lg font-display">
                                            ${{ $listing->latest_price?->price_per_night }}
                                            @if($listing->latest_price?->price_per_night > 1200)
                                                <span
                                                    class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">/ month
                                                </span>
                                            @else
                                                <span
                                                    class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">/ night
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                    {{--                                    {{dd($listing->mainListingImage->url)}}--}}
                                    <img
                                        class="sm:h-48 h-64 w-full object-cover rounded-lg"
                                        src="{{ str_replace('w=720', 'w=480', $listing?->mainListingImage?->url ?? '') ?: asset('images/round-logo.png') }}"
                                        alt=""
                                        width={1000}
                                        height={1000}
                                    />
                                </div>
                                <div class="flex-1 py-4 flex flex-col justify-between">
                                    <div class="flex-1">
                                        @if ($listing?->location)
                                            <div class="flex items-center gap-x-2 text-gray-500">
                                                <x-icon
                                                    name="flag-country-{{ strtolower($listing->location_slug->country->code) }}"
                                                    width="20" height="20"/>
                                                <h4 class="text-xs font-display uppercase font-bold leading-4">
                                                    {{ $listing?->location }}
                                                </h4>
                                            </div>
                                        @endif
                                        <h3 class="text-lg line-clamp-1 text-gray-900 font-display tracking-tighter leading-6 mt-1">{{ $listing->title }}</h3>
                                        <div class="flex items-center gap-x-1 text-gray-500">
                                            @if ($listing->close_coworkings->count())
                                                <div class="relative group mt-2 w-fit">
                                                    <div
                                                        class="group-hover:opacity-100 duration-200 opacity-75 absolute bg-gradient-to-br from-yellow-500 to-cyan-500 -inset-0 rounded-full blur"></div>
                                                    <div href="/boundra"
                                                         class='font-display tracking-tighter relative bg-white text-xs leading-5 font-medium text-black rounded-full py-0.5 px-3 items-center break truncate flex gap-2 items-center'>
                                                        <img
                                                            src="https://a-step-in.s3.us-east-2.amazonaws.com/nomadstay/coworking.png"
                                                            class="hidden sm:block w-6 h-6"/>
                                                        <span class="mr-1 text-everglade-500 text-xs">
                                                        <span
                                                            class="font-bold text-base mr-1">{{ $listing->close_coworkings->count() }}</span>
                                                        coworking space{{ $listing->close_coworkings->count() > 1 ? "s" : "" }}
                                                    </span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($listing->close_weworks->count())
                                                <div class="relative group mt-2 w-fit">
                                                    <div
                                                        class="group-hover:opacity-100 duration-200 opacity-75 absolute bg-gradient-to-br from-yellow-500 to-cyan-500 -inset-0 rounded-full blur"></div>
                                                    <div href="/boundra"
                                                         class='font-display tracking-tighter relative bg-white text-xs leading-5 font-medium text-black rounded-full py-0.5 px-3 items-center break truncate flex gap-2 items-center'>
                                                        <span
                                                            class="font-display text-black text-lg font-bold hidden sm:block">W</span>
                                                        <span class="mr-1 text-everglade-500 text-xs">
                                                        <span
                                                            class="font-bold text-base mr-1">{{ $listing->close_weworks->count() }}</span>
                                                        Wework location{{ $listing->close_weworks->count() > 1 ? "s" : "" }}
                                                    </span>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        <p>No listings available.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
