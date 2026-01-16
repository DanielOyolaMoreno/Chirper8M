<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Chirper' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50">
    <header class="bg-blue-600 text-white p-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">8M-Chirper</h1>
            
            <div class="flex items-center gap-4">
                @auth
                    <!-- Usuario autenticado -->
                    <span class="text-sm">{{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                @else
                    <!-- Usuario invitado -->
                    <a href="/login">Iniciar Sesión</a>
                    <a href="/register">Registrarse</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Success Toast -->
    @if (session('success'))
        <div class="toast toast-top toast-center">
            <div class="alert alert-success animate-fade-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    {{ $slot }}
</body>
</html>