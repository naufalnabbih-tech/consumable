<div>
    <x-auth.form-card title="Welcome Back" subtitle="Please login to your account">
        <!-- Success Message -->
        @if (session()->has('success'))
        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-lg text-white text-sm">
            {{ session('success') }}
        </div>
        @endif

        <!-- Login Form -->
        <form wire:submit="login" class="space-y-6">
            <!-- Email Input -->
            <div class="space-y-2">
                <label for="email" class="block text-white font-medium text-sm">
                    <svg class="w-5 h-5 inline-block mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Email Address
                </label>
                <input
                    type="email"
                    id="email"
                    wire:model.blur="form.email"
                    placeholder="you@example.com"
                    autocomplete="email"
                    class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none input-glow transition-all duration-300 ease-in-out @error('form.email') border-red-400 @enderror"
                >
                @error('form.email')
                <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="space-y-2">
                <label for="password" class="block text-white font-medium text-sm">
                    <svg class="w-5 h-5 inline-block mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    wire:model.blur="form.password"
                    placeholder="Enter your password"
                    autocomplete="current-password"
                    class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none input-glow transition-all duration-300 ease-in-out @error('form.password') border-red-400 @enderror"
                >
                @error('form.password')
                <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center cursor-pointer group">
                    <input
                        type="checkbox"
                        wire:model="form.remember"
                        class="w-4 h-4 rounded border-white/30 bg-white/20 text-indigo-600 focus:ring-2 focus:ring-white/50 cursor-pointer transition-all duration-300 ease-in-out"
                    >
                    <span class="ml-2 text-white/90 group-hover:text-white transition-colors duration-300 ease-in-out">Remember Me</span>
                </label>

                <a
                    href="#"
                    class="text-white/90 hover:text-white font-medium transition-colors duration-300 ease-in-out hover:underline"
                >
                    Forgot Password?
                </a>
            </div>

            <!-- Login Button -->
            <button
                type="submit"
                wire:loading.attr="disabled"
                class="btn-primary w-full py-3.5 text-white font-semibold rounded-lg shadow-lg flex items-center justify-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed"
            >
                <span wire:loading.remove wire:target="login">Login</span>
                <span wire:loading wire:target="login">Logging in...</span>

                <svg wire:loading.remove wire:target="login" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>

                <!-- Loading Spinner -->
                <svg wire:loading wire:target="login" class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </form>

        <!-- Footer -->
        <x-slot name="footer">
            <!-- Divider -->
            <div class="flex items-center mb-6">
                <div class="flex-1 border-t border-white/30"></div>
                <span class="px-4 text-white/70 text-sm">OR</span>
                <div class="flex-1 border-t border-white/30"></div>
            </div>

            <!-- Register Link -->
            <p class="text-center text-white/80 text-sm">
                Don't have an account?
                <a href="#" class="text-white font-semibold hover:underline transition-all duration-300 ease-in-out">
                    Sign up
                </a>
            </p>
        </x-slot>
    </x-auth.form-card>
</div>
