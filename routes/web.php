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

Route::resource('/ocorrencias','OcorrenciaController');
Route::resource('/users','UserController');

# rotas de login
Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');