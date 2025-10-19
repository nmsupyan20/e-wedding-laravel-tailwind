<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-200 box-border">
    <nav class="bg-black shadow-md text-white fixed w-full z-20 top-0 left-0 right-0">

        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <h1 class="self-center text-2xl font-bold whitespace-nowrap">Jewepe<span
                        class="text-rose-500">Wedding</span></h1>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">

                @php
                    $navLinks = [
                        ['name' => 'Home', 'url' => '/'],
                        ['name' => 'About', 'url' => '/about'],
                        ['name' => 'Catalog', 'url' => '/catalog'],
                        ['name' => 'Contact', 'url' => '/contact'],
                        ['name' => 'Dashboard', 'url' => '/dashboard'],
                    ];
                @endphp

                <ul
                    class="font-medium flex flex-col md:items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-black md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 gap-y-1">
                    @foreach ($navLinks as $navLink)
                        <li>
                            <a href="{{ $navLink['url'] }}"
                                class="block py-2 px-3 text-white hover:bg-rose-500 font-semibold rounded-sm md:bg-transparent md:hover:bg-transparent md:hover:text-rose-500 md:p-0"
                                aria-current="page">{{ $navLink['name'] }}</a>
                        </li>
                    @endforeach

                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-white bg-rose-500 hover:bg-rose-700 font-semibold rounded-sm md:hover:bg-rose-700"
                            aria-current="page">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>