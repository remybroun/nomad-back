<header class="relative z-50 md:pb-6 lg:pt-10 w-full bg-black">
  <div class="mx-auto max-w-7xl px-4 xl:px-0 flex flex-wrap items-center justify-between lg:flex-nowrap">
    <div class="mt-10 lg:mt-0 lg:grow lg:basis-0 h-20">
      <a href="/"><h1 class="text-3xl font-normal tracking-tight dela text-white">Nomad Swap</h1></a>
    </div>
    <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end gap-10 font-display font-medium tracking-tight text-white">
      @guest
      <div>
        <a href="{{route('login')}}" class="text-black hover:text-everglade-600 bg-everglade-100 px-4 py-2 rounded-full">
          Sign into Members Area
        </a>
      </div>
      @endguest
    </div>
  </div>
</header>