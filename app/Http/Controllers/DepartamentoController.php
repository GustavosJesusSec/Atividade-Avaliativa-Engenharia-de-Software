<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    
    public function store(Request $request)
    {
        $departamento = Departamento::create($request->all());
        $departamento->save();
        return response()->json($departamento, 201);
    }

    
    public function index()
    {
        return Departamento::all();
    }

    
    public function show($id)
    {
        return Departamento::find($id);
    }

    
    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);
        $departamento->update($request->all());
        return response()->json($departamento, 200);
    }

    
    public function destroy($id)
    {
        Departamento::destroy($id);
        return response()->json(null, 204);
    }

    
    public function funcionarios($id)
    {
        $departamento = Departamento::with('funcionarios')->find($id);
        return response()->json($departamento->funcionarios, 200);
    }
}
