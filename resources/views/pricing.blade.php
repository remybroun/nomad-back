{{-- pricing.blade.php --}}

@extends('layouts.app')

@section('title', 'Pricing - Add your listing to Nomad Living')

@section('content')
    <div>
        @include('components.headers.main')
        <div class="bg-everglade-900 font-display">
            <div class="pt-12 sm:pt-16 lg:pt-16">
                <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-3xl space-y-2 lg:max-w-none">
                        <h2 class="text-xl font-semibold leading-6 text-everglade-300">Pricing</h2>
                        <p class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">
                            Promote your Listing
                        </p>
                        <p class="text-xl text-white font-serif tracking-tighter italic">
                            Get more visibility, attract more remote workers and digital nomads
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-8 bg-gray-50 pb-12 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
                <div class="relative">
                    <div class="absolute inset-0 h-3/4 bg-everglade-900"></div>
                    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div
                            class="mx-auto max-w-md space-y-4 lg:grid lg:max-w-4xl lg:grid-cols-2 lg:gap-5 lg:space-y-0">
                            @foreach ($tiers as $index => $tier)
                                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                                    <div class="bg-white px-6 py-8 sm:p-10 sm:pb-6">
                                        <div>
                                            <h3 class="inline-flex rounded-full px-4 py-1 text-base font-semibold {{ $index == 0 ? 'bg-everglade-100 text-everglade-600' : 'bg-purple-100 text-purple-600' }}"
                                                id="tier-standard">
                                                {{ $tier['name'] }}
                                            </h3>
                                        </div>
                                        <div class="mt-4 flex items-baseline text-6xl font-bold tracking-tight">
                                            ${{ $tier['priceMonthly'] }}
                                            <span
                                                class="ml-1 sm:text-2xl text-lg font-medium tracking-normal text-gray-500 font-serif tracking-tighter">{{ $index === 0 ? '/per listing' : '/per month' }}</span>
                                        </div>
                                        <p class="mt-5 text-xl text-gray-500 font-serif tracking-tighter text-everglade-700">{{ $tier['description'] }}</p>
                                    </div>
                                    <div
                                        class="flex flex-1 flex-col justify-between space-y-6 bg-gray-50 px-6 pt-6 pb-8 sm:p-10 sm:pt-6">
                                        <ul role="list" class="space-y-4">
                                            @foreach ($tier['features'] as $feature)
                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <svg class="h-6 w-6 text-gray-400" x-description="Heroicon name: check"
                                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base text-gray-700">{{ $feature }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="rounded-md shadow">
                                            <a href="{{ $tier['href'] }}"
                                               class="flex items-center justify-center rounded-md border border-transparent bg-gray-800 px-5 py-3 text-base font-medium text-white hover:bg-gray-900"
                                               aria-describedby="tier-standard">
                                                Get started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto my-4 max-w-7xl px-4 sm:px-6 lg:mt-5 lg:px-8">
                    <div class="mx-auto max-w-md lg:max-w-5xl">
                        <div class="rounded-lg bg-gray-100 px-6 py-8 sm:p-10 lg:flex lg:items-center">
                            <div class="flex-1">
                                <div>
                                    <h3 class="inline-flex rounded-full bg-white px-4 py-1 text-base font-semibold text-gray-800">
                                        Want a discount?
                                    </h3>
                                </div>
                                <div class="mt-4 text-lg text-gray-600">
                                    We have special discounts for accounts that can offer us extra visibility.
                                    Do you think you can help promote Nomad Living?
                                </div>
                            </div>
                            <div class="mt-6 rounded-md shadow lg:mt-0 lg:ml-10 lg:flex-shrink-0">
                                <a href="/signup"
                                   class="flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-gray-900 hover:bg-gray-50">
                                    Get in touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footers.main')
@endsection
