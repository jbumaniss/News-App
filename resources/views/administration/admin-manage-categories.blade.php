<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage All Categories
            </h1>
        </header>
        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($categories->isEmpty())
                @foreach($categories as $category)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/category/{{$category->id}}">
                                {{$category->name}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/posts/admin-manage/categories/{{$category->id}}">
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
                        <p class="text-center">No category found</p>
                    </td>
                </tr>
            @endunless
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">

            <form method="POST" action="">
                @csrf
                <label for="name" class="inline-block text-lg mb-2">
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        placeholder="Category name: ..."
                    />
                </label>
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Add Category
                </button>
            </form>
            </td>
            </tbody>
        </table>
    </div>
</x-layout>
