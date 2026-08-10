<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;

Route::get('/', [CatalogoController::class, 'index'])->name('catalogo.index');

Route::get('/lugar/{id}', [CatalogoController::class, 'show'])->name('catalogo.show');