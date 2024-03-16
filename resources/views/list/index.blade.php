@extends('layouts.app')
@section('title')
    Nomad Stay - List your property
@endsection
<div class=" top-0 w-full">
    @include('components.headers.main')
</div>
<div class="max-w-screen-2xl px-4 mx-auto py-10">
    <div class="bg-background flex flex-col text-white bg-blend-screen selection:bg-black/30 font-display relative md:max-h-[80vh] rounded-lg overflow-clip">
        <div class="absolute top-0 h-full w-full">
            <img alt="Nomad Stay background image" draggable="false" fetchpriority="high" decoding="async"
                 data-nimg="fill" class="object-cover object-top blur-sm sm:blur-none h-full"
                 src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/home.webp"
                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="absolute left-0 top-0 h-full w-full  h-60 bg-gradient-to-b from-black/40 to-transparent">
        </div>
        <div class="absolute right-0 top-0 h-full w-full bg-gradient-to-l from-black/40 to-transparent">
        </div>
        <div class="absolute left-0 top-0 h-full w-full  bg-gradient-to-r from-black/40 to-transparent">
        </div>
        <div class="absolute bottom-0 left-0 h-60 w-full bg-gradient-to-t from-black/40 to-transparent">
        </div>
        <div class="mx-auto md:px-20 w-full flex flex-col justify-center gap-3 sm:mt-16 sm:pb-16 md:flex-row 2xl:my-10 h-full">
            <div class="container mx-auto flex md:min-h-[60vh] flex-col items-center justify-center space-y-10 px-8 lg:flex-row lg:space-x-8 lg:px-0 lg:pb-10 xl:space-x-24 z-10">
                <div class="flex flex-col space-y-4">
                    <h1 class="font-display text-3xl font-bold lg:text-5xl text-center sm:text-left">Are you an owner?</h1>
                    <p class="max-w-md text-lg opacity-75 lg:text-lg text-center sm:text-left">At Nomad Stay, we
                        believe in the power of quality. Say goodbye to getting lost among a multitude of properties,
                        because now is your moment to stand out and thrive.</p>
                    <p class="max-w-md text-lg opacity-75 lg:text-lg text-center sm:text-left">we have
                        crafted a platform with operators like you in mind. Say farewell to troublesome guests, the fear
                        of negative reviews, and the hassle of chargebacks. We've got you covered.</p>
                </div>

                <div class="relative mx-auto mt-0 pt-3 md:px-5 w-full max-w-lg ">
                    <div class="rounded-3xl p-4 border backdrop-blur-[36px] bg-white/10 border-white border-opacity-10 w-full mx-auto">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <span class="text-xs font-bold uppercase leading-none tracking-widest text-neutral-400">WAITLIST ACCESS FORM</span>
                                <h3 class="text-white font-sans text-2xl font-semibold md:text-3xl">List on Nomad Stay</h3>
                                <h4 class="font-sans w-full pb-2 text-sm font-normal text-white/80">We are currently in
                                    private beta. Join our waitlist to get early access.</h4>
                            </div>
                            <form action="{{ route('joinForm') }}" method="POST" class="flex flex-col gap-4">
                                @csrf
                                <div class="grid-cols-2 grid gap-4">
                                    <div class="col-span-1">
                                        <input
                                                class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative px-2 py-1 flex gap-1 w-full {{ $errors->has('first_name') ? 'border-red-500' : '' }}"
                                                name="first_name"
                                                placeholder="First name"
                                                required
                                                type="text">
                                        @error('first_name')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-1">
                                        <input
                                                class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative px-2 py-1 flex gap-1 w-full {{ $errors->has('last_name') ? 'border-red-500' : '' }}"
                                                name="last_name"
                                                placeholder="Last name"
                                                required
                                                type="text">
                                        @error('last_name')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <input
                                        class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative px-2 py-1 flex gap-1 w-full {{ $errors->has('email') ? 'border-red-500' : '' }}"
                                        name="email"
                                        placeholder="Enter your email"
                                        required
                                        type="email">
                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <input
                                        class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative px-2 py-1 flex gap-1 w-full {{ $errors->has('company') ? 'border-red-500' : '' }}"
                                        name="airbnb link"
                                        placeholder="Enter your airbnb link (optional)"
                                        required
                                        type="text">
                                @error('airbnb link')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <input
                                        class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative px-2 py-1 flex gap-1 w-full {{ $errors->has('city') ? 'border-red-500' : '' }}"
                                        name="city"
                                        placeholder="Enter your city"
                                        required
                                        type="text">
                                @error('city')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <button type="submit"
                                        class="w-full rounded-full bg-white px-4 py-3 font-medium text-black hover:bg-everglade-200 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
                                    Continue
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footers.main')
</div>
