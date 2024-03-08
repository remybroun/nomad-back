@php
    $locations = \App\Models\Location::inRandomOrder()->limit(5)->get();
//    $countries = \App\Models\Country::inRandomOrder()->limit(5)->get();
//    $continents = [
//        (object)['name' => 'Asia', 'slug' => 'asia'],
//        (object)['name' => 'Europe', 'slug' => 'europe'],
//        (object)['name' => 'South America', 'slug' => 'south-america'],
//    ];
//    //concatenate the collections
//    $locations = $locations->concat($countries)->concat($continents);
//    //shuffle the collection
//    $locations = $locations->shuffle();
@endphp

<div class="xl:max-w-screen-2xl lg:max-w-screen-xl mx-auto">
    <header class="flex flex-col sm:flex-row items-center justify-between p-2 sm:p-4">
        <a class="w-full flex items-center sm:h-16 h-10 justify-center sm:justify-start" href="/">
            @include('components.logo')
        </a>
        <div class="flex items-center sm:space-x-4">
            <a href="/listings"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-base sm:text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-12 sm:h-10 px-5 sm:px-4 py-2.5 sm:py-2">
                Listings
            </a>
            <a href="{{ route('listings-locations') }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-base sm:text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-12 sm:h-10 px-5 sm:px-4 py-2.5 sm:py-2">
                Locations
            </a>
            <a href="{{ route('coworkings') }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-base sm:text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-12 sm:h-10 px-5 sm:px-4 py-2.5 sm:py-2">
                Coworkings
            </a>
            <a href="{{ route('list') }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-base sm:text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-12 sm:h-10 px-5 sm:px-4 py-2.5 sm:py-2">
                Host Remote Workers
            </a>
        </div>
        @auth
        <div class="flex items-center space-x-1 border p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6">
                <line x1="4" x2="20" y1="12" y2="12">
                </line>
                <line x1="4" x2="20" y1="6" y2="6">
                </line>
                <line x1="4" x2="20" y1="18" y2="18">
                </line>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6">
                <circle cx="12" cy="12" r="10">
                </circle>
                <circle cx="12" cy="10" r="3">
                </circle>
                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662">
                </path>
            </svg>
        </div>
        @endauth
    </header>
    <div class="flex flex-col sm:flex-row items-center gap-2 p-4">

        <div class="relative w-full">
            @include('components.searchBar', [
                         'class' => 'w-full py-2 font-display font-medium pl-12 text-sm leading-9 text-gray-900 focus:ring-0 rounded-full border',
                         'placeholder' => 'Enter a city, region or country'
                        ])
        </div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:flex md:overflow-x-auto p-4 gap-2">
        @foreach($locations as $location)
            <a href="{{ route('listings-locations-show', [$location->slug]) }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md sm:text-sm text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                {{ $location->name }}
            </a>

        @endforeach
    </div>
</div>
