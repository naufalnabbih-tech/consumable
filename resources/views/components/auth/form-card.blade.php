@props(['title' => 'Welcome Back', 'subtitle' => 'Please login to your account'])

<div {{ $attributes->merge(['class' => 'glass-card rounded-2xl p-8 md:p-12 w-full max-w-md transition-all duration-300 ease-in-out hover:shadow-2xl']) }}>
    <!-- Header -->
    @if($title || $subtitle)
    <div class="text-center mb-8">
        @if($title)
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $title }}</h1>
        @endif

        @if($subtitle)
        <p class="text-white/80 text-sm md:text-base">{{ $subtitle }}</p>
        @endif
    </div>
    @endif

    <!-- Main Content -->
    {{ $slot }}

    <!-- Footer -->
    @isset($footer)
    <div class="mt-6">
        {{ $footer }}
    </div>
    @endisset
</div>
