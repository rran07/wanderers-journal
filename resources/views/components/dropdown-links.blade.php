<button {{ $attributes->merge(['class' => "block px-4 py-2 mx-1 rounded-md text-sm font-semibold text-gray-700 text-left hover:bg-gray-700/25", 'type' => 'submit']) }} role="menuitem" tabindex="-1">
    {{ $slot }}
</button>
