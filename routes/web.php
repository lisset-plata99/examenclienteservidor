<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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

Route::get('/', [InicioController::class,'Inicio'])-> name ('index');
Route::get('/Conclusion', [InicioController::class,'ViewConclusion'])-> name ('Conclusion3');
Route::get('/Referencias', [InicioController::class,'ViewReferencias'])-> name ('Cibergrafia');
Route::get('/Tema1', [InicioController::class,'ViewTema1'])-> name ('Temas1');
Route::get('/Tema2', [InicioController::class,'ViewTema2'])-> name ('Temas2');
Route::get('/Tema3', [InicioController::class,'ViewTema3'])-> name ('Temas3');
Route::get('/Tema4', [InicioController::class,'ViewTema4'])-> name ('Temas4');
Route::get('/Tema5', [InicioController::class,'ViewTema5'])-> name ('Temas5');
Route::get('/Tema6', [InicioController::class,'ViewTema6'])-> name ('Temas6');
Route::get('/Tema7', [InicioController::class,'ViewTema7'])-> name ('Temas7');
Route::get('/Tema8', [InicioController::class,'ViewTema8'])-> name ('Temas8');
Route::get('/Tema9', [InicioController::class,'ViewTema9'])-> name ('Temas9');



