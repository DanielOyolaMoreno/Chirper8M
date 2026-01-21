<x-layout>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="min-h-[calc(100vh-16rem)] flex items-center justify-center">
        <div class="w-96 bg-white rounded-lg shadow-lg">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-center mb-6">Welcome Back</h1>

                <form method="POST" action="/login">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full mt-1 px-3 py-2 border rounded" autofocus>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium">Password</label>
                        <input type="password" name="password" required class="w-full mt-1 px-3 py-2 border rounded">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="mr-2"> Remember me
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>

                <div class="mt-6 text-center text-sm">
                    Don't have an account? <a href="/register" class="text-blue-600">Register</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
