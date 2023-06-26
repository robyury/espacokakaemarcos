<?php
use App\Http\Controllers\EventosController;
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

Route::get('/', [EventosController::class, 'home_lista_casais'])->name('home');
Route::get('/galeria', [EventosController::class, 'galeria_lista_casais'])->name('galeria');
Route::get('/galeria/{id}', [EventosController::class, 'carrega_galeria'])->name('galeria_album');
