<div class="text-center">
    <div
        x-data="{ dropdownOpen: false }"
        x-cloak
        @click.outside="dropdownOpen = false"
        class="relative inline-block text-left"
    >
        <button
            @click="dropdownOpen = !dropdownOpen"
            class="flex items-center rounded-[5px] px-10 py-2 bg-white text-base font-medium text-black w-fit gap-2"
        >
            {{$buttonTitle}}
            <span class="">
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current">
                    <path
                        d="M10 14.25C9.8125 14.25 9.65625 14.1875 9.5 14.0625L2.3125 7C2.03125 6.71875 2.03125 6.28125 2.3125 6C2.59375 5.71875 3.03125 5.71875 3.3125 6L10 12.5312L16.6875 5.9375C16.9688 5.65625 17.4063 5.65625 17.6875 5.9375C17.9687 6.21875 17.9687 6.65625 17.6875 6.9375L10.5 14C10.3437 14.1563 10.1875 14.25 10 14.25Z"
                    />
                </svg>
            </span>
        </button>
        <div
            :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' "
            class="shadow-1 shadow-box-dark absolute left-0 z-40 mt-2 w-full rounded-md bg-everglade-600 py-[10px] transition-all"
        >
            @foreach($items as $label => $url)
                <a
                    href="{{ $url }}"
                    class="block py-2 px-5 text-base text-white hover:text-everglade-50"
                >
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</div>
