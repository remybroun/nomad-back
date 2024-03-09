@php
    $close_weworks = $listing->close_weworks->map(function ($coworking) {
        return (object)[
            'id' => $coworking->id,
            'name' => 'Wework '.$coworking->name,
            'address' => $coworking->address,
            'latitude' => $coworking->lat,
            'longitude' => $coworking->lng,
        ];
    });


    $coworkings = $listing->close_coworkings->map(function ($coworking) {
        return (object)[
            'id' => $coworking->id,
            'name' => $coworking->name,
            'address' => $coworking->city,
            'latitude' => $coworking->lat,
            'longitude' => $coworking->lng,
        ];
    });
    $coworkings = $close_weworks->concat($coworkings);

    // Dummy data for coworking spaces
//    $coworkings = collect([
//        (object)[
//            'id' => 1,
//            'name' => 'Tech Hub SF',
//            'address' => '548 Market St, San Francisco, CA 94104',
//            'latitude' => '37.7894',
//            'longitude' => '-122.4016',
//        ],
//        (object)[
//            'id' => 2,
//            'name' => 'Innovate NYC',
//            'address' => '11 Times Square, New York, NY 10036',
//            'latitude' => '40.7577',
//            'longitude' => '-73.9857',
//        ],
//        (object)[
//            'id' => 3,
//            'name' => 'Startup Base Miami',
//            'address' => '168 SE 1st St, Miami, FL 33131',
//            'latitude' => '25.7743',
//            'longitude' => '-80.1937',
//        ],
//    ]);

//    // Dummy data for gyms
//    $gyms = collect([
//        (object)[
//            'id' => 1,
//            'name' => 'Fit Factory LA',
//            'address' => '929 S Broadway, Los Angeles, CA 90015',
//            'latitude' => '34.0407',
//            'longitude' => '-118.2468',
//        ],
//        (object)[
//            'id' => 2,
//            'name' => 'Urban Gym Boston',
//            'address' => '10 Post Office Square, Boston, MA 02109',
//            'latitude' => '42.3601',
//            'longitude' => '-71.0589',
//        ],
//        (object)[
//            'id' => 3,
//            'name' => 'Wellness Center Chicago',
//            'address' => '233 S Wacker Dr, Chicago, IL 60606',
//            'latitude' => '41.8781',
//            'longitude' => '-87.6298',
//        ],
//    ]);
@endphp

<div class="grid w-full min-h-[400px] lg:min-h-[600px] items-start md:grid-cols-3 max-w-screen-xl mx-auto px-4">
    <div class="grid gap-4 px-4 md:gap-2 md:border-r lg:gap-4 lg:border-r-0 xl:px-8">
        <div class="flex w-full items-center gap-4">
            <div class="grid gap-0.5">
                <h1 class="text-xl font-bold">Gyms & Coworking Spaces around {{ $listing->location }}</h1>
                <p class="text-sm leading-none text-gray-500 dark:text-gray-400">
                    Click on a location to highlight it on the map.
                </p>
            </div>
        </div>
        <div class="grid gap-4 overflow-y-scroll max-h-[400px]">
            @forelse($coworkings as $index => $coworking)
                <div class="flex items-center gap-4">
                    <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground w-8 h-8 p-0">
                        {{ $index + 1 }}
                    </button>
                    <div class="grid gap-0.5">
                        <h3 class="font-semibold">{{ $coworking->name }}</h3>
                        <p class="text-sm leading-none text-gray-500 dark:text-gray-400">
                            {{ $coworking->address }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="flex flex-col gap-4 bg-zinc-200 rounded-lg p-4">
                    <p class="text-sm leading-none text-gray-800 dark:text-gray-400">
                        No coworking spaces found nearby.
                    </p>
                    <p class="text-xs leading-none text-gray-500 dark:text-gray-400">
                        Add your favorite coworking space to our directory, coming soon.
                    </p>
                </div>
            @endforelse
{{--            @foreach($gyms as $index => $gym)--}}
{{--                <div class="flex items-center gap-4">--}}
{{--                    <button--}}
{{--                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground w-8 h-8 p-0">--}}
{{--                        {{ count($coworkings) + $index + 1 }}--}}
{{--                    </button>--}}
{{--                    <div class="grid gap-0.5">--}}
{{--                        <h3 class="font-semibold">{{ $gym->name }}</h3>--}}
{{--                        <p class="text-sm leading-none text-gray-500 dark:text-gray-400">--}}
{{--                            {{ $gym->address }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
        </div>
    </div>

    {{--    Map view--}}

    <div class="w-full bg-gray-100 col-span-2 rounded overflow-clip">
        <div class="z-10" id="mapid" style="height: 500px; width: 100%;"></div>
    </div>


</div>
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Define latitude and longitude

            var latitude = {{$listing?->latitude}}; // Example: New York City latitude
            var longitude = {{$listing?->longitude}}; // Example: New York City longitude
            var zoomLevel = 12; // Adjust zoom level as needed

            var map = L.map('mapid').setView([latitude, longitude], zoomLevel);

            L.tileLayer('http://services.arcgisonline.com/arcgis/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
                minZoom: 0,
                maxZoom: 22,
            }).addTo(map);
            L.tileLayer('http://{s}.basemaps.cartocdn.com/light_only_labels/{z}/{x}/{y}.png').addTo(map);

            var markers = [
                    @foreach($coworkings as $coworking)
                {
                    latitude: {{$coworking->latitude}},
                    longitude: {{$coworking->longitude}},
                },
                    @endforeach
{{--                    @foreach($gyms as $gym)--}}
{{--                {--}}
{{--                    latitude: {{$gym->latitude}},--}}
{{--                    longitude: {{$gym->longitude}},--}}
{{--                },--}}
{{--                @endforeach--}}
            ];

            var listingMarker = L.divIcon({
                className: 'bg-everglade-800 text-white rounded-full w-10 h-10 flex items-center justify-center',
            });
            L.marker([latitude, longitude], { icon: listingMarker }).addTo(map);

            markers.forEach(marker => {
                var customMarker = L.divIcon({
                    className: 'bg-everglade-500 text-white rounded-full w-10 h-10 flex items-center justify-center',
                });
                L.marker([marker.latitude, marker.longitude], { icon: customMarker }).addTo(map);
            });


        });
    </script>

@endpush
