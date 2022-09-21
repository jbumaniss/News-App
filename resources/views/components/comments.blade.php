@props(['post', 'comments'])

@foreach($comments as $comment)

    @if($comment->post_id === $post->id)

    <div class="p-6 mb-4 border border-gray-200 rounded"><p>{{ $comment->name }} : </p>
        <p>{{ $comment->comment }}</p>
        <p class="font-bold text-xs text-end">{{ $comment->created_at }}</p>
    </div>
    @endif
@endforeach

<form method="POST" action="/comments/{{$post->id}}" enctype="multipart/form-data">
    @csrf
    <div class="text-xl font-bold mb-4">
        <label for="name" class="inline-block text-lg mb-2">Name
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                placeholder="Example: John"
            />
        </label>
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="text-xl font-bold mb-4">
        <label for="email" class="inline-block text-lg mb-2">Email
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                placeholder="Example: example@example.com"
            />
        </label>
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-6 font-bold">
        <label for="comment" class="inline-block text-lg mb-2">Comment</label>
        <label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="comment" rows="6"
                          placeholder="Contrary to popular belief, Lorem Ipsum is not simply random">{{old('comment')}}</textarea>
        </label>
        @error('comment')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Comment</button>
        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
