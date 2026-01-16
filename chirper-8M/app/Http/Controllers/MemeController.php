<?php

namespace App\Http\Controllers;

use App\Models\Chirps;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MemeController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        // Order by created_at and get latest chirps
        $chirps = Chirps::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('chirps8M', ['chirps' => $chirps]);
    }

    public function guardar(Request $request)
    {
        $validated = $request->validate([
            'mensaje' => 'required|string|max:255',
            'bulo' => 'required|string|max:255',
        ], [
            'mensaje.required' => 'Por favor escribe algo para chirpiar!',
            'mensaje.max' => 'Los chirps deben tener 255 caracteres o menos.',
            'bulo.required' => 'Por favor indica el bulo.',
            'bulo.max' => 'El bulo no puede superar 255 caracteres.',
        ]);

        $bulo = $validated['bulo'];

        // Crear el chirp asociado al usuario autenticado
        $user = auth()->user();
        if (! $user) {
            return redirect()->route('register');
        }

        $user->chirps()->create([
            'mensaje' => $validated['mensaje'],
            'bulo' => $bulo,
        ]);

        return redirect()->back()->with('success', '¡Tu chirp ha sido publicado!');
    }
    public function editarForm(Chirps $chirp)
    {
        $this->authorize('update', $chirp);
        return view('editChirp', ['chirp' => $chirp]);
    }

    public function editar(Request $request, Chirps $chirp)
    {
        $validated = $request->validate([
            'mensaje' => 'required|string|max:255',
            'bulo' => 'required|string|max:255',
        ], [
            'mensaje.required' => 'Por favor escribe algo para chirpiar!',
            'mensaje.max' => 'Los chirps deben tener 255 caracteres o menos.',
            'bulo.required' => 'Por favor indica el bulo.',
            'bulo.max' => 'El bulo no puede superar 255 caracteres.',
        ]);

        $this->authorize('update', $chirp);

        $chirp->update([
            'mensaje' => $validated['mensaje'],
            'bulo' => $validated['bulo'],
        ]);

        return redirect('/')->with('success', 'Chirp actualizado.');
    }
    public function eliminar(Chirps $chirp)
    {
        $this->authorize('delete', $chirp);

        $chirp->delete();

        return redirect()->back()->with('success', '¡Tu chirp ha sido eliminado!');
    }
}