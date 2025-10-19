<x-auth.layout>

    <div
        class="w-full md:w-3/5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 text-center">Sign Up</h5>
        <hr class="text-gray-300 mb-2">


        <form class="w-full mx-auto" method="post" action="/register">
            @csrf
            <div class="lg:grid grid-cols-2 gap-2">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name :
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Input your name" required />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email :
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Input your email" required />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone :
                    </label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                        class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Input your phone number" required />
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                        :
                    </label>
                    <input type="password" id="password" name="password" placeholder="Input your password"
                        class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password-confirm"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password
                        :
                    </label>
                    <input type="password" id="password-confirm" name="password_confirmation"
                        placeholder="Cofirm your password"
                        class="bg-gray-50 border text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password_confirmation') border-red-500 @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <hr class="text-gray-300 my-3">

            <div>
                <button type="submit"
                    class="text-white bg-rose-500 hover:bg-rose-700 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Daftar</button>
                <a href="/login"
                    class="bg-gray-400 flex items-center justify-center mt-2 rounded py-2 text-white hover:bg-gray-600">
                    <span class="text-white">Back to login</span>
                </a>
            </div>
        </form>

    </div>

</x-auth.layout>