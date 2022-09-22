<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage All Posts
            </h1>
        </header>
        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($posts->isEmpty())
                @foreach($posts as $post)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/posts/{{$post->id}}">
                                {{$post->title}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-end">
                            <form method="POST" action="/posts/admin-manage/posts/{{$post->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No posts found</p>
                    </td>
                </tr>
            @endunless
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</x-layout>
