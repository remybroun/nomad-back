<div x-data="{ searchResults: [], query: '' }" @keydown.window.escape="searchResults = []" @click.away="searchResults = []">
    <input
        type="text"
        name="query"
        placeholder="{{ $placeholder ?? 'Search'}}"
        class="{{ $class ?? 'px-4 py-2 w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:outline-none' }}"
        x-model="query"
        @input.debounce.400ms="if(query.length > 2) {
            fetch('/search/locations?query=' + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    searchResults = data;
                });
        } else {
            searchResults = [];
        }"
    >
    <div class="absolute z-20 bg-white mt-1 p-2 rounded-lg shadow-lg w-full" x-show="searchResults.length > 0">
        <template x-for="result in searchResults" :key="result.id">
                    <a :href="'/listings/locations/' + result.slug"
                       class="block px-4 py-2 hover:bg-gray-100" x-text="result.name">
                    </a>
        </template>
    </div>
</div>
