<x-html>

    <x-head />

<body class="bg-image-lg bg-cover bg-center">
    <div class="mx-auto lg:max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex justify-center items-center min-h-screen px-10 py-10">
                <div class="flex h-heightCustom w-widthCustom flex-col justify-center px-6 py-12 lg:px-8 rounded-lg shadow-lg border bg-white/50">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=blue&shade=600"
                            alt="Your Company">
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                            Log In Your Account
                        </h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" action="/login" method="POST">
                            @csrf

                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password"
                                        class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                    <div class="text-sm">
                                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-500">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                    Log In
                                </button>
                            </div>
                        </form>

                        <p class="mt-10 text-center text-sm text-gray-500">
                            Don't have account yet?
                            <a href="/signup" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Sign up now!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</x-html>
