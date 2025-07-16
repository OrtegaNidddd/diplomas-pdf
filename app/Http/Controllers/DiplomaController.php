<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplomaController extends Controller
{
    // Se muestra el diploma con los datos del usuario

    public function show($id)
    {
        // Se obtiene el usuario según su ID
        $user = \App\Models\User::findOrFail($id);

        // Retorna la vista del diploma con los datos del usuario
        return view('primer-diploma', compact('user'));
    }
}
