@extends('layouts.app')
@section('title')
    Blog - {{$article->title}}
@endsection
@section('description')
    {{$article->description}}
@endsection
@section('metaImage')
    {{$article->imageUrl}}
@endsection

@php
    use Illuminate\Mail\Markdown;
@endphp

<div class="overflow-clip bg-white">
    @include('components.headers.main')
    <img src={{$article->imageUrl}} class="mx-auto object-cover w-full max-h-96">
    <div class="lg:grid lg:grid-cols-3 max-w-screen-xl mx-auto pb-10">
        <div class="col-span-2">
            <div class="max-w-3xl md:mx-auto prose text-justify pt-20 mx-4 font-display space-y-4 markdown-content">
                {!! Markdown::parse($article->content) !!}
            </div>
        </div>
        <div class="pt-10">
            @include('blog.partials.signup')
        </div>
    </div>
    @include('components.footers.main')
</div>
