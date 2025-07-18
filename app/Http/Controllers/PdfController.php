<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Libreria utilizada para generar PDF (DomPDF)
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    // Se genera el diploma con los datos del usuario
    public function generatePrimerDiploma($id)
    {
        try {
            // Obtener el usuario
            $user = \App\Models\User::findOrFail($id);
            
            // Generar el PDF pasando los datos del usuario a la vista
            $pdf = Pdf::loadView('primer-diploma', compact('user'));
            
            /* 
                Limpiar el nombre para que sea válido como nombre de archivo
                Limpiar caracteres no válidos y reemplazarlos por guiones bajos
            */
            $cleanName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $user->name);

            // Nombre del archivo con el nombre del usuario limpio
            $filename = 'diploma_' . $cleanName . '.pdf';

            /*
                Aqui se ajustan el tamaño y la orientación del PDF.
                'Letter' es un tamaño de papel Carta,
                'landscape' es la orientación del papel. (Horizontal)

                Se pueden utilizar otros tamaños y orientaciones como:
                'A4', 'A3', 'Legal', etc.
                - Legal: 8.5 x 14 pulgadas - (Oficio)
                - A4: 8.27 x 11.69 pulgadas
                - A3: 11.69 x 16.54 pulgadas
                'portrait' para orientación vertical.
            */

            // Para ajustarlo a tamaño carta
            $pdf->setPaper('Letter', 'landscape');

            // Para ajustarlo a tamaño oficio
            // $pdf->setPaper('Legal', 'landscape');


            /*
                - Download descarga directamente el archivo PDF
                - Stream muestra el PDF en el navegador 
                
                Se deja comentado el método stream para que se pueda utilizar si se desea mostrar el PDF en el navegador.
            */

            
            // return $pdf->download($filename);

            return $pdf->stream($filename);
            
        } catch (\Exception $e) {
            // Manejo de errores, en caso de que ocurra un problema al generar el PDF
            return response()->json(['error' => 'Error al generar el diploma'], 500);
        }
    }
}