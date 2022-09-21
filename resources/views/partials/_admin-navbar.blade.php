@auth()
@if (auth()->user()->isAdministrator())

<nav class="flex justify-around items-center mb-4">
    <ul class="flex space-x-6 mr-6 text-lg">

            <li>
            <span class="font-bold uppercase">
                Admin Dashboard
            </span>
            </li>

        <li>
            <a href="/posts/admin-manage/users" class="hover:text-laravel">
                <i class="fa-solid fa-users"></i>All Users
            </a>
        </li>

            <li>
                <a href="/posts/admin-manage/posts" class="hover:text-laravel">
                    <i class="fa-solid fa-edit"></i>All Posts
                </a>
            </li>

        <li>
            <a href="/posts/admin-manage/comments" class="hover:text-laravel">
                <i class="fa-solid fa-commenting"></i>All Comments
            </a>
        </li>

        <li>
            <a href="/posts/admin-manage/categories" class="hover:text-laravel">
                <i class="fa-solid fa-list-alt"></i>All Categories
            </a>
        </li>
    </ul>
</nav>

@endif
@endauth
