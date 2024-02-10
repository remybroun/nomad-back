{{-- Layout --}}
@extends('layouts.app')
@section('title', 'All Listings for remote work in ' . ucwords(str_replace('-', ' ', $location->name)))
{{-- Content --}}
@section('content')
    <body class="min-h-screen">
        @include('components.headers.main')
        <div class="container mx-auto max-w-screen-xl">
            <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
                <div class="absolute inset-0">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/99a6b259101577.5a3e1fcab5fd1.jpg" alt="Nomad Stays background image" style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
                </div>
                <div class="relative px-16 py-24 sm:py-32 leading-4">
                    <h1 class="text-4xl font-display tracking-tighter text-white sm:text-5xl lg:text-6xl">
                        Stays for remote work in near a WeWork in
                    </h1>
                    <h2 class="text-xl font-medium text-everglade-100">{{ $location->name }}</h2>
                </div>
            </div>
            <div class="mt-4">
                @include('components.listingGrid', ['listings' => $listings])
                <div class="mt-4">
                    {{ $listings->links() }}
                </div>
            </div>
        </div>

        @include('components.footers.main')
    </body>
@endsection
