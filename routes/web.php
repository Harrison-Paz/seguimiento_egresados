<?php

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

route::get('/home-dashword', function(){
    return view('index');
})->name('home');

// rutas de logeo
route::get('/register', function () {
    return view('auth/sign-up');
});

route::get('/', function(){
    return view('auth/login');
})->name('sign-in');

//rutas de gestion de egresados
route::get('gestion-egresados/nuevo', function () {
    return view('secretaria/nuevo');
})->name('agregar-egresados');

route::get('gestion-egresados/listar', function () {
    return view('secretaria/listar');
})->name('listar-egresados');

route::get('gestion-egresados/editar', function () {
    return view('secretaria/editar');
})->name('editar-egresados');

route::get('gestion-usuarios/nuevo', function () {
    return view('usuario/nuevo');
})->name('agregar-usuario');

route::get('gestion-usuarios/listar', function () {
    return view('usuario/listar');
})->name('listar-usuario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
