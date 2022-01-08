@props(['heading'])

<section class="px-6 py-8">
    <div class="lg:flex">
        <aside class="lg:w-1/4">
            <h4 class="font-semibold mb-4">Dashboard</h4>
            <ul class="space-y-3">
                <li>
                    <a class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}" href="/admin/posts">All
                        Posts</a>
                </li>
                <li>
                    <a class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}"
                        href="/admin/posts/create">New Post</a>
                </li>

            </ul>
        </aside>
        <main class="lg:flex-1 lg:max-w-3xl">
            <x-panel>
                <h1 class="text-center font-bold text-xl py-8">{{ $heading }}</h1>

                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
