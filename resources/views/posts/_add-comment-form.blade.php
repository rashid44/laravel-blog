@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img class="rounded-full" src="/images/user.jpg" width="60" height="60" alt="avatar">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea class="w-full text-sm p-2 focus:outline-none focus:ring" name="body" id="body" rows="5"
                    placeholder="Quick, thing of something to say!" required></textarea>

                @error('body')
                    <span class="text-xs font-bold text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-5 pt-5 border-t border-gray-200">
               <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a class="text-blue-500 hover:underline" href="/register">Register</a> or <a class="text-blue-500 hover:underline"
            href="/login">Log in</a> to leave a comment
    </p>
@endauth
