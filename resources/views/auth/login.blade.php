<x-layouts.auth title="Login - {{ config('app.name') }}">
    <x-auth.form-card title="Welcome Back" subtitle="Please login to your account">
        <!-- Login Form -->
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- Email Input -->
            <x-forms.input-field
                type="email"
                name="email"
                label="Email Address"
                placeholder="you@example.com"
                autocomplete="email"
                required
            >
                <x-slot name="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </x-slot>
            </x-forms.input-field>

            <!-- Password Input -->
            <x-forms.input-field
                type="password"
                name="password"
                label="Password"
                placeholder="Enter your password"
                autocomplete="current-password"
                minlength="8"
                required
            >
                <x-slot name="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </x-slot>
            </x-forms.input-field>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center cursor-pointer group">
                    <input
                        type="checkbox"
                        name="remember"
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
            <x-forms.primary-button>
                Login
                <x-slot name="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </x-slot>
            </x-forms.primary-button>
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
</x-layouts.auth>
