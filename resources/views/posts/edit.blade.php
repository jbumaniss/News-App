<x-layout>

    <div
        class=" bg-gray-50 border border-gray-200 p-10 rounded  mx-auto mt-24 container"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit a Post
            </h2>
        </header>

        <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Post Title</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        placeholder="Example: In far far away ..."
                        value="{{$post->title}}"
                    />
                </label>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category" class="inline-block text-lg mb-2">Category</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="category"
                        placeholder="Example: Business, Sports"
                        value="{{$post->category}}"
                    />
                </label>
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
                        value="{{$post->imageUrl}}"
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
                          placeholder="Contrary to popular belief, Lorem Ipsum is not simply random">{{$post->comment}}</textarea>
                </label>
                @error('comment')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Edit Post</button>
                <a href="/posts/manage" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>

</x-layout>
