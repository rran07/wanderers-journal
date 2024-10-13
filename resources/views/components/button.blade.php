@props(class)

<a  class="{{ 'class' => 'lg:text-xs xl:text-md uppercase py-2 px-2 border rounded-md font-semibold' }}"
    {{ $attributes }}>
    {{ $slot }}
</a>