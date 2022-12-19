<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriasAdminController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisCursosController;
use App\Http\Controllers\NovedadesController;
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
Route::get('cursos', CursosController::class)->name('cursos');
Route::get('mis-cursos', MisCursosController::class)->name('mis-cursos');
Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::controller(CategoriasController::class)->group(function() {
    Route::get('categorias', 'index')->name('categorias.index');
    Route::get('categorias/{id}', 'show')->name('categorias.show');
});

Route::get('admin', AdminController::class)->name('admin');

Route::resource('admin/categorias', CategoriasAdminController::class)->names('admin.categorias');
Route::controller(CategoriasAdminController::class)->group(function() {
    Route::get('admin/categorias/{categoria}/delete', 'delete')->name('admin.categorias.delete');
});
