{{-- Layout --}}
@extends('layouts.app')
@section('title', 'Best places to work remotely in ' . ucwords($location->name))

{{-- Content --}}
@section('content')
    @include('components.headers.main')

    <div class="container min-h-screen mx-auto max-w-screen-xl">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
            <div class="absolute inset-0">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/99a6b259101577.5a3e1fcab5fd1.jpg"
                     alt=""
                     style="object-fit: cover; width: 100%; height: 100%;" {{-- Inline styles for simplicity --}}
                >
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-24 sm:py-32 leading-4">
                <h1 class="text-4xl font-display tracking-tighter text-white sm:text-5xl lg:text-6xl">
                    {{ $location->name }}
                </h1>
                <h2 class="text-lg font-medium font-serif tracking-tighter text-everglade-100">{{ $location->country->name }}</h2>
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
@endsection
