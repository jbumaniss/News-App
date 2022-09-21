<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage All Users
            </h1>
        </header>
        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($users->isEmpty())
                @foreach($users as $user)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/category/{{$user->id}}">
                                {{$user->name}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$user->name}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$user->surname}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$user->created_at}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            @if($user->isAdministrator())
                                <p>Yes</p>
                            @else
                                <p>No</p>
                            @endif
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            @if(!$user->isAdministrator())
                            <form method="POST" action="/posts/admin-manage/users/{{$user->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete
                                </button>
                            </form>
                            @endif
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
            </tbody>
        </table>
    </div>
</x-layout>
