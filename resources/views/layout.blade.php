<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../node_modules/flowbite/dist/datepicker.js"></script>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</head>

<body class="overflow-x-hidden h-screen">
    <nav>
        <div class='relative w-screen h-[50px] bg-gray-600'>
            @yield('profile')
            <a href="/" class='absolute left-4 text-3xl font-semibold top-[6px] text-gray-50'>CRUD</a>
        </div>
    </nav>


    <main class='h-full -mt-[50px] pt-[50px] p-[10px]'>
        @yield('content')
    </main>


    <footer class='w-screen h-[100px] flex items-center justify-center flex-col bg-gray-600'>
        <p class='text-gray-50 text-sm font-small'>Thanks for visiting!!</p>
        <p class='text-gray-50 text-sm font-small'>&copy;2023 CRUD All rights reserved</p>
    </footer>
</body>

</html>
