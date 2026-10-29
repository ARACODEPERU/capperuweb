@props([
    'src',
    'alt' => '',
    'eager' => false,
    'placeholder' => true,
])

@php
    $webpUrl = \App\Support\Webp::url($src);
    $isLocal = app()->environment('local', 'development');
    $showPlaceholder = $placeholder && $isLocal;
@endphp

<picture>
    @if ($showPlaceholder)
        <!-- Placeholder CSS para desarrollo local (sin archivo necesario) -->
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            style="width: 100%; height: 100%; background: linear-gradient(135deg, #ce1212 0%, #e0e0e2 100%); display: flex; align-items: center; justify-content: center; color: #666; font-size: 0.85rem;"
            loading="{{ $eager ? 'eager' : 'lazy' }}"
            decoding="async"
            @if ($eager) fetchpriority="high" @endif
        >
    @else
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
    @endif
</picture>
