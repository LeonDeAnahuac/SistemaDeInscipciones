<?php

use Illuminate\Support\Facades\Route;
use App\Carrera;
use App\User;
use App\Materia;
use App\Profesor;
use App\Grupo;
use App\Inscripcion;
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
})->name('welcome');
Route::get('/horarios', 'CarreraController@index')->name('carreras');
Route::get('/horarios/{id}', 'CarreraController@show')->name('horarios');

/*La siguientes rutas se generaron */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@materias')->name('homepost');