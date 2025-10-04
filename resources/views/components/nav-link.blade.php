@props(['active' => false])
@php
    $current = 'text-[#f5e0c3] border-b-2 border-[#a98357]';
    $default = 'text-[#d6b48a] hover:text-[#f5e0c3]';  
@endphp

<a class="px-3 py-2 text-sm font-medium transition-colors duration-200 {{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>
