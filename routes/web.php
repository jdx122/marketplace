<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categoria', 'App\Http\Controllers\CategoriaController@index')->name('categoria.index');