<div class="h-max sm:px-4 bg-black min-h-screen">
    <div
        class="bg-background flex flex-col text-white bg-blend-screen selection:bg-black/30 font-display relative h-screen">
        <div class="absolute top-0 h-full w-full">
            <img alt="Boundra stays background image" draggable="false" fetchpriority="high" decoding="async"
                 data-nimg="fill" class="object-cover object-top blur-sm sm:blur-none h-full"
                 src="https://images.unsplash.com/photo-1525026198548-4baa812f1183?q=80&w=3734&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="absolute left-0 top-0 h-full w-full h-80 bg-gradient-to-b from-black to-transparent">
        </div>
        <div class="absolute right-0 top-0 h-full w-full bg-gradient-to-l from-black to-transparent max-w-screen-xl">
        </div>
        <div class="absolute left-0 top-0 h-full w-full bg-gradient-to-r from-black to-transparent max-w-screen-xl">
        </div>
        <div class="absolute bottom-0 left-0 h-80 w-full bg-gradient-to-t from-black to-transparent">
        </div>
        <div
            class="mx-auto md:px-20 w-full flex flex-col justify-center gap-3 sm:mt-16 sm:pb-16 md:flex-row 2xl:my-10 h-full">
            <div
                class="container mx-auto flex md:min-h-[60vh] flex-col items-center justify-center space-y-10 px-8 lg:flex-row lg:space-x-8 lg:px-0 lg:pb-10 xl:space-x-24 z-10">
                <div class="flex flex-col space-y-2">

                    <h1 class="garamond text-4xl font-bold lg:text-5xl text-center sm:text-left">Start hosting remote workers</h1>

                    <p class="max-w-md text-lg opacity-75 lg:text-xl text-center sm:text-left">
                        Join the waitlist and we'll contact you for access.
                    </p>
                </div>

                <div class="relative mx-auto mt-0 pt-3 md:px-5 w-full max-w-lg ">
                    <div
                        class="rounded-3xl p-4 border backdrop-blur-[36px] bg-white/10 border-white border-opacity-10 w-full mx-auto">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <span class="text-xs font-bold uppercase leading-none tracking-widest text-neutral-400">WAITLIST ACCESS FORM</span>
                                <h3 class="text-white font-sans text-2xl font-semibold md:text-3xl">Apply for
                                    access</h3>
                                <h4 class="font-sans w-full pb-2 text-sm font-normal text-white/80">Join the waitlist
                                    and we'll contact you for access.</h4>
                            </div>
                            <form action="{{ route('joinForm') }}" method="POST"
                                  class="flex flex-col gap-4">
                                @csrf
                                <div class="grid-cols-2 grid gap-4">
                                    <div class="col-span-1">
                                        <input
                                            class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('first_name') ? 'border-red-500' : '' }}"
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
                                            class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('last_name') ? 'border-red-500' : '' }}"
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
                                    class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('email') ? 'border-red-500' : '' }}"
                                    name="email"
                                    placeholder="Enter your email"
                                    required
                                    type="email">
                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <input
                                    class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('company') ? 'border-red-500' : '' }}"
                                    name="company"
                                    placeholder="Enter your company name"
                                    required
                                    type="text">
                                @error('company')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <input
                                    class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('city') ? 'border-red-500' : '' }}"
                                    name="city"
                                    placeholder="Enter your city"
                                    required
                                    type="text">
                                @error('city')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <div class="grid-cols-2 grid gap-4">
                                    <div class="col-span-1">
                                        <input
                                            class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('instagram') ? 'border-red-500' : '' }}"
                                            name="instagram"
                                            placeholder="instagram @ (optional)"
                                            required
                                            type="text">
                                        @error('instagram')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-1">
                                        <input
                                            class="text-white bg-transparent placeholder:text-zinc-200 flex-1 rounded-lg border border-white/20 backdrop-blur-xl z-10 relative flex gap-1 w-full {{ $errors->has('linkedin') ? 'border-red-500' : '' }}"
                                            name="linkedin"
                                            placeholder="Linkedin url (optional)"
                                            required
                                            type="text">
                                        @error('linkedin')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
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
</div>
