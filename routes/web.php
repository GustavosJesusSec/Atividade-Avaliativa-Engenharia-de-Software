<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;

Route::apiResource('funcionarios', FuncionarioController::class);
Route::apiResource('departamentos', DepartamentoController::class);

Route::get('funcionarios/{id}/departamento', [FuncionarioController::class, 'departamento']);
Route::get('departamentos/{id}/funcionarios', [DepartamentoController::class, 'funcionarios']);
