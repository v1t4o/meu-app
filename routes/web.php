<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');

Route::resource('livros', 'LivroController');
Route::resource('pessoas', 'PessoaController');
