<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplomaController extends Controller
{
    //
    public function show($id)
    {
        // Aquí puedes obtener el usuario por su ID
        $users = \App\Models\User::findOrFail($id);

        // Retorna la vista del diploma con los datos del usuario
        return view('primer-diploma', compact('users'));
    }
}
