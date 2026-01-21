
<x-layout>
    <x-slot:title>
        Home - Chirper
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Crear Meme</h1>

        @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Chirp Form -->
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/chirps8M" enctype="multipart/form-data">
                    @csrf

                    {{-- Mostrar errores de validación generales --}}
                    @if ($errors->any())
                        <div class="alert alert-error mb-4">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-control w-full">
                        Meme
                        <textarea
                            name="mensaje"
                            placeholder="Escribe tu meme aquí..."
                            class="textarea textarea-bordered w-full resize-none @error('mensaje') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('mensaje') }}</textarea>

                        @error('mensaje')
                            <div class="label">
                                
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text">Bulo</span>
                        </label>
                        <input type="text" name="bulo" placeholder="Texto del bulo" class="input input-bordered w-full @error('bulo') input-error @enderror" value="{{ old('bulo') }}" required />

                        @error('bulo')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Guardar Meme
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Feed -->
        <div class="space-y-4 mt-8">
            @forelse ($chirps as $chirp)
                <x-meme :chirp="$chirp" />
            @empty
                <div class="hero py-12">
                    <div class="hero-content text-center">
                        <div>
                            <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <p class="mt-4 text-base-content/60">No chirps yet. Be the first to chirp!</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>