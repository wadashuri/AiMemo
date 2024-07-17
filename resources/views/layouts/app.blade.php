<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/user/style.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased h-full">
    <div class="flex h-full bg-gray-100">
        <!-- サイドバー -->
        @include('sidebar')

        <div class="flex-1 flex flex-col overflow-y-auto transition-all duration-300">
            <!-- ナビゲーション -->
            @livewire('navigation-menu')

            <!-- コンテンツ -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>