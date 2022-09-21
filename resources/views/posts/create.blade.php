<x-layout>

    <div
        class=" bg-gray-50 border border-gray-200 p-10 rounded  mx-auto mt-24 container"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Post
            </h2>
        </header>

        <form method="POST" action="/posts" enctype="multipart/form-data">
            @csrf


            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Post Title</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        placeholder="Example: In far far away ..."
                        value="{{old('title')}}"
                    />
                </label>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Category</label>
                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>...</option>
                    @foreach($categories as $key => $category)
                        @if($key !=0)
                    <option value="{{$category->name}}">{{$category->name}}</option>

                        @endif
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="imageUrl" class="inline-block text-lg mb-2">Image Url</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="imageUrl"
                        placeholder="Example: google.com/image.png"
                        value="{{old('imageUrl')}}"
                    />
                </label>
                @error('imageUrl')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="comment" class="inline-block text-lg mb-2">Post Body</label>
                <label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="comment" rows="6"
                          placeholder="Contrary to popular belief, Lorem Ipsum is not simply random">{{old('comment')}}</textarea>
                </label>
                @error('comment')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Post</button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>

</x-layout>
