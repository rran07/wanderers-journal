<x-html>
    <x-head />

    <body class="h-full text-white bg-black">
        <div class="min-h-full px-10">
            <div>
                <nav>
                    <div class="px-4 mx-auto lg:max-w-7xl sm:px-6 lg:px-8">
                        <div class="flex items-center justify-between h-16">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8"
                                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=gray&shade=500"
                                        alt="Wanderer's Journal">
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="hidden md:block">
                                    <div class="flex items-baseline ml-10 space-x-4">
                                        <x-nav-links href='/' :active="request()->is('/')">Home</x-nav-links>
                                        <x-nav-links href='/explore' :active="request()->is('explore')">Explore
                                        </x-nav-links>
                                        <x-nav-links href='/journals' :active="request()->is('journals')">Journals
                                        </x-nav-links>
                                        <x-nav-links href='/about' :active="request()->is('about')">About</x-nav-links>
                                        <x-nav-links href='/contact' :active="request()->is('contact')">Contact
                                        </x-nav-links>
                                    </div>
                                </div>
                            </div>

                            @guest
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2 ml-4 md:ml-6">
                                    <x-nav-links href='/login' :active="request()->is('login')">Log In</x-nav-links>
                                    <x-nav-links href='/signup' :active="request()->is('signup')">Sign up</x-nav-links>
                                </div>
                            </div>
                            @endguest

                            @auth
                            <div class="hidden md:block">
                                <div class="flex items-center ml-4 md:ml-6">
                                    <button type="button"
                                        class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">View notifications</span>
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>

                                    <!-- Profile dropdown -->
                                    <livewire:dropdown-menu/>
                                </div>
                            </div>
                            @endauth
                            <div class="flex -mr-2 md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button"
                                    class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu, show/hide based on menu state. -->
                    <div class="md:hidden" id="mobile-menu">
                        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
                                aria-current="page">Home</a>
                            <a href="#"
                                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Category</a>
                            <a href="#"
                                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Journal</a>
                            <a href="#"
                                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">About</a>
                            <a href="#"
                                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Contact</a>
                        </div>
                        <div class="pt-4 pb-3 border-t border-gray-700" action="/logout" method="POST">
                            @csrf

                            @auth
                            <div class="flex items-center px-5">
                                <div class="flex-shrink-0">
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="ml-3">
                                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                                </div>
                                <button type="button"
                                    class="relative flex-shrink-0 p-1 ml-auto text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>
                            </div>
                            @endauth

                            @auth
                            <div action="/logout" method="POST" class="px-2 mt-3 space-y-1">
                                @csrf
                                <button
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your
                                    Profile</button>
                                <button
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</button>
                                <button type="submit"
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign
                                    out</button>
                            </div>
                            {{-- <div class="px-2 mt-3 space-y-1" >
                                <a href="/yourprofile"
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your
                                    Profile</a>
                                <a href="Settings"
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</a>
                                <a href="/logout" type="submit"
                                    class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign
                                    out</a>
                            </div> --}}
                            @endauth
                        </div>
                    </div>
                </nav>
                <x-divider />
            </div>
            <header>
                <div class="px-4 py-6 mx-auto lg:max-w-7xl lg:h-headerHeight sm:px-6 lg:px-8 sm:max-w-full sm:h-auto">
                    {{ $heading }}
                </div>
            </header>
            <article>
                <div class="px-4 py-6 mx-auto lg:max-w-7xl sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </article>



        </div>
        @livewireScripts
    </body>
</x-html>
