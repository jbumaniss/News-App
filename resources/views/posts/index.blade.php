<x-layout>
    @include('partials._category-navbar')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if(count($posts) == 0)
            <p>No posts available</p>
        @endif

            @foreach($posts as $post)
            <x-post-card :comments="$comments" :post="$post"></x-post-card>
            @endforeach

    </div>
    {{ $posts->links() }}
</x-layout>
