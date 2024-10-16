<button  {{ $attributes->merge(['class' => 'lg:text-xs xl:text-md uppercase py-2 px-2 border rounded-md font-semibold hover:border hover:border-gray-700 hover:text-gray-700 motion-safe:hover:scale-110 duration-300', 'type' => 'submit' ]) }}>
    {{ $slot }}
</button>
