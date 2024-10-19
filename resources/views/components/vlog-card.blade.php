<div class="grid items-center grid-cols-2 duration-300 transform justify-items-stretch motion-safe:hover:scale-110">
    <div>
        <img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/600/380" alt="testing image" />
    </div>
    <div class="px-2 py-6">
        <div>
            <div class="py-2">
                <x-category-button>
                    Technology
                </x-category-button>
            </div>
            <h1 class="text-4xl font-anton xl:max-w-4xl lg:py-4">
                The Evolution of
                Web Design
            </h1>
            <div class="">
                <div class="">
                    <div class="flex gap-2 py-3 place-items-center">
                        <div class="">
                            <img src="https://placehold.co/50x50" alt="Author" class="rounded-full">
                        </div>
                        <div class="font-san sm:text-md">
                            <p>
                                <strong>Jane Doe</strong>
                            </p>
                            <p>
                                September 18, 2024
                            </p>
                        </div>
                    </div>

                    <div class="py-2 mx-2">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, ut.</p>
                    </div>
                    <div class="flex items-center justify-between py-4 mx-4">
                        <div>
                            <x-button href="/">
                                Read More
                            </x-button>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <p class="px-2 mr-2 font-sans text-xs font-medium">
                                SHARE :
                            </p>
                            <div class="flex flex-row gap-1">
                                <div class="px-3 py-3 text-gray-800 transition-all duration-200 bg-transparent border-2 border-gray-300 rounded-full focus:bg-gray-600 hover:text-white focus:text-white hover:bg-gray-600 hover:border-gray-600 focus:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="15" height="15">
                                        <path fill="currentColor"
                                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                    </svg>
                                </div>

                                <div class="px-3 py-3 text-gray-800 transition-all duration-200 bg-transparent border-2 border-gray-300 rounded-full focus:bg-gray-600 hover:text-white focus:text-white hover:bg-gray-600 hover:border-gray-600 focus:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15"
                                        height="15">
                                        <path fill="currentColor"
                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg>
                                </div>

                                <div class="px-3 py-3 text-gray-800 transition-all duration-200 bg-transparent border-2 border-gray-300 rounded-full focus:bg-gray-600 hover:text-white focus:text-white hover:bg-gray-600 hover:border-gray-600 focus:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15"
                                        height="15">
                                        <path fill="currentColor"
                                            d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
