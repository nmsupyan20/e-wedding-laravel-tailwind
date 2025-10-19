<x-auth.layout>

    <div
        class="w-full md:w-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 text-center">Sign Up</h5>
        <hr class="text-gray-300 mb-2">


        <form class="max-w-sm mx-auto">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email : </label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Input your email" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password :
                </label>
                <input type="password" id="password" placeholder="Input your password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 shadow-md text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
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