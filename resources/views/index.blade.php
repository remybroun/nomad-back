@extends('layouts.app')
@section('title')
    Nomad Swap - A marketplace for Nomads to swap homes
@endsection
<div class="bg-black space-y-20 h-max">

    @include('components.header')
    
    <section class="relative h-full sm:max-h-[60vh] overflow-hidden bg-black text-white md:pb-20 max-w-screen-2xl mx-auto font-display">
        <div class="absolute top-0 h-full w-full sm:max-h-[60vh]">
            <img alt="Settle stays background image" draggable="false" fetchpriority="high" decoding="async" data-nimg="fill" class="object-fill object-top blur-sm sm:blur-none h-full" src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/home.webp" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="absolute left-0 top-0 h-full sm:max-h-[60vh] w-full h-[10vh] bg-gradient-to-b from-black to-transparent">
        </div>
        <div class="absolute right-0 top-0 h-full sm:max-h-[60vh] w-full bg-gradient-to-l from-black to-transparent">
        </div>
        <div class="absolute left-0 top-0 h-full sm:max-h-[60vh] w-full bg-gradient-to-r from-black to-transparent">
        </div>
        <div class="absolute bottom-0 left-0 h-[10vh] w-full bg-gradient-to-t from-black to-transparent">
        </div>
        <div class="mx-auto px-10 w-full flex flex-col justify-center gap-3 sm:mt-16 sm:pb-16 md:flex-row 2xl:my-10 h-full sm:max-h-[60vh]">
            <div class="relative mx-auto mt-0 flex w-full flex-col justify-center pt-3 md:px-5 text-left">
                <h1 class="text-white sm:text-5xl font-display mb-8 max-w-[335px] text-4xl font-extrabold md:leading-[71px] lg:max-w-[535px] lg:text-[65px] garamond">
                <span data-br=":r0:" data-brr="1" class="inline-block align-top decoration-inherit">Swap Homes, Travel Limitlessly</span>
                </h1>
                <h2 class="text-white font-sans w-full max-w-[704px] text-sm font-normal opacity-80 shadow-lg sm:w-[327px] md:text-base lg:w-[584px] !leading-8">
                    Exclusive nomad-centric home swap platform. Exchange spaces, roam the world at $0 a night. Dive into the community 
                </h2>
                <div class="mt-6 sm:max-w-[480px]">
                </div>


            </div>
            <div class="relative mx-auto mt-0 flex w-full flex-col items-center justify-center pt-3 xl:container md:px-5">
                <div class="rounded-3xl p-4 flex flex-col border backdrop-blur-[36px] bg-white/10 border-white border-opacity-10 h-100 filter lg:w-[436px] w-full max-w-[436px]">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            <span class="text-xs font-bold uppercase leading-none tracking-widest text-neutral-400">Get added to our beta</span>
                            <h3 class="text-white font-sans text-2xl font-semibold md:text-3xl">Have a home to swap?</h3>
                            <h4 class="font-sans w-full pb-2 text-sm font-normal text-white/80">Add yourself to our list of Nomad home owners</h4>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-4">
                                <form method="POST" action="{{route('landing-sign-up')}}" class="flex flex-col gap-4">
                                    @csrf

                                    <input 
                                        class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('email') ? 'border-red-500' : '' }}"
                                        name="email"
                                        placeholder="Enter your email" 
                                        required
                                        type="email">
                                    @error('email')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror

                                    <input 
                                        class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('country') ? 'border-red-500' : '' }}"
                                        name="country"
                                        placeholder="Which country is your home?" 
                                        required
                                        type="text">
                                    @error('country')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror

                                    <input 
                                        class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('city') ? 'border-red-500' : '' }}"
                                        name="city"
                                        placeholder="Enter your city" 
                                        required
                                        type="text">
                                    @error('city')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror


                                    <input 
                                        class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('desired_city') ? 'border-red-500' : '' }}"
                                        name="desired_city"
                                        placeholder="Where do you want to live? (optional)"
                                        required
                                        type="text">
                                    @error('desired_city')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror

                                    <button type="submit" class="w-full rounded-full bg-black px-4 py-3 font-medium text-white hover:bg-everglade-900 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
                                        Continue
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="max-w-screen-xl mx-auto">
  <ol role="list" class="space-y-10 md:flex md:space-x-8 md:space-y-0 mx-4">
    <li class="md:flex-1">
      <img src="https://a0.muscache.com/im/pictures/2ce2f829-7965-479a-af98-c5a84824ce06.jpg?im_w=720" class="md:h-72 h-56 object-cover w-full">
      <div class="group flex flex-col border-l-4 border-everglade-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
        <span class="text-2xl font-medium text-white garamond italic">Step 1</span>
        <span class="text-xl font-medium text-white">
            Apply to join Nomad Swap
        </span>
        <span class="text-sm font-medium text-white">
            Whether you rent or own, no matter the size, we're scouting for secure, loved homes belonging to true travel enthusiasts
        </span>
      </div>
    </li>
    <li class="md:flex-1">
      <img src="https://a0.muscache.com/im/pictures/pro_photo_tool/Hosting-15217978-unapproved/original/6b7f1436-007d-4b06-89cf-8d23f7a36952.JPEG??im_w=720" class="md:h-72 h-56 object-cover w-full">
      <div class="flex flex-col border-l-4 border-everglade-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
        <span class="text-2xl font-medium text-white garamond italic">Step 2</span>
        <span class="text-xl font-medium text-white">
            Book your first swap from our homes
        </span>
        <span class="text-sm font-medium text-white">
            Skip the nightly rates. Only cover cleaning and a modest service fee for your journey. Newcomers can secure 5 nights even before their first hosting.
        </span>
      </div>
    </li>
    <li class="md:flex-1">
      <img src="https://images.unsplash.com/photo-1601041597271-71988152f98b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2688&q=80" class="md:h-72 h-56 object-cover w-full">
      <div class="flex flex-col border-l-4 border-everglade-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
        <span class="text-2xl font-medium text-white garamond italic">Step 3</span>
        <span class="text-xl font-medium text-white">
            Host to earn credits    
        </span>
        <span class="text-sm font-medium text-white">
            Accumulate journey credits by opening your doors to other nomads.
        </span>
      </div>
    </li>
  </ol>
