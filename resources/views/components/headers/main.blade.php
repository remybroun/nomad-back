<header>
    <div class="relative py-4 px-10">
        <div class="max-w-screen-xl mx-auto">
            <div class="mx-auto max-w-7xl sm:flex flex-wrap items-baseline justify-between lg:flex-nowrap sm:space-x-8">
                <a class="w-full flex items-center w-40 sm:h-16 h-10" href="/">
                    @include('components.logo')
                </a>
                <!-- Add other header content, navigation, and links here -->
                <nav class="sm:flex items-center space-x-4">
                    <a href="/listings" class="text-gray-900 hover:text-everglade-500">Listings</a>
                    <a href="{{ route('listings-locations') }}"
                       class="text-gray-900 hover:text-everglade-500">Locations</a>
                    @include('components.dropdown', ['buttonTitle' => 'Coworkings', 'items' => [
                        'All Coworkings' => route('coworkings'),
                        'Wework Locations' => route('wework-locations'),
                        'All Coworking Locations' => route('coworkings-locations'),
                    ]])

                </nav>
            </div>
        </div>
    </div>
</header>
