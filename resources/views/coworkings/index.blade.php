@extends('layouts.app')
@section('title', 'All Coworking Spaces')

<div class="w-full mx-auto">
    @include('components.headers.main')
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="relative max-w-screen-xl mx-auto">
            <div class="relative bg-indigo-400 rounded-lg overflow-hidden">
                <div class="absolute inset-0">
                    <img
                        class="w-full h-full object-cover"
                        src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/05a76241877311.57b79b697823f.jpg"
                        alt="The nomad penthouse"
                    />
                    <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
                </div>
                <div class="relative max-w-screen-xl mx-auto py-24 sm:py-32 sm:px-10 px-4">
                    <h1 class="text-xl font-display font-bold text-white sm:text-2xl lg:text-3xl">
                        All Coworking Spaces <br>
                        <span class="text-xl font-normal">Discover coworking spaces validated by fellow nomads for work purposes.</span>
                    </h1>
                    <div class="absolute sm:bottom-5 sm:left-5 bottom-3 left-3 flex gap-2">
                        <a href="{{ route('coworkings-locations') }}"
                           class="bg-white text-black rounded-xl sm:px-4 sm:py-2 px-3 py-1 flex items-center gap-2 font-medium font-display text-sm sm:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="2"
                                 stroke="currentColor" class="w-5 h-5">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                            </svg>
                            Browse per location
                        </a>
                    </div>
                </div>
            </div>

            @include('components.coworkingGrid', ['coworkings' => $coworkings])
            <div class="mt-4">
                {{ $coworkings->links() }}
            </div>

        </div>
    </div>
    @include('components.footers.main')
</div>
