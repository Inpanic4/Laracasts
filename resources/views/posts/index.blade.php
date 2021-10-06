    <x-layout>

        @include('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            {{-- if we have 0 posts show the message no posts yet... --}}
            @if ($posts->count())
                <x-posts-grid :posts="$posts" />
            @else
                <p class="text-center">
                    No posts yet. Please check back later.
                </p>
            @endif
        </main>
    </x-layout>
