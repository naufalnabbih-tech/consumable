<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 min-h-screen">
        <div class="min-h-screen">
            <!-- Navigation -->
            <nav class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <h1 class="text-xl font-semibold text-gray-900">Dashboard</h1>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-700">{{ auth()->user()->name ?? auth()->user()->email }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Success Message -->
                @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Welcome Card -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Welcome to Dashboard! 🎉</h2>
                    <p class="text-gray-600">You are successfully logged in with Livewire authentication.</p>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg p-6 text-white">
                            <h3 class="text-lg font-semibold mb-2">Livewire 3</h3>
                            <p class="text-sm opacity-90">Real-time validation & SPA experience</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg p-6 text-white">
                            <h3 class="text-lg font-semibold mb-2">Tailwind CSS</h3>
                            <p class="text-sm opacity-90">Modern glassmorphism design</p>
                        </div>
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg p-6 text-white">
                            <h3 class="text-lg font-semibold mb-2">Laravel</h3>
                            <p class="text-sm opacity-90">Clean & modular components</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
