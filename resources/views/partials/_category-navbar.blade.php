<div class="font-bold uppercase text-center mb-4">Categorys</div>
<nav class="mb-4">
        <ul class="flex space-x-6 mr-6 text-lg justify-around">

            @foreach($categories as $category)

                <li>
                    <a href="/category/{{ Str::lower($category->name) }}" class="hover:text-laravel">
                        <p class="font-bold uppercase">{{$category->name}}</p>
                    </a>
                </li>

            @endforeach
        </ul>
    </nav>

