<?php

namespace App\Http\Controllers;

use App\Models\Chirps;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemeController extends Controller
{
    public function index()
    {
        // Order by created_at and get latest chirps
        $chirps = Chirps::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('chirps8M', ['chirps' => $chirps]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mensaje' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ], [
            'mensaje.required' => 'Por favor escribe algo para chirpiar!',
            'mensaje.max' => 'Los chirps deben tener 255 caracteres o menos.',
            'image.image' => 'El archivo debe ser una imagen válida.',
            'image.max' => 'La imagen no puede superar 2MB.',
        ]);

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('chirps', 'public');
            $imageUrl = Storage::url($path);
        }

        // Assign user (use authenticated user or a fallback user)
        $user = auth()->user();
        if (! $user) {
            $user = User::first();
            if (! $user) {
                $user = User::factory()->create([
                    'name' => 'Anonymous',
                    'email' => 'anonymous@example.com',
                ]);
            }
        }

        Chirps::create([
            'mensaje' => $validated['mensaje'],
            'image_url' => $imageUrl,
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('success', '¡Tu chirp ha sido publicado!');
    }
}