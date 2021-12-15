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

route::get('gestion-ofertas/listar', function () {
    return view('egresado/listar');
})->name('listar-oferta');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









//rutas de investigaciones:
route::get('agregar-investigación', function () {
    return view('investigaciones/nuevo');
})->name('agregar-investigación');

route::get('gestion-investigación', function () {
    return view('investigaciones/gestion');
})->name('gestion-investigación');

route::get('editar-investigación', function () {
    return view('investigaciones/edit');
})->name('editar-investigación');

//rutas convenios
route::get('agregar-convenios', function () {
    return view('convenios/nuevo');
})->name('agregar-convenios');


route::get('gestion-convenios', function () {
    return view('convenios/gestion');
})->name('gestion-convenios');

route::get('editar-convenios', function () {
    return view('convenios/edit');
})->name('editar-convenios');