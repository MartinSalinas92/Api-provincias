<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);


Route::get('/noticias', [App\Http\Controllers\LastNoticiasController::class, 'index'])->name('noticias.index');
Route::post('/favoritos', [App\Http\Controllers\LastNoticiasController::class, 'store'])->name('favoritos.store');

Route::get('/provincias', [App\Http\Controllers\LastNoticiasController::class,'mostrarNoticias'])->name('favoritos.index');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


