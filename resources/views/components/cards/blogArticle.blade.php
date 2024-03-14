<div class="flex flex-col items-start bg-zinc-100 rounded-xl">
    <a href="{{"/blog/".$post['url']}}">
        <div class="relative w-full">
            <img src="{{$post['imageUrl']}}" alt=""
                 class="aspect-[16/9] w-full rounded-t-2xl bg-gray-100 object-cover lg:aspect-[3/2]">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10">
            </div>
        </div>
        <div class="max-w-xl px-3 pb-4">
            <div class="mt-4 flex items-center gap-x-4 text-xs">
                @if($post['created_at'])
                    <time datetime="{{ $post['created_at'] }}" class="text-zinc-500 py-1">
                        {{ date('F j, Y', strtotime($post['created_at'])) }}
                    </time>
                @endif
                @if($post['category'])
                    <a href="#"
                       class="relative z-10 rounded-full bg-everglade-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                        {{$post['category']['title'] ?? 'uncategorized' }}
                    </a>
                @endif
            </div>
            <div class="group relative">
                <h3 class="mt-2 text-lg font-semibold leading-6 text-zinc-800 group-hover:text-gray-600">
                    <a href="{{"/blog/articles/".$post['url']}}">
					<span class="absolute inset-0">
					</span>{{$post['title']}}</a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-zinc-600">{{$post['description']}}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                @if($post['author'])
                    <img alt="" srcset="{{$post['author']['imageUrl'] ?? ''}}" decoding="async" data-nimg="1"
                         class="h-10 w-10 rounded-full bg-gray-100" loading="lazy" style="color: transparent;">
                @endif
                <div class="text-sm leading-6">
                    <p class="font-semibold text-zinc-800">
						<span class="absolute inset-0">
						</span>{{$post['author']['name'] ?? ''}}</p>
                    <p class="text-gray-600">{{$post['author']['role'] ?? ''}}</p>
                </div>
            </div>
        </div>
    </a>
</div>
