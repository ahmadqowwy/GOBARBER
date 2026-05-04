@props(['active' => false])

<a {{ $attributes->merge([
    'class' => ($active 
        ? 'bg-gray-900 text-white' 
        : 'text-gray-300 hover:bg-gray-700 hover:text-white')
    . ' px-3 py-2 rounded-md'
]) }}>
    {{ $slot }}
</a>