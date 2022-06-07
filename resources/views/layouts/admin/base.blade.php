<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="admin-container">
        <nav class="admin-menu">
            <ul>
                <li><a href="/admin/posts">Posts</a></li>
                <li><a href="/admin/settings">Configurações</a></li>
            </ul>
        </nav>
        <main class="admin-content-area">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>

</html>
