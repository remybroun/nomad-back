@include('layouts.app')
@section('title', 'List your home')
<div class=" top-0 w-full">
    @include('components.headers.main')
</div>
<div class="bg-white p-8 max-w-screen-xl mx-auto">
    <h1 class="text-3xl font-semibold mb-6">Let’s list your home!</h1>
    <div class="flex items-center gap-4 mb-8">
        <div class="flex items-center gap-2">
            <div class="rounded-full bg-everglade-500 text-white w-8 h-8 flex items-center justify-center">1</div>
            <span class="text-sm font-medium">Location</span>
        </div>
        <div class="w-full h-0.5 bg-gray-300">
        </div>
        <div class="flex items-center gap-2">
            <div class="rounded-full bg-gray-300 text-gray-500 w-8 h-8 flex items-center justify-center">2</div>
            <span class="text-sm font-medium text-gray-500">Amenities</span>
        </div>
        <div class="w-full h-0.5 bg-gray-300">
        </div>
        <div class="flex items-center gap-2">
            <div class="rounded-full bg-gray-300 text-gray-500 w-8 h-8 flex items-center justify-center">3</div>
            <span class="text-sm font-medium text-gray-500">WFH</span>
        </div>
        <div class="w-full h-0.5 bg-gray-300">
        </div>
        <div class="flex items-center gap-2">
            <div class="rounded-full bg-gray-300 text-gray-500 w-8 h-8 flex items-center justify-center">4</div>
            <span class="text-sm font-medium text-gray-500">Photos</span>
        </div>
    </div>
    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-2">Where is your home located?</h2>
        <label for="city" class="block text-sm font-medium mb-1">City</label>
        <input
            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
            id="city" placeholder="Barcelona, Spain">
    </div>
    <div>
        <h2 class="text-xl font-semibold mb-2">Easy access to</h2>
        <p class="text-sm mb-4">Select the options that are easily accessible from your home's location (within a 20-30
            minute walk or a 10-minute drive)</p>
        <div class="grid grid-cols-3 gap-4">
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                    <path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                    <path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                </svg>
                Beach
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <line x1="3" x2="21" y1="22" y2="22">
                    </line>
                    <line x1="6" x2="6" y1="18" y2="11">
                    </line>
                    <line x1="10" x2="10" y1="18" y2="11">
                    </line>
                    <line x1="14" x2="14" y1="18" y2="11">
                    </line>
                    <line x1="18" x2="18" y1="18" y2="11">
                    </line>
                    <polygon points="12 2 20 7 4 7">
                    </polygon>
                </svg>
                City
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="m8 3 4 8 5-5 5 15H2L8 3z">
                    </path>
                </svg>
                Mountains
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <rect width="18" height="18" x="3" y="3" rx="2">
                    </rect>
                    <path d="M9 17V7h4a3 3 0 0 1 0 6H9">
                    </path>
                </svg>
                (National) parks
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <line x1="4" x2="20" y1="12" y2="12">
                    </line>
                    <line x1="4" x2="20" y1="6" y2="6">
                    </line>
                    <line x1="4" x2="20" y1="18" y2="18">
                    </line>
                </svg>
                Bars &amp; Restaurants
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path
                        d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                    </path>
                </svg>
                Airport
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M8 6v6">
                    </path>
                    <path d="M15 6v6">
                    </path>
                    <path d="M2 12h19.6">
                    </path>
                    <path
                        d="M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3">
                    </path>
                    <circle cx="7" cy="18" r="2">
                    </circle>
                    <path d="M9 18h5">
                    </path>
                    <circle cx="16" cy="18" r="2">
                    </circle>
                </svg>
                Public transport
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <rect width="18" height="18" x="3" y="3" rx="2">
                    </rect>
                    <path d="M9 17V7h4a3 3 0 0 1 0 6H9">
                    </path>
                </svg>
                Free parking
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7">
                    </path>
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8">
                    </path>
                    <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4">
                    </path>
                    <path d="M2 7h20">
                    </path>
                    <path
                        d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7">
                    </path>
                </svg>
                Supermarkets
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7">
                    </path>
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8">
                    </path>
                    <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4">
                    </path>
                    <path d="M2 7h20">
                    </path>
                    <path
                        d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7">
                    </path>
                </svg>
                Local markets
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M22 17v1c0 .5-.5 1-1 1H3c-.5 0-1-.5-1-1v-1">
                    </path>
                </svg>
                Co-working spaces
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                    <path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                    <path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1">
                    </path>
                </svg>
                Surfing
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="m6.5 6.5 11 11">
                    </path>
                    <path d="m21 21-1-1">
                    </path>
                    <path d="m3 3 1 1">
                    </path>
                    <path d="m18 22 4-4">
                    </path>
                    <path d="m2 6 4-4">
                    </path>
                    <path d="m3 10 7-7">
                    </path>
                    <path d="m14 21 7-7">
                    </path>
                </svg>
                Gym
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2">
                    </path>
                </svg>
                Yoga classes
            </button>
            <button
                class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="text-gray-600 w-12 h-12">
                    <path d="M4 20V10a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z">
                    </path>
                    <path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2">
                    </path>
                    <path d="M8 21v-5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5">
                    </path>
                    <path d="M8 10h8">
                    </path>
                    <path d="M8 18h8">
                    </path>
                </svg>
                Hiking
            </button>
        </div>
    </div>
    <div class="flex justify-end mt-8">
        <button
            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 bg-everglade-500 text-white">
            Next
        </button>
    </div>
</div>
@include('components.footers.main')
