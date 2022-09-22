<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ListaVisitaController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\VerpropiedadController;
use App\Http\Controllers\MailController;

//use App\Http\Controllers\AnuncioController;
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
//Anuncios
Route::resource('/', AnuncioController::class);
Route::get('/anuncios',[AnuncioController::class, 'showAll'])->name('anuncios.anuncios');

Route::get('/nosotros', function () {
    return view('nosotros.index');
});
//autentica
Auth::routes();
//contactos
Route::get('/contacto', function () {
    return view('contacto.contacto');
});
//imagenes
Route::resource('/imagenes', ImagenController::class);
Route::get('imagenes/create?id={id}',[ImagenController::class,'createid'])->name('imagenes.createid');
//clientes
Route::resource('/clientes', ClientesController::class);

//usuarios
Route::get('usuarios',[UsuarioController::class, 'index'])->name("usuarios.index");
Route::resource('usuarios',UsuarioController::class);

//inmuebles
Route::resource('/inmuebles', InmuebleController::class);

//visitas
Route::resource('/visitas', ListaVisitaController::class);

//tipos
Route::resource('/tipos', TipoController::class);

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//enviador de correos
Route::post('/mail',[MailController::class, 'getMail'])->name('mail');
Route::get('/mailenviado', function () {
    return view('mail.mail');
});
//verpropiedad
Route::resource('/verpropiedad', VerpropiedadController::class);
