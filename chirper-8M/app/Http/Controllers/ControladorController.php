<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirps;

class ControladorController extends Controller
{
    public function index()
    {
        $chirps = Chirps::with('user')->latest()->take(50)->get();
        return view("chirps8M", ['chirps' => $chirps]);
    }
}
