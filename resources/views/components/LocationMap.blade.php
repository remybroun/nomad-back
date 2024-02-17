<div id='map' style='width: 100%; height: 400px;'></div>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet'/>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>

@push('js')
<script>
    mapboxgl.accessToken = config('services.mapbox.token');
    let map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [@json($location['lng']), @json($location['lat'])], // Longitude, Latitude
        zoom: 12
    });

    map.on('load', function () {
        // Add main location marker
        new mapboxgl.Marker({"color": "#007cbf"}) // Main location color
            .setLngLat([@json($location['lng']), @json($location['lat'])])
            .addTo(map);

        // Add markers for locations around the main location
        @foreach($closeListings as $closeLocation)
        new mapboxgl.Marker({"color": "#FF5733"}) // Surrounding locations color
            .setLngLat([{{ $closeLocation['lng'] }}, {{ $closeLocation['lat'] }}])
            .addTo(map);
        @endforeach
    });

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());
</script>
@endpush
