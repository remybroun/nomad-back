@extends('layouts.app')
@section('title')
    Join - Success
@endsection



<div class="bg-black">
    @include('components.header')
    <main class="min-h-[70vh] w-screen flex font-rotobo text-charcoal-grey bg-charcoal-grey md:items-center md:justify-center">
      <!-- Sign-up form start -->
      <section id="signUp" class="w-full flex-col items-center bg-zinc-900 animate-fadeIn md:w-[768px] md:h-auto md:p-3 md:grid-cols-2 md:gap-2 md:justify-center md:rounded-[40px] md:shadow-2xl md:shadow-darkslate-grey lg:w-[80%] lg:h-[600px] lg:pl-10 lg:py-6 xl:w-[900px] hidden">
        <div class="h-64 w-full  bg-cover bg-bottom bg-no-repeat md:h-full md:w-[95%] md:order-2 md:bg-contain md:bg-center xl:bg-right" aria-hidden="true"></div>

        <div class="w-full mt-4 py-4 px-7 space-y-5 md:p-8">
          <h1 class="font-bold text-4xl text-zinc-200 lg:text-5xl">
            Stay updated!
          </h1>
          <p>Join 60,000+ product managers receiving monthly updates on:</p>
          <ul class="list-none space-y-4">
            <li class="ps-8 bg-icon-list bg-no-repeat" aria-hidden="true">
              Product discovery and building what matters
            </li>
            <li class="ps-8 bg-icon-list bg-no-repeat" aria-hidden="true">
              Measuring to ensure updates are a success
            </li>
            <li class="ps-8 bg-icon-list bg-no-repeat" aria-hidden="true">
              And much more!
            </li>
          </ul>

          <form name="subscribeForm" action="" class="space-y-4" novalidate="">
            <div class="grid grid-cols-2 grid-rows-2">
              <label class="mt-6 mb-2 font-bold text-xs text-zinc-200" for="email">Email address</label>
              <input class="w-full col-span-2 order-3 border border-grey rounded-lg px-5 py-3 outline-none transition disabled:cursor-not-allowed disabled:text-grey enabled:hover:border-darkslate-grey enabled:hover:invalid:border-tomato invalid:bg-tomato/20 invalid:text-tomato invalid:border-tomato focus:border-darkslate-grey focus:invalid:border-tomato peer" type="email" name="email" id="email" placeholder="email@company.com" disabled="">
              <span class="mt-6 mb-2 font-bold text-xs text-end text-tomato invisible peer-invalid:visible">Valid email requited</span>
            </div>
            <button type="submit" name="btnSubmit" class="w-full flex flex-row justify-around items-center rounded-lg bg-darkslate-grey px-4 py-3 font-bold text-white disabled:bg-darkslate-grey/80 disabled:cursor-not-allowed enabled:hover:bg-gradient-to-r enabled:hover:from-pink enabled:hover:to-orange enabled:hover:shadow-lg enabled:hover:shadow-tomato/50 enabled:focus:outline enabled:focus:outline-offset-2 enabled:focus:outline-2 enabled:focus:outline-darkslate-grey" disabled="">
              <span>Subscribe to monthly newsletter</span>
              <img src="/icon-spin.svg" class="animate-spin" alt="" aria-hidden="true">
            </button>
          </form>
        </div>
      </section>
      <!-- Sign-up form end -->

      <!-- Success message start -->
      <section id="success" class="font-display w-full flex-col items-center justify-between bg-zinc-900 px-7 pt-[50%] pb-8 md:max-w-4xl md:rounded-[40px] md:p-12 md:space-y-8 md:shadow-2xl md:shadow-darkslate-grey animate-fadeIn flex">
        <div>
          <h2 class="text-4xl font-bold text-zinc-200 lg:text-5xl garamond">
            You have been added to our waiting list!
          </h2>
          <p class="mt-4 text-zinc-200 font-display leading-8">
            We have sent you a confirmation email to your email address.
          </p>
        </div>
        <a href="/" type="submit" class="w-full max-w-sm rounded-full bg-black px-4 py-10 font-medium text-white hover:bg-everglade-900 text-center items-center flex justify-center px-4 py-3 text-base font-medium shadow-sm">
            Back to home
        </a>
      </section>
      <!-- Success message end -->
    </main>
    <div class="max-w-screen-2xl mx-auto">
    	@include('components.footer')
    </div>
</div>