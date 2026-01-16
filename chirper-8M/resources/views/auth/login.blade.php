<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="min-h-[calc(100vh-16rem)] flex items-center justify-center">
        <div class="w-96 bg-white rounded-lg shadow-lg">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-center mb-6">Iniciar Sesión</h1>

                <form method="POST" action="/login">
                    @csrf

                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" required>
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="mr-2"> Recuérdame
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
