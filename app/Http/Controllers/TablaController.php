<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::paginate(25);
        return view('dashboard', compact('users'));
    }
}

