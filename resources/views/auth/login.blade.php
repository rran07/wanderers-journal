<x-html>

    <x-head />

<body class="bg-center bg-cover bg-image-lg">
    <div class="px-4 py-6 mx-auto lg:max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-center min-h-screen px-10 py-10">
                <div class="flex flex-col justify-center px-6 py-12 border rounded-lg shadow-lg h-heightCustom w-widthCustom lg:px-8 bg-white/50">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="w-auto h-10 mx-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=gray&shade=600"
                            alt="Your Company">
                        <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">
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
                                        class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('email')
                                    <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                @enderror
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
                                    <input id="password" name="password" type="password" autocomplete="current-password" required
                                        class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('password')
                                    <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                    Log In
                                </button>
                            </div>
                        </form>

                        <p class="mt-10 text-sm text-center text-gray-500">
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
