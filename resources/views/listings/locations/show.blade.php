{{-- Layout --}}
@extends('layouts.app')
@section('title', 'Best places to work remotely in ' . ucwords($location->name))

{{-- Content --}}
@section('content')
    @include('components.headers.main')

    <div class="min-h-screen mx-auto max-w-screen-xl px-4 md:px-0">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
            <div class="absolute inset-0">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/99a6b259101577.5a3e1fcab5fd1.jpg"
                     alt=""
                     style="object-fit: cover; width: 100%; height: 100%;" {{-- Inline styles for simplicity --}}
                >
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-16 sm:py-32 leading-4">
                <h1 class="text-xl font-display font-bold text-white sm:text-2xl lg:text-3xl">
                    All Listings in <br>
                    <div class="flex gap-2 items-center">
                        <span class="text-xl font-normal">{{ $location->name }} {{ $location->country->name }}</span>
                        <x-icon name="flag-country-{{ strtolower($location->country->code) }}" width="30" height="30"/>
                    </div>
                </h1>
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
