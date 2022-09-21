<nav class="flex justify-between items-center mb-4">
    <a href="/">
        <img class="w-24 logo ml-4" src="{{asset('images/newsicon.png')}}" alt=""/>
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth()
            <li>
            <span class="font-bold uppercase">
                Welcome
            </span>
            </li>

            <li>
                <a href="/" class="hover:text-laravel">
                    <i class="fa-solid fa fa-newspaper mr-2"></i>Posts
                </a>
            </li>

            <li>
                <a href="/posts/create" class="hover:text-laravel">
                    <i class="fa-solid fa-plus"></i>Create post
                </a>
            </li>

            <li>
                <a href="/posts/manage" class="hover:text-laravel">
                    <i class="fa-solid fa-gear"></i>Manage posts
                </a>
            </li>

            <li>
                <a class="hover:text-laravel" href="#">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-open"></i> Logout
                        </button>
                    </form>
                </a>
            </li>

        @else

            <li>
                <a href="/register" class="hover:text-laravel">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>Login
                </a>
            </li>

        @endauth

    </ul>
</nav>