</div>

<div class="relative md:h-screen">
    <div class="absolute top-0 md:h-screen hidden md:block w-full">
        <img alt="Settle stays background image" draggable="false" fetchpriority="high" decoding="async" data-nimg="fill" class="object-fill object-top blur-sm sm:blur-none h-full" src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/home.webp" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
    </div>    

    <section class="w-full bg-white rounded-lg px-4 py-8 text-center md:px-10 md:py-10 lg:px-10 z-10 md:absolute max-w-2xl flex flex-col items-center justify-center md:left-10 md:top-40">
        <h1 class="text-lg">Swap &amp; stay for a fraction of the cost</h1>
        <div class="mf:text-4xl text-3xl font-bold my-4 lg:my-6">10 night stay comparison</div>
        <div class="mx-4 grid grid-cols-2 lg:mx-10 gap-2">
            <div class="flex flex-col items-center rounded-lg border">
                <div class="my-8 flex flex-col items-center justify-center gap-y-2 p-8 h-full">
                    <h2 class="text-lg garamond italic">With Nomad Swap</h2>
                    <p class="font-bold text-4xl">$300</p>
                </div>
            </div>
            <div class="flex flex-col items-center rounded-lg border">
                <div class="my-8 flex flex-col items-center justify-center gap-y-2 p-8 h-full">
                    <h2 class="text-lg garamond italic">Hotel or rental</h2>
                    <p class="font-bold text-4xl">$2,500+</p>
                </div>
            </div>
        </div>
        <p class="my-6 text-sm lg:my-8">
            No membership fees.
            Just pay for cleaning and a service fee per trip.
        </p>
        <div>
            <a href="{{ route('waitlist') }}">
                <button class="rounded-full px-8 py-3 bg-black text-white hover:bg-everglade-900 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
                    Get on the waitlist
                </button>
            </a>
        </div>
    </section>

