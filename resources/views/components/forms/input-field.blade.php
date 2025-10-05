@props([
    'type' => 'text',
    'name',
    'id' => null,
    'label' => null,
    'placeholder' => '',
    'required' => false,
    'icon' => null,
    'value' => '',
    'autocomplete' => null,
    'minlength' => null,
])

<div class="space-y-2">
    @if($label)
    <label for="{{ $id ?? $name }}" class="block text-white font-medium text-sm">
        @if($icon)
        <svg class="w-5 h-5 inline-block mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            {!! $icon !!}
        </svg>
        @endif
        {{ $label }}
    </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $autocomplete ? "autocomplete={$autocomplete}" : '' }}
        {{ $minlength ? "minlength={$minlength}" : '' }}
        {{ $attributes->merge(['class' => 'w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none input-glow transition-all duration-300 ease-in-out']) }}
    >

    @error($name)
    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
