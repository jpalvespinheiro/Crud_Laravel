<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutosController::class, 'show']);
Route::get('/produtos/edit/{id}', [ProdutosController::class, 'edit']);
Route::post('/produtos/edit/{id}', [ProdutosController::class, 'update'])->name('alterar_registro');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete']);
Route::post('/produto/excluir/{id}', ['ProdutosController::class', 'destroy'])->name('excluir_produto');
