@extends('layouts.app')
@section('title')
    Nomad Swap - Waitlist
@endsection

<div class="absolute top-0 w-full">
    @include('components.header')            
</div>
<div class="h-max sm:px-4 bg-black min-h-screen">
    <div class="bg-background flex flex-col text-white bg-blend-screen selection:bg-black/30 font-display relative h-screen">
        <div class="absolute top-0 h-full w-full">
            <img alt="Settle stays background image" draggable="false" fetchpriority="high" decoding="async" data-nimg="fill" class="object-cover object-top blur-sm sm:blur-none h-full" src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/home.webp" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="absolute left-0 top-0 h-full w-full  h-60 bg-gradient-to-b from-black to-transparent">
        </div>
        <div class="absolute right-0 top-0 h-full w-full bg-gradient-to-l from-black to-transparent">
        </div>
        <div class="absolute left-0 top-0 h-full w-full  bg-gradient-to-r from-black to-transparent">
        </div>
        <div class="absolute bottom-0 left-0 h-60 w-full bg-gradient-to-t from-black to-transparent">
        </div>
        <div class="mx-auto md:px-20 w-full flex flex-col justify-center gap-3 sm:mt-16 sm:pb-16 md:flex-row 2xl:my-10 h-full">
        <div class="mx-auto flex md:min-h-[60vh] flex-col items-center justify-center space-y-10 px-8 lg:flex-row lg:space-x-8 lg:px-0 lg:pb-10 xl:space-x-24 z-10">
            <div class="flex flex-col space-y-2">

              <h1 class="garamond text-6xl font-bold lg:text-5xl text-center sm:text-left">Join our waitlist</h1>

              <p class="max-w-md text-lg opacity-75 lg:text-xl text-center sm:text-left">Join the waitlist and we'll contact you for access.</p>
            </div>

        <div class="relative mx-auto mt-0 pt-3 md:px-5 w-full max-w-lg ">
            <div class="rounded-3xl p-4 border backdrop-blur-[36px] bg-white/10 border-white border-opacity-10 w-full mx-auto">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <span class="text-xs font-bold uppercase leading-none tracking-widest text-neutral-400">WAITLIST ACCESS FORM</span>
                        <h3 class="text-white font-sans text-2xl font-semibold md:text-3xl">Get early access</h3>
                        <h4 class="font-sans w-full pb-2 text-sm font-normal text-white/80">Enter your details to gain access to our locations</h4>
                    </div>
                    <form method="POST" action="{{route('waitlist-form');}}" class="flex flex-col gap-4">
                        @csrf
{{--                        <input 
                            class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('first_name') ? 'border-red-500' : '' }}"
                            name="first_name" 
                            placeholder="Enter your first name" 
                            required
                            type="text">
                        @error('first_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
 --}}
                        <input 
                            class="text-white bg-transparent placeholder:text-zinc-300 flex-1 rounded-lg border border-white/20 backdrop-blur-xl !text-white z-10 relative flex gap-1 w-full {{ $errors->has('email') ? 'border-red-500' : '' }}"
                            name="email"
                            placeholder="Enter your email" 
                            required
                            type="email">
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror

                        <button type="submit" class="w-full rounded-full bg-black px-4 py-3 font-medium text-white hover:bg-everglade-900 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
                            Join waitlist &rarr;
                        </button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

</div>