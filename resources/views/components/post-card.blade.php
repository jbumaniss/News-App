@props(['post', 'comments'])


<div class="bg-gray-50 border border-gray-200 rounded p-6 card-shadow ">
    <div class="container">
        <div class="grid grid-cols-2 gap-3 h-[450px]">
            <img
                class="hidden w-[200px] h-[200px] mr-6 md:block"
                src="{{ $post->imageUrl ?  $post->imageUrl : asset('images/no-image.jpg') }}"
                alt="Unavailable in Your Country"
            />
            <div>
                <h3 class="text-2xl">
                    <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $post->comment }}</div>
            </div>
        </div>
    </div>

    <br>
    <div class="mt-auto">
    <div class=" container comments-title bg-laravel text-white rounded py-2 px-4 hover:bg-black w-48 "><a href="">Comments</a>
    </div>
    <div class="comments-content">
        <x-comments :post="$post" :comments="$comments"></x-comments>
    </div>
    </div>
</div>


