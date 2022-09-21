@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed bottom-10 left-1/1  bg-laravel text-white px-14 py-3 rounded bg-opacity-50">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif
