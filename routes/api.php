<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;

// Rotas para Funcionários
Route::post('funcionarios', [FuncionarioController::class, 'store']); // Criar Funcionário
Route::get('funcionarios', [FuncionarioController::class, 'index']); // Listar Funcionários
Route::get('funcionarios/{id}', [FuncionarioController::class, 'show']); // Buscar Funcionário por ID
Route::put('funcionarios/{id}', [FuncionarioController::class, 'update']); // Atualizar Funcionário
Route::delete('funcionarios/{id}', [FuncionarioController::class, 'destroy']); // Deletar Funcionário
Route::get('funcionarios/{id}/departamento', [FuncionarioController::class, 'departamento']); // Buscar Departamento de um Funcionário

// Rotas para Departamentos
Route::post('departamentos', [DepartamentoController::class, 'store']); // Criar Departamento
Route::get('departamentos', [DepartamentoController::class, 'index']); // Listar Departamentos
Route::get('departamentos/{id}', [DepartamentoController::class, 'show']); // Buscar Departamento por ID
Route::put('departamentos/{id}', [DepartamentoController::class, 'update']); // Atualizar Departamento
Route::delete('departamentos/{id}', [DepartamentoController::class, 'destroy']); // Deletar Departamento
Route::get('departamentos/{id}/funcionarios', [DepartamentoController::class, 'funcionarios']); // Buscar Funcionários de um Departamento