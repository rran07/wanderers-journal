<x-html>

<x-head />

<body>
    <div class="container mx-auto">
        <div class="flex items-center justify-center min-h-screen px-10 py-10">
            <div>
                <div class="border rounded-lg shadow-lg">
                    <div class="grid grid-cols-2">
                        <div class="">
                            <img class="overflow-hidden rounded-tl-md rounded-bl-md" src="https://picsum.photos/1000/1000" alt="image">
                        </div>
                        <div class="px-6 py-12 rounded-md lg:px-8">
                            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                                <img class="w-auto h-10 mx-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=gray&shade=600"
                                    alt="Your Company">
                                <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">Sign up now!</h2>
                            </div>

                            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">=======
                                <form class="grid grid-cols-2 space-y-2" method="POST" action="/signup">
                                    @csrf

                                    <div class="col-span-2">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                        <div class="mt-2">
                                            <input id="username" name="username" type="username" autocomplete="username" required
                                                class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @error('username')
                                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="pr-2">
                                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                        <div class="mt-2">
                                            <input id="first_name" name="first_name" type="first_name" autocomplete="first_name" required
                                                class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @error('first_name')
                                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                         @enderror
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                        <div class="mt-2">
                                            <input id="last_name" name="last_name" type="last_name" autocomplete="last_name" required
                                                class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @error('last_name')
                                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
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

                                    <div class="pr-2">
                                        <div class="flex items-center justify-between">
                                            <label for="password"
                                                class="block text-sm font-medium leading-6 text-gray-900">Password
                                            </label>
                                        </div>
                                        <div class="mt-2">
                                            <input id="password" name="password" type="password" autocomplete="current-password"
 required
                                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @error('password')
                                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <label for="password_confirmation"
                                                class="block text-sm font-medium leading-6 text-gray-900">Password Confirmation
                                            </label>
                                        </div>
                                        <div class="mt-2">
                                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password_confirmation"
 required
                                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @error('password')
                                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 pt-6">
                                        <button type="submit"
                                            class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign
                                            in</button>
                                    </div>


                                </form>

                                <p class="mt-10 text-sm text-center text-gray-500">
                                    Already have account?
                                    <a href="/login" class="font-semibold leading-6 text-blue-600 hover:text-blue-500 pl-2">Log in now!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


        </div>

    </div>
</body>

</x-html>
