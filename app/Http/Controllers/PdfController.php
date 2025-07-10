<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    //
    public function generatePdf(Request $request , $id){

        $users = \App\Models\User::findOrFail($id);

        
        $datos = [
            'name'  => $users->name,
        ];
    
        $template = view('primer-diploma', ['datos' => $datos])->render();
    
        Browsershot::html($template)
        ->showBackground()
        ->landscape()
        ->format('Legal')
        ->save(storage_path('/app/diplomas/ejemplo.pdf'));
    }
}
