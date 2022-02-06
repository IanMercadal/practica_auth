<?php

use App\Http\Controllers\CentroController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Rutas language
Route::get('view', [LanguageController::class, 'view'])->name('view');
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

// Ruta resource con breeze aplicado
Route::resource('centros', CentroController::class)->middleware(['auth']);

//Si la ruta no existe puedo indicar qué vista mostrar
Route::fallback(function(){
    return view('/dashboard');
});

require __DIR__.'/auth.php';
