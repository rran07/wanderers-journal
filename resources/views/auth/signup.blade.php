<x-html>

<x-head />

<body>
    <div class="container mx-auto">
        <div class="flex justify-center items-center min-h-screen px-10 py-10">
            <div class="grid ">
                <img src="https://picsum.photos/890/800" alt="image">
                <div class="flex h-heightCustom w-widthCustom flex-col justify-center px-6 py-12 lg:px-8 rounded-lg shadow-lg border">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up now!</h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" action="#" method="POST">
                            <div>
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                <div class="mt-2">
                                    <input id="username" name="username" type="username" autocomplete="username" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                <div class="mt-2">
                                    <input id="first_name" name="first_name" type="first_name" autocomplete="first_name" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                <div class="mt-2">
                                    <input id="last_name" name="last_name" type="last_name" autocomplete="last_name" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password"
                                        class="block text-sm font-medium leading-6 text-gray-900">Password
                                    </label>
                                </div>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="confirmation_password"
                                        class="block text-sm font-medium leading-6 text-gray-900">Confirmation Password
                                    </label>
                                </div>
                                <div class="mt-2">
                                    <input id="confirmation_password" name="confirmation_password" type="password" autocomplete="current-confirmation_password"
                                        required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                    in</button>
                            </div>
                        </form>

                        <p class="mt-10 text-center text-sm text-gray-500">
                            Already have account?
                            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log in now!</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>


        </div>

    </div>
</body>

</x-html>
