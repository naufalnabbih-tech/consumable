@props([
    'type' => 'submit',
    'icon' => null,
    'iconPosition' => 'right',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'btn-primary w-full py-3.5 text-white font-semibold rounded-lg shadow-lg flex items-center justify-center gap-2']) }}
>
    @if($icon && $iconPosition === 'left')
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        {!! $icon !!}
    </svg>
    @endif

    <span>{{ $slot }}</span>

    @if($icon && $iconPosition === 'right')
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        {!! $icon !!}
    </svg>
    @endif
</button>