</div>

</div>


<div class=" w-full w-full mx-auto bg-black px-4 py-20">
    <div class="flex flex-col items-center justify-center gap-6 text-center">
        <h2 class="text-white font-display w-full max-w-3xl text-4xl font-bold dela leading-10">Home Swaps: The Ultimate Upgrade from Renting</h2>
        <h3 class="text-white font-sans mb-8 w-full max-w-[640px] text-sm font-normal opacity-80 md:text-base !leading-6">
            Trade typical rentals for genuine local experiences. Dive into authentic adventures with every swap. Transform your travels with us.
        </h3>
    </div>
    <table class="w-full text-white max-w-screen-lg m-auto text-lg">
        <thead>
            <tr>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-white m-auto">
                    </div>
                </th>
                <th class="text-center border-gray-500 p-4 bg-[#1A1A1A]">
                    <div class="text-center text-white m-auto dela">Nomad Swap</div>
                </th>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-white m-auto">Airbnb</div>
                </th>
                <th class="text-center border-gray-500 p-4">
                    <div class="text-center text-white m-auto">Our competitors</div>
                </th>
            </tr>
        </thead>
        <tbody class="space-y-4">
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Homey Comforts over Standard Amenities</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">More Savings, Fewer Fees</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Occupied Security over Vacant Risks</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Real Connections, Beyond Transactions</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Prime Locations</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Diverse Home Choices, Beyond Listings</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
            </tr>
            <tr>
                <td class="border-gray-500 p-4">
                    <span class="text-zinc-100 md:text-lg text-sm">Sustainable Stays vs. Commercial Bookings</span>
                </td>
                <td class="border-gray-500 p-4 bg-[#1A1A1A]">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="opacity-50 m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18">
                        </line>
                    </svg>
                </td>
                <td class="border-gray-500 p-4">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-white m-auto" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20 6 9 17 4 12">
                        </polyline>
                    </svg>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="overflow-hidden bg-white py-32">
  <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
      <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dela leading-10">Global Living, One Swap at a Time</h2>
        <p class="mt-6 text-xl leading-8 text-gray-600">Dive into worldwide homes, effortlessly exchanged.</p>
        <p class="mt-6 text-base leading-7 text-gray-600">Experience the thrill of residing in far-off places while offering fellow explorers a piece of your world. Dive into a network where every home swap unlocks a new adventure, enriching your global living experience. Join us, and make every destination feel like home.</p>
        <div class="mt-10 flex">
        <div>
            <a href="{{ route('waitlist') }}">
                <button class="rounded-full px-8 py-3 bg-black text-white hover:bg-everglade-900 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
                    Get on the waitlist
                </button>
            </a>
        </div>
        </div>
      </div>
      <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
          <img src="https://a0.muscache.com/im/pictures/012bd591-7b6a-4bb4-a744-ce8381d920c3.jpg?im_w=720" alt="" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
        </div>
        <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
          <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
            <img src="https://a0.muscache.com/im/pictures/miso/Hosting-886141264366251801/original/e18d0fcd-58e2-4f59-bf1d-829188c2956c.jpeg?im_w=720" alt="" class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
          </div>
          <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
            <img src="https://a0.muscache.com/im/pictures/698beefb-3135-4bb8-9f82-1905b5e3fc02.jpg?im_w=720" alt="" class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
          </div>
          <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
            <img src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-47525850/original/888c9ba7-8d76-4eb1-b347-b6102d55f59f.jpeg?im_w=720" alt="" class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
<div class="bg-black">
    <div class="max-w-screen-2xl mx-auto">
        @include('components.footer')
    </div>
</div>