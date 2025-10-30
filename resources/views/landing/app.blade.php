<x-landing.layout>

    <section class="bg-center bg-no-repeat bg-blend-multiply bg-cover h-[30rem] bg-gray-500"
        style="background-image: url('/hero.png');">
        <div class="px-4 mx-auto max-w-screen-xl text-center flex items-center justify-center h-full pt-18">
            <div>
                <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-4xl">
                    Pernikahan Impian Bebas Stres, Kami Urus Sisanya
                </h1>
                <p class="mb-8 text-base font-normal text-gray-300 lg:text-lg sm:px-16 lg:px-48">
                    Mulai perencanaan Anda hari ini. Pilih paket terbaik dan biarkan kami menangani setiap detail kecil
                    dengan cinta.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="/catalog"
                        class="inline-flex justify-center items-center gap-x-1 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-rose-500 hover:bg-rose-700">
                        <span>Our Catalog</span>
                        <i data-feather="arrow-right" class="size-[1.2rem]"></i>
                    </a>
                    <a href="/about"
                        class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-12 px-5 bg-white">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Tentang Kami</h2>
            <div class="md:flex md:gap-6 items-center">
                <div class="md:w-1/2">
                    <p class="text-gray-700">JewepeWedding adalah layanan perencanaan pernikahan yang memudahkan
                        pasangan untuk merencanakan hari besar mereka tanpa stres. Kami menyediakan paket lengkap mulai
                        dari dekorasi, katering, fotografer, hingga koordinasi acara.</p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0">
                    <img src="{{ asset('about.jpg') }}" alt="About"
                        class="w-full h-56 object-cover rounded-lg shadow-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- Catalog Section --}}
    <section id="catalog" class="py-12 px-5 bg-gray-50">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Katalog Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($catalogs as $catalog)
                    <a href="/catalog/{{$catalog->id}}" class="block p-4 bg-white rounded-lg hover:shadow">
                        <div class="h-40 bg-gray-200 rounded-md mb-4">
                            <img src="{{ asset('storage/' . $catalog->header) }}"  alt="{{ $catalog->title }}" class="w-full h-40 object-cover rounded-md mb-4">
                        </div>
                        <h3 class="font-semibold">{{ $catalog->title }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $catalog->excerpt }}</p>
                        <div class="mt-3 font-bold text-rose-500">Rp. {{ number_format($catalog->price, 0, '', '.') }}</div>
                    </a>
                @endforeach

            </div>
            <div class="text-center mt-6">
                <a href="/catalog" class="inline-flex items-center px-5 py-3 bg-rose-500 text-white rounded-lg">Lihat
                    Semua Katalog</a>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-12 px-5 bg-white">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Kontak Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-semibold mb-3">Hubungi kami</h3>
                    <p class="text-sm text-gray-600">Untuk pertanyaan paket atau pemesanan, silakan isi form atau
                        hubungi via telepon / email.</p>
                    <ul class="mt-4 text-sm space-y-2">
                        <li>Email: info@jewepewedding.com</li>
                        <li>Telp: +62 812-3456-7890</li>
                        <li>Alamat: Jl. Contoh No.1, Jakarta</li>
                    </ul>
                </div>
                <form method="POST" action="/contact" class="bg-white p-6 rounded-lg shadow">
                    @csrf
                    <div class="mb-3">
                        <label class="block text-sm mb-1">Nama</label>
                        <input type="text" name="name" class="w-full p-2 border rounded" required />
                    </div>
                    <div class="mb-3">
                        <label class="block text-sm mb-1">Email</label>
                        <input type="email" name="email" class="w-full p-2 border rounded" required />
                    </div>
                    <div class="mb-3">
                        <label class="block text-sm mb-1">Pesan</label>
                        <textarea name="message" rows="4" class="w-full p-2 border rounded" required></textarea>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-rose-500 text-white rounded">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

</x-landing.layout>