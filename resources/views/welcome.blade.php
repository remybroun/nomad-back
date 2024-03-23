@extends('layouts.app')
@section('title', 'Accommodations for remote workers, digital nomads and workations - Nomad Stay')
@section('description', 'Find stays equipped for remote workers. Housing equipped for remote workers, high speed wifi, world-class locations and no more problems being productive.')

<main class="w-full mx-auto">
    @include('components.headers.main')

    <div class="w-full py-6 md:py-12 mx-auto">
        <div class="px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-2 text-center">
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl">Find stays equipped for remote
                        workers</h1>
                    <p class="mx-auto max-w-[600px] text-gray-500 md:text-xl">
                        Housing equipped for remote workers
                    </p>
                </div>
                <div class="flex flex-wrap gap-2 justify-center">
                    <div
                        class="inline-flex items-center rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm gap-2">
                        High Speed Wifi
                    </div>
                    <div
                        class="inline-flex items-center rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm gap-2">
                        World-class locations
                    </div>
                    <div
                        class="inline-flex items-center rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm gap-2">
                        No more problems being productive
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-2xl mx-auto my-10 px-4">
        <div class="flex items-center justify-between">
            <h2 class="font-serif tracking-tight sm:text-3xl text-xl py-2">Discover Our Latest Listings</h2>
            <a href="/listings"
               class="w-10 flex text-white items-center text-center h-10 rounded bg-everglade-600 hover:bg-everglade-500">
                <div class="w-full" aria-hidden="true">→</div>
            </a>
        </div>
        @include('components.listingGrid', ['listings' => $featuredListings])
        <div class="flex items-center justify-center mt-5">
            <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500"
               href="/listings">See all our Nomad Listings</a>
        </div>
    </div>

