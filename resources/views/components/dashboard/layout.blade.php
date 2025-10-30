<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-200">
    <nav class="fixed top-0 z-50 w-full bg-black shadow-md">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-between w-full rtl:justify-end">
                    <h1 class="text-white font-bold text-xl">Jewepe<span class="text-rose-500">Wedding</span></h1>
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-900 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-900">

            @php
                $navLinks = [
                    ['name' => 'Reports', 'link' => '/dashboard', 'icon' => 'bar-chart-2'],
                    ['name' => 'Catalogs', 'link' => '/dashboard/catalogs', 'icon' => 'book-open'],
                    ['name' => 'Purchasing', 'link' => '/dashboard/purchasing', 'icon' => 'shopping-cart'],
                    ['name' => 'Users', 'link' => '/dashboard/users', 'icon' => 'users'],
                    ['name' => 'Landing Page', 'link' => '/', 'icon' => 'home'],
                ];
            @endphp


            <ul class="space-y-2 font-medium">

                @foreach ($navLinks as $navLink)
                    <li>
                        <a href="{{ $navLink['link'] }}"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-rose-500 group">
                            <i data-feather="{{ $navLink['icon'] }}"></i>
                            <span class="ms-3">{{ $navLink['name'] }}</span>
                        </a>
                    </li>
                @endforeach

                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-rose-500 group w-full">
                            <i data-feather="log-out"></i>
                            <span class="ms-3">Logout</span>
                    </form>
                </li>

            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 mt-12">
        <h1 class="bg-white rounded shadow-md py-2 px-3 font-bold text-gray-600"> {{ $titlePage }} </h1>
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>