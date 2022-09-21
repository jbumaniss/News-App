<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="{{ asset('/css/style.css') }}"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#7790ef",
                    },
                },
            },
        };
    </script>

    <link rel="shortcut icon" href="{{ asset('images/newsicon.png') }}">


    <title>ICT</title>
</head>

<body class="mb-48">
@include('partials._admin-navbar')
@include('partials._navbar')


<main>

    {{$slot}}

</main>

<x-flash-message></x-flash-message>
@include('partials._footer')
</body>
</html>
