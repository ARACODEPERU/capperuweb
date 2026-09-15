@props([
    'src',
    'alt' => '',
    'eager' => false,
])

@php
    $webpUrl = \App\Support\Webp::url($src);
@endphp

<picture>
    @if ($webpUrl !== $src)
        <source srcset="{{ $webpUrl }}" type="image/webp">
    @endif
    <img
        src="{{ $src }}"
        alt="{{ $alt }}"
        loading="{{ $eager ? 'eager' : 'lazy' }}"
        decoding="async"
        @if ($eager) fetchpriority="high" @endif
        {{ $attributes }}
    >
</picture>
