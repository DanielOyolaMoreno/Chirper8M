<div class="chirp-card bg-white p-4 rounded-lg shadow-md mb-4">
    <div class="flex items-center mb-2">
        <div class="font-bold text-gray-800">{{ $chirp->user->name }}</div>
        <div class="text-gray-500 text-sm ml-2">{{ $chirp->created_at->diffForHumans() }}</div>
    </div>
    <div class="mb-3">
        <p class="text-gray-700">{{ $chirp->mensaje }}</p>
    </div>
    @if($chirp->image_url)
        <div class="mb-3">
            <img src="{{ $chirp->image_url }}" alt="Imagen del chirp" class="w-full rounded-lg">
        </div>
    @endif
    <div class="flex justify-between items-center text-sm text-gray-500">
        <span>{{ $chirp->user->email }}</span>
        <span>ID: {{ $chirp->id }}</span>
    </div>
</div>