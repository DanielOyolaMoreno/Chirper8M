@props(['chirp'])

<div class="w-full max-w-xl perspective">
    <div x-data="{ flipped: false }" class="relative w-full min-h-[34rem] h-auto"
         :class="flipped ? 'rotate-y-180' : ''"
         @click.away="flipped = false"
         style="transform-style: preserve-3d; transition: transform 0.6s;">

        {{-- FRONT --}}
        <div class="absolute w-full h-full backface-hidden flex flex-col bg-white shadow-lg rounded-lg p-4">

            {{-- Avatar y nombre --}}
            <div class="flex items-center space-x-3 mb-4">
                @if($chirp->user)
                    <img src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                         alt="{{ $chirp->user->name }}'s avatar" class="w-12 h-12 rounded-full" />
                    <div class="flex flex-col">
                        <span class="font-semibold">{{ $chirp->user->name }}</span>
                        <span class="text-sm text-gray-500">{{ $chirp->created_at->diffForHumans() }}</span>
                    </div>
                @else
                    <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                         alt="Anonymous User" class="w-12 h-12 rounded-full" />
                    <div class="flex flex-col">
                        <span class="font-semibold">Anonymous</span>
                        <span class="text-sm text-gray-500">{{ $chirp->created_at->diffForHumans() }}</span>
                    </div>
                @endif
            </div>

            {{-- Chirp Image --}}
            <div class="flex-1 flex flex-col items-center justify-center overflow-hidden">
                @if($chirp->image_url)
                    <img src="{{ $chirp->image_url }}" alt="Chirp Image" class="rounded-lg w-full h-auto max-h-[70vh] object-cover">
                @endif
            </div>

            {{-- Botón Chirp --}}
            <button @click.stop="flipped = true"
                    class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded shadow mx-auto block">
                Chirp
            </button>

        </div>

        {{-- BACK --}}
        <div class="absolute w-full h-full backface-hidden rotate-y-180 flex flex-col bg-white shadow-lg rounded-lg p-4 justify-between">
            {{-- Mensaje centrado --}}
            <div class="flex-1 flex items-center justify-center text-center">
                <p class="text-gray-700 text-lg">{{ $chirp->mensaje }}</p>
            </div>

            {{-- Botón Volver abajo --}}
            <div class="flex justify-center">
                <button @click.stop="flipped = false"
                        class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded shadow">
                    Volver
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Tailwind necesario para 3D --}}
<style>
.perspective {
    perspective: 1000px;
}
.rotate-y-180 {
    transform: rotateY(180deg);
}
.backface-hidden {
    backface-visibility: hidden;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>