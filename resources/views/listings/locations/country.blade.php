@extends('layouts.app')
@section('title', 'All Listings for remote work in ' . ucwords(str_replace('-', ' ', $country->name)))

<body>
@include('components.headers.main')

<div class="relative">
    <Header/>
</div>
<div class="min-h-screen max-w-screen-xl mx-auto space-y-20">
    <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                 src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/99a6b259101577.5a3e1fcab5fd1.webp"
                 alt="">
            <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative px-16 py-16 sm:py-32 leading-4">
            <h1 class="text-xl font-display font-bold text-white sm:text-2xl lg:text-3xl">
                Stays for remote work in <br>
                <span class="text-xl font-normal">{{ ucwords($country->name) }}</span>
            </h1>
        </div>
    </div>
    <div>
        @if ($listings->count() > 0)
            <div class="mt-4">
                @include('components.listingGrid', ['listings' => $listings])
                @if ($listings?->hasPages())
                    <div class="mt-4">
                        {{ $listings->links() }}
                    </div>
                @endif
            </div>
        @else
            <div class="space-y-20">
                <div class="bg-everglade-50 rounded-lg px-4 pt-5 pb-4 sm:p-10 max-w-5xl mx-auto">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex w-24 h-24 flex-shrink-0 items-center justify-center rounded-full bg-everglade-100 p-2 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Add your SVG or icon for the exclamation triangle here -->
                            <svg class="h-20 w-20 text-everglade-600" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 9v2m0 4h.01m-6.938 4h13.856c2.186 0 3.507-2.356 2.355-4L14.355 3c-1.152-1.644-3.172-1.644-4.324 0l-7.855 12c-1.152 1.644.169 4 2.355 4z">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                No listings available
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    There are no listings available for {{ $country->name }}. Check again soon, or
                                    select a
                                    different country
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-medium leading-6 text-everglade-900 mb-4">
                        Other countries on Nomad Stay with remote work accommodations
                    </h3>
                    <ul class="grid sm:grid-cols-3 grid-cols-2 gap-6 max-w-screen-xl mx-auto">
                        @foreach ($countries as $index => $country)
                            <li class="border border-everglade-200 rounded-lg overflow-hidden hover:shadow-lg">
                                <a href="/listings/locations/countries/{{ strtolower($country->name) }}"
                                   class="block hover:underline">

                                    <div class="bg-everglade-100 px-4 py-4 tracking-wide">
                                        See remote work listings in <span
                                            class="font-medium">{{ $country->name }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-medium leading-6 text-everglade-900 mb-4">
                        Need some inspiration? Check out these listings from around the world
                    </h3>
                    @include('components.listingGrid', ['listings' => $randomListings])
                </div>
            </div>
        @endif
    </div>

@include('components.footers.main')
</body>

</html>
