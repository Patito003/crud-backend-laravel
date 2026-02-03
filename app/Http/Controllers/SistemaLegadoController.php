<?php

namespace App\Http\Controllers;

use App\Models\SistemaLegado;
use Illuminate\Http\Request;

class SistemaLegadoController extends Controller
{
    public function listar()
    {
        $sistemas = SistemaLegado::all();
        if ($sistemas->isEmpty()) return response()->json(['mensagem' => 'Nenhum sistema encontrado'], 200);

        return response()->json($sistemas, 200);
    }

    public function buscar($id)
    {
        $sistema = SistemaLegado::find($id);
        if (!$sistema) return response()->json(['mensagem' => 'Sistema não encontrado'], 404);

        return response()->json($sistema, 200);
    }

    public function cadastrar(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required|string',
                'linguagem' => 'required|string',
                'status' => 'required|in:ativo,em_manutencao,descontinuado',
                'descricao' => 'nullable|string'
            ]);

            $sistema = SistemaLegado::create($request->all());
            return response()->json($sistema, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['erros' => $e->errors()], 422);
        }
    }

    public function atualizar(Request $request, $id)
    {
        $sistema = SistemaLegado::find($id);
        if (!$sistema) return response()->json(['mensagem' => 'Sistema não encontrado'], 404);

        try {
            $request->validate([
                'nome' => 'sometimes|required|string',
                'linguagem' => 'sometimes|required|string',
                'status' => 'sometimes|required|in:ativo,em_manutencao,descontinuado',
                'descricao' => 'nullable|string'
            ]);

            $sistema->update($request->all());
            return response()->json($sistema, 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['erros' => $e->errors()], 422);
        }
    }

    public function remover($id)
    {
        $sistema = SistemaLegado::find($id);
        if (!$sistema) return response()->json(['mensagem' => 'Sistema não encontrado'], 404);

        $sistema->delete();
        return response()->json(['mensagem' => 'Sistema removido com sucesso'], 200);
    }
}
