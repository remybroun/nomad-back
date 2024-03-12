@extends('layouts.app')
@section('title')
    Blog
@endsection
<div class="bg-white">
	@include('components.headers.main')
	    <div class="bg-white my-10">
	      <div class="mx-auto max-w-screen-2xl px-6 lg:px-8 space-y-10">
	    	<h1 class="font-display tracking-tighter text-4xl font-bold text-black">Articles</h1>
	        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-5 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3 md:grid-cols-2">
	          @foreach($posts as $post)
          		@include('components.cards.blogArticle')
	          @endforeach
	        </div>
	      </div>
	    </div>
	@include('components.footers.main')
</div>
