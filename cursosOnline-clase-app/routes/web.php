<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnosAdminController;
use App\Http\Controllers\Admin\CategoriasAdminController;
use App\Http\Controllers\Admin\CursosAdminController;
use App\Http\Controllers\Admin\PerfilesAdminController;
use App\Http\Controllers\Admin\ProfesoresAdminController;
use App\Http\Controllers\Admin\UsersAdminController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisCursosController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
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


//Route::get('/', function () {
//    return view('home');
//})->name('home');
Route::get('/', HomeController::class)->name('home');
Route::get('novedades', NovedadesController::class)->name('novedades');
Route::get('mis-cursos', MisCursosController::class)->name('mis-cursos');
Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('admin', AdminController::class)->middleware(['auth', 'verified'])->name('admin');

//CATEGORIAS

Route::controller(CategoriasController::class)->group(function() {
    Route::get('categorias', 'index')->name('categorias.index');
    Route::get('categorias/{id}', 'show')->name('categorias.show');
});


Route::resource('admin/categorias', CategoriasAdminController::class)->middleware(['auth', 'verified'])->names('admin.categorias');
Route::controller(CategoriasAdminController::class)->group(function() {
    Route::get('admin/categorias/{categoria}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.categorias.delete');
});

//PERFILES

Route::controller(PerfilesController::class)->group(function() {
    Route::get('perfiles', 'index')->name('perfiles.index');
    Route::get('perfiles/{id}', 'show')->name('perfiles.show');
});

Route::resource('admin/perfiles', PerfilesAdminController::class)->middleware(['auth', 'verified'])->names('admin.perfiles');
Route::controller(PerfilesAdminController::class)->group(function() {
    Route::get('admin/perfiles/{perfil}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.perfiles.delete');
});

// USUARIOS

Route::controller(UsersController::class)->group(function() {
    Route::get('usuarios', 'index')->name('usuarios.index');
    Route::get('usuarios/{id}', 'show')->name('usuarios.show');
});

Route::resource('admin/usuarios', UsersAdminController::class)->middleware(['auth', 'verified'])->names('admin.usuarios');
Route::controller(UsersAdminController::class)->group(function() {
    Route::get('admin/usuarios/{user}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.usuarios.delete');
});

// CURSOS
Route::controller(CursosController::class)->group(function() {
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
});

Route::resource('admin/cursos', CursosAdminController::class)->middleware(['auth', 'verified'])->names('admin.cursos');
Route::controller(CursosAdminController::class)->group(function() {
    Route::get('admin/cursos/{curso}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.cursos.delete');
});

// ALUMNOS
Route::controller(AlumnosController::class)->group(function() {
    Route::get('alumnos', 'index')->name('alumnos.index');
    Route::get('alumnos/{id}', 'show')->name('alumnos.show');
});

Route::resource('admin/alumnos', AlumnosAdminController::class)->middleware(['auth', 'verified'])->names('admin.alumnos');
Route::controller(AlumnosAdminController::class)->group(function() {
    Route::get('admin/alumnos/{alumno}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.alumnos.delete');
});

// PROFESORES
Route::controller(ProfesoresController::class)->group(function() {
    Route::get('profesores', 'index')->name('profesores.index');
    Route::get('profesores/{id}', 'show')->name('profesores.show');
});

Route::resource('admin/profesores', ProfesoresAdminController::class)->middleware(['auth', 'verified'])->names('admin.profesores');
Route::controller(ProfesoresAdminController::class)->group(function() {
    Route::get('admin/profesores/{profesor}/delete', 'delete')->middleware(['auth', 'verified'])->name('admin.profesores.delete');
});

// PERFILES

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
