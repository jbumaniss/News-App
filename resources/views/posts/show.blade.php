<x-layout>
    <a href="/posts/manage" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{ $post->imageUrl ?  $post->imageUrl : asset('images/no-image.jpg') }}"
                    alt=""
                />
                <h3 class="text-2xl mb-2">{{ $post->title }}</h3>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-list-alt"></i> {{$post->category}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Post Body
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$post->comment}}
                    </div>
                </div>
            </div>
        </div>
        <x-comments :post="$post" :comments="$comments"></x-comments>
    </div>
</x-layout>
