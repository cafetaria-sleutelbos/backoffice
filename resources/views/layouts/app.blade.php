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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/datatables.css') }}">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
                <a href="/scans" class="mx-6 font-semibold text-xl text-gray-800 leading-tight hover:text-blue-400">
                    {{ __('Scans') }}
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
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

@yield('scripts')
@stack('modals')
</body>
</html>