{{--    <div class="lg:grid lg:grid-cols-4 flex flex-col-reverse gap-y-10 max-w-screen-2xl mx-auto my-20">--}}
{{--        <div class="lg:col-span-2 col-span-7 mx-auto flex flex-col justify-center">--}}
{{--            <span class="rounded-full bg-everglade-600 text-sm text-white px-3 py-1 h-fit w-fit my-2">New</span>--}}
{{--            <div class="space-y-6">--}}
{{--                <div class="space-y-4">--}}
{{--                    <h2 class="text-black font-display font-bold sm:text-5xl text-4xl tracking-tight leading-8">--}}
{{--                        Introducing Boundra</h2>--}}
{{--                    <p class="sm:text-xl text-lg leading-5 text-gray-500 tracking-tight font-serif italic">An--}}
{{--                        apartment built for Remote Workers</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 w-full bg-everglade-800 max-w-xs mt-5 font-light py-3 text-sm mx-auto lg:mx-0"--}}
{{--               href="https://boundra.com">Discover <span class="font-bold mx-1"> Boundra</span> →</a>--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <img class="rounded object-cover mx-auto w-full max-w-sm col-span-3 aspect-square align-middle"--}}
{{--                 alt="nomad setup with screen, chair and desk"--}}
{{--                 src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/pilot/f4b5e877655267.5c8e5635d97e8.webp"--}}
{{--                 decoding="async" data-nimg="future">--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="max-w-screen-xl mx-auto h-3/4" id="a-complete-setup">
        <div class="my-6 px-4">
            <h2 class="font-display text-3xl tracking-tight font-bold text-black sm:text-3xl">
                <p class="sr-only">A standard for remote working</p>A standard for remote working
            </h2>
            <h3 class="font-display text-xl sm:text-xl tracking-tight font-light text-gray-500">The latest tech in all
                our locations</h3>
        </div>
        <div class="grid grid-cols-7 mx-auto flex items-center gap-y-10">
            <div
                class="px-4 mx-auto font-medium flex flex-col gap-10 col-span-full md:col-span-2 w-full grid grid-cols-2 sm:grid-cols-1">
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Ergonomic Office chair
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Herman Miller
                        Aeron Chair</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Standing Desk
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Jarvis
                        Hardwood</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        HD Webcam
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Logitech C920x HD
                        Pro</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Green screen
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Keep it low key
                        during meetings</p>
                </div>
            </div>
            <div class="col-span-full md:col-span-3 hidden sm:block">
                <img alt="nomad office" src="https://i.pinimg.com/564x/e1/eb/28/e1eb28c90f4bbd9dffc35182d9606c0c.jpg"
                     width="400" decoding="async" data-nimg="future" class="object-cover mx-auto rounded">
            </div>
            <div
                class="px-4 mx-auto font-medium flex flex-col gap-10 col-span-full md:col-span-2 w-full grid grid-cols-2 sm:grid-cols-1">
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        4k Monitor
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">LG 27GN88A-B</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Mechanical Keyboard
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Keychron - K8</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Wireless multitask mouse
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">Logitech MX Master
                        2</p>
                </div>
                <div class="">
                    <div
                        class="text-lg sm:text-base md:text-lg xl:text-xl font-medium sm:max-h-6 items-center flex leading-5 md:truncate">
                        Microphone
                    </div>
                    <p class="text-gray-500 sm:text-sm text-xs tracking-tight font-light leading-3">RØDE NT-USB
                        Microphone</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative sm:my-20 my-5 font-display max-w-screen-xl mx-auto">
        <div class="h-56 bg-white sm:h-72 md:absolute md:left-0 md:h-full md:w-1/3">
            <img class="rounded w-full h-full object-cover"
                 src="https://www.contemporist.com/wp-content/uploads/2018/04/cantilevered-home-office-windows-modern-house-300418-315-03.jpg"
                 alt="">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:py-12 py-8 sm:px-4 lg:px-8 lg:py-16">
            <div class="md:ml-auto md:w-2/3 md:pl-10">
                <h2 class="text-base font-semibold uppercase tracking-wider text-gray-700">Start hosting nomads</h2>
                <p class="font-display mt-2 text-black text-3xl font-semibold tracking-tight sm:text-4xl">
                    Promote your listing for remote workers on Nomad Stay
                </p>
                <p class="mt-3 text-lg font-display text-gray-600">
                    Once we have certified your listing is equipped for remote workers, we
                    will promote it on Nomad Stay. Our portfolio of Nomad Listings will be
                    accessible to all of our community.
                </p>
                <div class="mt-8">
                    <div class="inline-flex rounded-md shadow">
                        <a class="inline-flex justify-center rounded-xl bg-black px-4 py-2 text-base font-semibold text-white hover:bg-black focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-everglade-600 hover:bg-everglade-500"
                           href="/pricing">Our plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-12 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-900 font-display">Our partners working to
                help nomads worldwide</h2>
            <div
                class="mx-auto mt-10 max-w-lg flex justify-center items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5 max-h-12">
                <a href="https://remotebase.co">
                    <img class="rounded max-w-xs max-h-16 py-2 w-full object-contain"
                         src="https://static.tildacdn.com/tild3363-3134-4638-b164-323062306532/RemoteBase_Logo.png"
                         alt="Transistor" width="158" height="48">
                </a>
                <a href="https://nomadcowork.com">
                    <img class="rounded max-w-xs max-h-16 py-2 w-full object-contain"
                         src="https://icowork-static-prd.s3.amazonaws.com/static/static_images/icw-logo-text.png"
                         alt="nomadcowork" width="158" height="48">
                </a>
                <a href="https://manaapartments.com">
                    <img class="rounded max-w-xs max-h-16 w-full object-contain bg-everglade-600 rounded-lg"
                         src="https://manaapartments.com/wp-content/uploads/2023/02/LOGO-Mana-Grises-2-1.png"
                         alt="manaapartments" width="158" height="48">
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 sm:px-6" id="start-hosting-nomads">
        <div class="space-y-10">
            <div class="space-y-4 py-20">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-serif tracking-tight text-3xl mb-4">Host nomads working in the most remote
                        companies</h2>
                    <p class="font-display text-gray-600">Have you ever been scared that your guest will not be tidy, or
                        will throw a party in your Airbnb? With Nomad Stay, you can be sure this won't happen. Rent
                        out to nomads who are looking only looking for <span class="font-bold">mid-long stays</span> and
                        who are <span class="font-bold">looking to work</span> out of your Airbnb!</p>
                </div>
                <div class="max-w-sm md:max-w-4xl mx-auto grid gap-2 grid-cols-4 md:grid-cols-5">
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="h-16"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img alt="Qries"
                             src="https://lh3.googleusercontent.com/NGPrjka2ai0w7sfhxkxCwtOSh2wVyEZMdtrVxI4vrA22ebA_fcyl9PSvhTaCYXSWh0A68ZhvXhVZ4U-Nnp3v9IfoXg5o5H1tjjK97cs">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://upload.wikimedia.org/wikipedia/fr/2/23/Payfit_logo_blue.png" class="h-16"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto">
                        <img src="https://download.logo.wine/logo/Zendesk/Zendesk-Logo.wine.png" class="h-20"
                             alt="apple">
                    </div>
                    <div class="flex items-center justify-center py-2 col-span-2 md:col-auto col-start-2 col-end-4">

                    </div>
                </div>
            </div>
            <h3 class="max-w-screen-lg mx-auto w-full mt-6 font-display md:text-3xl text-xl font-bold">Join a community
                of remote workers</h3>

            <div class="w-full grid gap-6 md:gap-12 lg:grid-cols-2 xl:gap-10 xl:grid-cols-3">
                <div class="flex flex-col items-center gap-2">
                    <div class="border text-card-foreground shadow-lg bg-white p-4 rounded-lg space-y-4">
                        <img
                            src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/nomadremy.webp" width="96"
                            height="96" alt="Portrait of Emily" class="rounded-full"
                            style="aspect-ratio: 96 / 96; object-fit: cover;">
                        <div class="grid gap-1">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Software Engineer</p>
                        </div>
                        <p class="text-sm">
                            “After Spending so much time looking for convinient Airbnbs, I decided to found
                            Nomad Stay. An airbnb curation list driven by a community of nomads. <br> My
                            goal is to ensure that all remote workers find a perfect place to live and work
                            in harmony“
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="border text-card-foreground shadow-lg bg-white p-4 rounded-lg space-y-4">
                        <img
                            src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/1590874819807.webp"
                            width="96" height="96" alt="Portrait of Alex" class="rounded-full"
                            style="aspect-ratio: 96 / 96; object-fit: cover;">
                        <div class="grid gap-1">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Software Engineer</p>
                        </div>
                        <p class="text-sm">
                            “Ever since Google has offered us the chance to work remotely, I have always
                            dreamed of finding the perfect airbnb made for the remote worker. <br>Now with
                            Nomad Stay, I don't have one, but hundreds of airbnbs to choose from.“
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="border text-card-foreground shadow-lg bg-white p-4 rounded-lg space-y-4">
                        <img
                            src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/other/1627333510820.webp"
                            width="96" height="96" alt="Portrait of Sophia" class="rounded-full"
                            style="aspect-ratio: 96 / 96; object-fit: cover;">
                        <div class="grid gap-1">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Software Engineer</p>
                        </div>
                        <p class="text-sm">
                            “I have been a full-time nomad since 2018. I haven't stopped travelling! Work
                            also can't stop. Multiple times I was at risk of losing my job due to a bad set
                            up, poor Wi-Fi or colleagues questionning my whereabouts. Nomad Stay seems to
                            be the way to go. I can't wait until I try my first Nomad Listing.“
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <section id="newsletter" aria-label="Newsletter">
            <div class="mx-auto max-w-screen-xl px-4">
                <div
                    class="relative -mx-4 overflow-hidden bg-everglade-100 py-16 px-4 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-5xl md:px-16 xl:px-24 xl:py-24 sm:mt-20 text-white">
                    <div class="absolute inset-0">
                        <img class="rounded w-full h-full object-cover"
                             src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&amp;q=35&amp;w=1280"
                             alt="">
                        <div class="absolute inset-0 bg-gray-500 mix-blend-multiply" aria-hidden="true">
                        </div>
                    </div>
                    <div
                        class="relative mx-auto grid max-w-4xl w-full grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                        <div>
                            <p class="font-serif text-4xl font-medium tracking-tight text-white sm:text-5xl">Get news on
                                our latest locations</p>
                            <p class="mt-4 text-lg tracking-tight text-white">Get notified when we add new locations to
                                our collection. You will receive promo codes and lifestyle hacks as well.</p>
                        </div>
                        <form name="newsletter2" method="POST" action="{{ route('join-newsletter') }}"
                              class="flex flex-col gap-4 sm:gap-8">
                            @csrf
                            <h3 class="text-lg font-semibold tracking-tight text-white">Sign up to our newsletter <span
                                    aria-hidden="true">↓</span>
                            </h3>
                            <div
                                class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 shadow-xl shadow-black/5 focus-within:ring-2 focus-within:ring-black overflow-hidden">
                                <input type="email" name="email" value="" required="" placeholder="Email address"
                                       aria-label="Email address"
                                       class="-my-2.5 flex-auto bg-transparent pl-6 pr-2.5 text-base text-slate-900 placeholder:text-slate-400 focus:outline-none">
                                <button
                                    class="focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:text-white/70 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-everglade-900 hover:bg-everglade-600"
                                    type="submit">
                                    <span class="sr-only sm:not-sr-only">Sign up</span>
                                    <span class="sm:hidden">
									<svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6">
										<path d="m14 7 5 5-5 5M19 12H5" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										</path>
									</svg>
								</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</main>
@include('components.footers.main')
