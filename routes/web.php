<?php

use App\Http\Controllers\CursoController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/cursos/crear', [CursoController::class, 'create'])->name('cursos.crear');
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');
Route::post('/cursos/store', [CursoController::class, 'store'])->name('cursos.guardar');
Route::post('/cursos/update/{id}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/cursos/editar/{id}', [CursoController::class, 'edit'])->name('cursos.editar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
