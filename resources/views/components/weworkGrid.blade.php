
<div class="w-full mx-auto">
    <div class="relative">
        <div class="relative max-w-screen-xl mx-auto">
            <div class="mt-4">
                <ul class="max-w-screen-xl mx-auto grid grid-cols-1 gap-x-5 gap-y-2 sm:gap-x-5 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($coworkings as $coworking)
                        <li key="{{ $coworking->name }}"
                            class="cursor-pointer bg-white col-span-1 flex flex-col max-w-xl">
                            <a href="{{ route('wework-location-show', $coworking->slug) }}" class="block">
                                <div class="flex-shrink-0 relative">
                                    <img
                                        class="sm:h-48 h-64 w-full object-cover rounded-lg"
                                        src="{{ str_replace('w=1200', 'w=480', $coworking->image_url) ?: asset('images/round-logo.png') }}"
                                        alt={{"Coworking for remote work in ".$coworking?->location." - ".$coworking?->location}}
                                    />
                                </div>
                                <div class="flex-1 py-4 flex flex-col justify-between">
                                    <div class="flex-1">
                                        @if ($coworking?->location_slug?->name)
                                            <div class="flex items-center gap-x-1 text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                     fill="currentColor" class="w-4 h-4 text-everglade-600">
                                                    <path fill-rule="evenodd"
                                                          d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <h4 class="text-xs font-display uppercase font-bold leading-4">
                                                    {{ $coworking?->location_slug?->name }}
                                                </h4>
                                            </div>
                                        @endif
                                        <h3 class="text-lg line-clamp-1 text-gray-900 font-display tracking-tighter leading-6 mt-1">{{ $coworking->name }}</h3>
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
