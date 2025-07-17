@props(['isActive' => false])

<a class="{{ $isActive ? 'text-blue-900 font-bold' : '' }} group" {{ $attributes }}>
    <span class="opacity-0 relative -right-5 group-hover:opacity-100 group-hover:right-0 duration-300">
        👉
    </span>
    {{ $slot }}
</a>
