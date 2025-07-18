<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\PdfController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\TablaController::class, 'index'])->name('dashboard');


// Se hace uso del controlador DiplomaController para mostrar el diploma en vista dinamica blade
// Ejemplo de URL: localhost:8000/primer-diploma/1
Route::get('/primer-diploma/{id}', [DiplomaController::class, 'show'])->name('primer-diploma');

// Ruta para generar el PDF del primer diploma con los datos del usuario
// Ejemplo de URL: localhost:8000/generate-primer-diploma/1
Route::get('/generate-primer-diploma/{id}', [PdfController::class, 'generatePrimerDiploma'])->name('generate-primer-diploma');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
