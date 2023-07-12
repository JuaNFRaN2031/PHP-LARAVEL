<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\usuario\UserController;
use App\Http\Controllers\VariosMetodosRecursos;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');




/*************** PRUEBAS ***************/


Route::get('hola', [HolaController::class, '__invoke']);


Route::get('usuario/{nombre?}', [UsuarioController::class, 'usuarioUnParametro'])->name('usuarioNombre');


Route::get('usuario/{nombre}/comentario/{comentarioId}', [UsuarioController::class, 'usuarioDosParametros']);


Route::get('user/{nombre}', [UserController::class, 'user'])->where('nombre', '[A-Za-z ]+');


Route::get('user1/{id}', [UserController::class, 'user1'])->where('id', '[0-9]+');


Route::get('user2/{id}/{nombre}', [UserController::class, 'user2'])->where(['id' => '[0-9]+', 'nombre' => '[A-Za-z ]+']);


Route::get('prueba', function () {
    return 'Página de prueba';
})->name('pruebaRoute');


Route::get('redirigirPrueba', function () {
    return redirect()->route('pruebaRoute');
});


Route::get('redirigirPrueba1', function () {
    return redirect()->route('usuarioNombre', ['nombre' => 'Juan Francisco Morcillo Sánchez']);
});


Route::redirect('/prueba3', '/prueba', 301);


Route::resource('varios', VariosMetodosRecursos::class, ['index']);


Route::resource('varios1', VariosMetodosRecursos::class)->only(['index', 'show']);


Route::resource('varios2', VariosMetodosRecursos::class)->except(['create', 'store', 'update', 'destroy']);


Route::resource('varios3', VariosMetodosRecursos::class)->only(['index', 'show'])->names(['index' => 'varios.inicio']);
