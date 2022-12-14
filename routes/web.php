<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('usuario.inicial');
});

Route::prefix('usuario')->group(function() {
    Route::get('', [UsuarioController::class, 'inicial'])->name('usuario.inicial');
    Route::get('/create',[UsuarioController::class,'create'])->name('usuario.cadastro');
    Route::get('/game',[UsuarioController::class,'game'])->name('usuario.game');
    Route::get('/tinderPet',[UsuarioController::class,'tinderPet'])->name('usuario.tinderPet');
    Route::get('/login', [UsuarioController::class, 'login'])->name('usuario.login');
    Route::get('/principal', [UsuarioController::class, 'index'])->name('usuario.principal');
    Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::post('/{id}/update',[UsuarioController::class,'update'])->name('usuario.update');
    Route::get('/{id}/delete',[UsuarioController::class,'delete'])->name('usuario.delete');
});
