<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    
    public function store(Request $request)
    {
        $funcionario = Funcionario::create($request->all());
        return response()->json($funcionario, 201);
    }

    
    public function index()
    {
        return Funcionario::with('departamento')->get();
    }

    
    public function show($id)
    {
        return Funcionario::with('departamento')->find($id);
    }

    
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->update($request->all());
        return response()->json($funcionario, 200);
    }

    
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return response()->json(null, 204);
    }

    
    public function departamento($id)
    {
        $funcionario = Funcionario::with('departamento')->find($id);
        return response()->json($funcionario->departamento, 200);
    }
}
