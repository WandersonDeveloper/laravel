<?php

use Illuminate\Support\Facades\Route;

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
// Rotas com metodos
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('sobrenos', [\App\Http\Controllers\SobrenosController::class, 'sobrenos']);


// Route::get('/', function () {
//     return view('index');
// });


// Route::get('contato', function () {
//     return view('contato');
// });


// Route::get('sobre', function () {
//     return view('contato');
// });