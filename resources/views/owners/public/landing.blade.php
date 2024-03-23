@extends('layouts.app')
@section('title')
    Nomad Stay - Rent your property to remote workers
@endsection
@section('description')
    Rent your property to remote workers
@endsection
@section('metaImage')
    {{@asset('ns-logo-black.png')}}
@endsection


@php
    $questions = [
    [
        'question' => 'What is Nomad Stay?',
        'answer' => 'Nomad Stay is a specialized accommodation platform for digital nomads and remote workers, offering a global network of fully furnished apartments with flexible accommodations. Our unique feature is providing apartments equipped with high-quality workstations designed to enhance productivity and well-being for those who live and work in different destinations.'
    ],
    [
        'question' => 'Who is Nomad Stay for?',
        'answer' => 'Our services are tailored for digital nomads, remote workers, and anyone needing temporary accommodations that support a productive work environment while exploring new locations.'
    ],
    [
        'question' => 'How do I book an apartment on Nomad Stay?',
        'answer' => 'You can search for available apartments on our platform, filter according to your preferences (location, duration, etc.), and book directly through our website. If you have specific requirements or questions, our customer service is here to help.'
    ],
    [
        'question' => 'What makes Nomad Stay apartments suitable for remote work?',
        'answer' => 'Each apartment in our network is equipped with a premium workstation, including an ergonomic office chair, standing desk, HD webcam, 4K monitor, mechanical keyboard, wireless mouse, and external microphone, ensuring a comfortable and productive work environment.'
    ],
    [
        'question' => 'Can I see the workstation amenities before booking?',
        'answer' => 'Yes, listings on our platform include detailed descriptions and photos of the workstation and other apartment amenities to help you make an informed decision.'
    ],
    [
        'question' => 'How does the pricing work?',
        'answer' => 'Prices are set by the property owners but generally include a premium for the specialized workstation amenities. Despite this, our prices are competitive, reflecting the high value offered to remote workers and digital nomads.'
    ],
    [
        'question' => 'What payment methods are accepted?',
        'answer' => 'Nomad Stay accepts various payment methods, including credit/debit cards, PayPal, and bank transfers. The available options may vary depending on the property\'s location.'
    ],
    [
        'question' => 'What if I encounter issues with my accommodation?',
        'answer' => 'Our customer support team is available to assist with any issues or concerns during your stay. We strive to ensure a smooth and enjoyable experience for all our guests.'
    ],
    [
        'question' => 'Are there any additional services provided to guests?',
        'answer' => 'While the primary offering is the accommodation with a workstation, we often provide additional services like local guides, community events, and support with logistics. These services may vary by location.'
    ],
    [
        'question' => 'How can I list my property on Nomad Stay?',
        'answer' => 'Property owners can join the Nomad Stay network by contacting us through our website. Our team will guide you through the process, ensuring your property meets our standards and is ready for digital nomads and remote workers.'
    ],
    [
        'question' => 'What are the benefits of listing my property with Nomad Stay?',
        'answer' => 'By listing with Nomad Stay, you gain access to a specific audience of digital nomads and remote workers, the opportunity to increase your rental income by up to 15%, global visibility, and flexible booking conditions tailored to your strategy.'
    ]
];

@endphp

<nav class="flex justify-between items-center py-8 max-w-screen-2xl mx-auto px-4">
    <img alt="Nomad Stay" class="h-8" src="{{@asset('ns-logo-black.png')}}">

    <div class="flex items-center space-x-4">
        <a class="text-sm font-medium text-gray-500 hover:text-gray-900" href="#">
            Why host remote workers?
        </a>
        <button
            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 bg-everglade-500 text-white">
            List on Nomad Stay
        </button>
    </div>
</nav>

