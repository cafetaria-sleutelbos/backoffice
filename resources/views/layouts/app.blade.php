<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex">
                <a href="/" class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400">
                    {{ __('Dashboard') }}
                </a>
                <a href="/orders" class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400">
                    {{ __('Orders') }}
                </a>
                <a href="/items" class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400">
                    {{ __('Items') }}
                </a>
                <a href="/api-keys" class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400">
                    {{ __('Api Keys') }}
                </a>
                <form method="POST" action="{{ route('logout') }}" class="ml-auto">
                    @csrf
                    <a class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
</div>

@stack('modals')
</body>
</html>
