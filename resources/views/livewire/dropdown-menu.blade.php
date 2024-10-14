<form action="/logout" method="POST">
    @csrf
    <div class="relative ml-3" x-data="{ isOpen: @entangle('isOpen') }">
        <!-- Button -->
        <div>
            <button
                wire:click="toggleDropdown"
                type="button"
                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 hover:ring-2 hover:ring-white hover:ring-offset-2 hover:ring-offset-gray-800 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
            </button>
        </div>

        <!-- Dropdown -->
        <div x-show="isOpen"
            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a id="user-menu-item-0">Your Profile</a>
            <a id="user-menu-item-1">Settings</a>
            <a id="user-menu-item-2">Sign out</a>
        </div>
    </div>

</form>
