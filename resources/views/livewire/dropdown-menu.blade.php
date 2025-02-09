<div class="relative ml-3" x-data="{ isOpen: @entangle('isOpen') }">
    <!-- Button -->
    <div>
        <button wire:click="toggleDropdown" type="button"
            class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 hover:ring-2 hover:ring-white hover:ring-offset-2 hover:ring-offset-gray-800 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </button>
    </div>

    <!-- Dropdown -->
    <div x-show="isOpen"
        class="absolute right-0 z-10 grid w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none justify-items-stretch"
        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
        <x-dropdown-links onclick="window.location.href='/yourprofile'" id="user-menu-item-0">Your Profile
        </x-dropdown-links>
        <x-dropdown-links onclick="window.location.href='/settings'" id="user-menu-item-1">Settings</x-dropdown-links>
        <x-dropdown-links form="delete-form" onclick="window.location.href='/logout'" id="user-menu-item-2">
            Log out
        </x-dropdown-links>
    </div>

    <form action="/logout" method="POST" id="delete-form">
        @csrf
    </form>
</div>
