@auth()
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?img={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6 mt-10">
                                    <textarea name="body"
                                              class="w-full text-sm focus:outline-none focus:ring"
                                              cols="30" rows="5"
                                              placeholder="Think of something to say!"
                                              required></textarea>

                @error('body')
                <span class="text-xs text-red">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href='/register' class="font-semibold text-blue-500 hover:underline">Register</a> or <a href="/login" class="font-semibold text-blue-500 hover:underline">log in</a> to leave a comment
    </p>
@endauth
