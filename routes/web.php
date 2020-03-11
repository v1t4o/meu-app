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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'LivroController@login');
Route::post('/livro', 'LivroController@listar');
Route::post('/salvar', 'LivroController@salvar');
Route::get('/livro/criar','LivroController@criar');
/*Route::get('/{livro}', 'LivroController@listar');*/
