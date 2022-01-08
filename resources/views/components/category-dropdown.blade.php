<x-dropdown>
    <x-slot name="trigger">
        <button class="inline-flex py-2 pl-3 pr-9 text-sm font-semibold w-full text-left">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name="down-arrow" style="right: 12px;" class="absolute pointer-events-none" />
        </button>
    </x-slot>
    <x-dropdown-item :active="request()->routeIs('home')"
        href="/?{{ http_build_query(request()->except('category', 'page')) }}">All</x-dropdown-item>
     @foreach ($categories as $category)
        <x-dropdown-item :active="request('category') == $category->slug"
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">
            {{ ucwords($category->name) }}
        </x-dropdown-item>


        @endforeach

</x-dropdown>
