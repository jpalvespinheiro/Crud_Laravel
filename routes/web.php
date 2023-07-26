<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::get('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');