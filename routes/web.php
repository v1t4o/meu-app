<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('livros', 'LivroController');
Route::resource('pessoas', 'PessoaController');
Route::resource('emprestimos', 'EmprestimoController');
