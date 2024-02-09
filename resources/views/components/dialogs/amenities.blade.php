<div x-show="amenitiesDialogOpen" x-cloak>
    <div x-on:click.away="amenitiesDialogOpen = false" class="fixed inset-0 z-10 bg-black opacity-50"></div>

    <div x-on:click.away="open = false" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div x-show.transition.opacity="open" class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div x-show.transition.origin.bottom.duration.300ms="open" class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="font-display tracking-tighter text-2xl font-medium gap-2 flex items-baseline sm:p-0 mb-3 p-2">
                    Other Amenities
                    <span class="text-sm sm:text-lg italic text-everglade-600 font-serif tracking-tighter">Living essentials</span>
                </div>
                <div class="font-display text-sm tracking-tighter grid sm:grid-cols-5 grid-cols-2 gap-x-2 gap-y-2 sm:p-0 px-2">
                    @foreach($amenities as $amenity)
                        <div class="flex items-center shadow-sm border-gray-500 border hover:bg-gray-100 duration-100 rounded-lg px-3 py-3 text-base line-clamp-2 truncate">
                            {{ ucwords($amenity) }}
                        </div>
                    @endforeach
                </div>
                <div class="mt-5 sm:mt-6 flex justify-center">
                    <button x-on:click="amenitiesDialogOpen = false" type="button" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500">
                        Back to listing
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
