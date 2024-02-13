@extends('layouts.app')
@section('title', 'Coworking locations in ' . $location->name)


@section('content')


    @include('components.headers.main')
    <div class="max-w-screen-xl mx-auto min-h-screen space-y-6 px-4">
        <div class="relative bg-indigo-400 rounded-lg overflow-hidden mx-auto">
            <div class="absolute inset-0">
                <img
                    src="https://images2.dwell.com/photos/6263102025783029760/6267097017049030656/original.jpg?auto=format&q=35&w=1280"
                    class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-16 py-24 leading-4">
                <h1 class="text-xl font-display text-white sm:text-2xl lg:text-3xl">
                    Coworking locations in <br>
                    <span class="font-bold text-3xl">{{ $location->name }}</span>
                </h1>
            </div>
        </div>

        {{--    Coworking Grid @include --}}

        @include('components.coworkingGrid', ['coworkings' => $coworkings])
        <div class="mt-4">
            {{ $coworkings->links() }}
        </div>


    </div>

    @include('components.footers.main')

@endsection
