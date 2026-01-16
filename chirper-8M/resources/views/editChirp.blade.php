<x-layout>
    <x-slot:title>Editar Chirp</x-slot:title>

    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Editar Chirp</h1>

        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <form method="POST" action="/chirps8M/{{ $chirp->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full mb-4">
                        <label class="label"><span class="label-text">Bulo</span></label>
                        <input type="text" name="bulo" value="{{ old('bulo', $chirp->bulo) }}" class="input input-bordered w-full" required />
                        @error('bulo')<span class="text-error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-control w-full mb-4">
                        <label class="label"><span class="label-text">Mensaje</span></label>
                        <textarea name="mensaje" class="textarea textarea-bordered w-full" rows="4" required>{{ old('mensaje', $chirp->mensaje) }}</textarea>
                        @error('mensaje')<span class="text-error">{{ $message }}</span>@enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="/" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
