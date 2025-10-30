<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JewepeWedding</title>
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

    <footer class="bg-gray-900 text-gray-300 mt-12">
        <div class="max-w-screen-xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-white font-bold mb-3">JewepeWedding</h3>
                <p class="text-sm">Membantu mewujudkan pernikahan impian Anda dengan layanan profesional dan penuh
                    perhatian.</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Tautan</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/about" class="hover:text-white">About</a></li>
                    <li><a href="/catalog" class="hover:text-white">Catalog</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Paket</h4>
                <ul class="text-sm space-y-2">
                    <li class="hover:text-white">Paket Silver</li>
                    <li class="hover:text-white">Paket Gold</li>
                    <li class="hover:text-white">Paket Platinum</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak Kami</h4>
                <p class="text-sm">Email: info@jewepewedding.com</p>
                <p class="text-sm">Telp: +62 812-3456-7890</p>
                <p class="text-sm mt-2">Jl. Selamat Dunia Akhirat No.244, RT. 03 / RW. 04, Kec. Amal, Kel. Saleh, Kota Depok</p>
            </div>
        </div>
        <div class="border-t border-gray-800">
            <div class="max-w-screen-xl mx-auto px-6 py-4 text-sm text-gray-500 text-center">© {{ date('Y') }}
                JewepeWedding. All rights reserved.</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        feather.replace();
    </script>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890?text=Halo%20JewepeWedding%20saya%20ingin%20tanya" target="_blank"
        rel="noopener noreferrer"
        class="fixed bottom-6 right-6 z-50 inline-flex items-center justify-center w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition-colors"
        aria-label="Chat via WhatsApp" title="Chat via WhatsApp">
        <!-- WhatsApp SVG icon -->
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
                d="M20.52 3.478A11.955 11.955 0 0012 0C5.373 0 .001 5.373 0 12c0 2.116.553 4.196 1.602 6.03L0 24l6.174-1.606A11.93 11.93 0 0012 24c6.627 0 12-5.373 12-12 0-3.205-1.25-6.213-3.48-8.522z"
                fill="#25D366" />
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.149-.672.149-.198.297-.767.966-.94 1.164-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.173.198-.297.297-.497.099-.198.05-.372-.025-.52-.074-.149-.672-1.611-.92-2.206-.242-.579-.487-.5-.672-.51l-.573-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.077 4.487  .709.306 1.26.489 1.691.626.712.226 1.36.194 1.872.118.571-.085 1.758-.718 2.006-1.412.248-.694.248-1.289.173-1.412-.074-.123-.273-.198-.57-.347z"
                fill="#fff" />
        </svg>
    </a>
</body>

</html>