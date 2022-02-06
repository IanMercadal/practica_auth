<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Ruta resource con breeze aplicado
Route::resource('centros', CentroController::class)->middleware(['auth']);

//Si la ruta no existe puedo indicar qué vista mostrar
Route::fallback(function(){
    return view('/dashboard');
});

require __DIR__.'/auth.php';
