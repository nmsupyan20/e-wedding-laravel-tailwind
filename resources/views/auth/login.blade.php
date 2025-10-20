<x-auth.layout>

    <div
        class="w-full md:w-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 text-center">Login</h5>
        <hr class="text-gray-300 mb-2">

        @session('success')
            <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                {{ session('success') }}
            </div>
        @endsession

        @session('failed')
            <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                {{ session('failed') }}
            </div>
        @endsession

        <form class="max-w-sm mx-auto" method="post" action="/authenticate">
            @csrf
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email : </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Input your email" required />
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password :
                </label>
                <input type="password" id="password" name="password" placeholder="Input your password"
                    class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <hr class="text-gray-300 my-3">

            <div>
                <button type="submit"
                    class="text-white bg-rose-500 hover:bg-rose-700 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Login</button>
                <p class="text-center text-sm mt-2">Don't have account? <a href="/sign-up" class="text-blue-500">Sign
                        Up</a> </p>
            </div>
        </form>

    </div>

</x-auth.layout>