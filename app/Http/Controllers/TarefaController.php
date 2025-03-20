<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public function index()
    {
        return Tarefa::all();
    }

    public function store(Request $request)
    {
        $tarefa = Tarefa::create($request->all()); //request->all, pega todos os dados da model, para não perecisar do 
        return response()->json($tarefa,201);
    }

    public function show(Request $request)
    {
        return Tarefa::find($id);
    }

    public function update(Request $request, string $id) // o id vai ser do tipo string
    {
        $tarefa = Tarefa::find($id);
        $tarefa->update($request->all());
        return response()->json($tarefa,200);
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::find($id)->delete();
        return response()->json(null,204);

    }
}