<div class="w-full h-max min-h-screen space-y-20">

    <div class="max-w-7xl mx-auto px-4 lg:px-8 space-y-6">
        <header class="text-center">
            <h1 class="text-5xl font-semibold leading-tight">
                Rent with Nomad Stay<br>
                and earn up to 20% more
            </h1>
        </header>
        <div class="relative ">
            <img alt="Nomad Stay Setup" class="w-full rounded-lg max-h-[35em] object-cover"
                 src="https://a-step-in.s3.us-east-2.amazonaws.com/nomadstay/girl-smiling-phone.webp">
        </div>
        <div class=" grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="gap-2">
                <h3 class="text-xl font-semibold flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z"/>
                    </svg>
                    Tailor-Made Workspaces
                </h3>
                <p class="mt-2 text-sm text-gray-600 leading-5">
                    Discover accommodations designed for productivity and comfort, with ergonomic setups in every corner
                    of the globe. Elevate your work-from-anywhere experience with Nomad Stay.
                </p>
            </div>
            <div class="gap-2">
                <h3 class="text-xl font-semibold flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>
                    </svg>
                    Premium Spaces, Quality Guests
                </h3>
                <p class="mt-2 text-sm text-gray-600 leading-5">
                    List your space with Nomad Stay to attract discerning remote workers seeking premium amenities.
                    Ensure your property stands out and appeals to those valuing comfort and productivity.
                </p>
            </div>
            <div class="gap-2">
                <h3 class="text-xl font-semibold flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/>
                    </svg>
                    Easy Hosting, Higher Profits
                </h3>
                <p class="mt-2 text-sm text-gray-600 leading-5">
                    Set your own terms and unlock higher earning potential with up to 20% increased rental prices. Nomad
                    Stay empowers hosts and guests with unparalleled flexibility and competitive rates.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl w-full mx-auto px-4">
        <div class="flex flex-col items-center justify-center gap-6 text-center">
            <h2 class="text-black font-display w-full max-w-4xl text-4xl font-bold md:text-5xl">The Perfect Fusion
                for
                Creatives</h2>
            <h3 class="text-black font-sans mb-8 w-full max-w-[640px] text-sm font-normal opacity-80 md:text-base !leading-6">
                Boundra blends the sophistication of high-end apartments with the functionality of professional
                workspaces to craft an environment creatives thrive in.
            </h3>
        </div>
        <table class="w-full text-zinc-800 max-w-screen-lg m-auto text-lg">
            <thead>
            <tr>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-zinc-800 m-auto">
                    </div>
                </th>
                <th class="text-center border-gray-500 p-4 bg-zinc-200">
                    <div class="text-center text-zinc-800 m-auto">A Boundra Stay</div>
                </th>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-zinc-800 m-auto">Airbnb</div>
                </th>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-zinc-800 m-auto">Our competitors</div>
                </th>
            </tr>
            </thead>
            <tbody class="space-y-4">
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Quality and consistency</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Dedicated Workspaces</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Privacy</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Transparent pricing</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Prime Locations</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Functional Aesthetics</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Coworking Membership included</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Gym membership included</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">Inspiring views</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-900 md:text-lg text-sm">No Host Interactions</span>
                </td>
                <td class="border-gray-500 p-4 bg-zinc-200">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="text-zinc-800 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16"
                         xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <img class="w-max rounded-lg"
                     src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/el-born/office_setup.webp"
                     alt="Sora logo">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">
                    Frequently asked questions
                </h2>
                <p class="mt-2 text-base leading-7 text-gray-600">
                    Here are the answers to all of the most recent questions on Sora.
                </p>
            </div>
            <div class="mt-10 lg:col-span-7 lg:mt-0" x-data="{ selectedQuestion: null }">
                <dl class="space-y-10">
                    @foreach($questions as $index => $question)
                        <div>
                            <dt class="text-base font-semibold leading-7 text-gray-900 cursor-pointer flex justify-between"
                                @click="selectedQuestion === {{ $index }} ? selectedQuestion = null : selectedQuestion = {{ $index }}">
                                {{ $question['question'] }}
                                <!-- Optional: Add an icon to indicate expand/collapse -->
                                <span x-show="selectedQuestion !== {{ $index }}">+</span>
                                <span x-show="selectedQuestion === {{ $index }}">-</span>
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600"
                                x-show="selectedQuestion === {{ $index }}" x-transition>
                                {{ $question['answer'] }}
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>

        </div>
    </div>
</div>
@include('components.footers.main')
