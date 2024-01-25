<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LeadController extends Controller
{
    // Retorna a lista de leads em formato JSON
    public function index()
    {
        $leads = Lead::all();
        return response()->json(['leads' => $leads]);
    }

    // Armazena um novo lead no banco de dados
    public function store(Request $request)
        {
            try {
                $this->validate($request, [
                    'nome' => 'required|string|max:255',
                    'email' => 'required|email|unique:leads',
                    'telefone' => 'required|string|max:20',
                    'empresa' => 'required|string|max:255',
                    'status' => 'required|in:novo,em andamento,convertido',
                ]);
            } catch (ValidationException $e) {
                return response()->json(['error' => $e->errors()], 422);
            }

            $lead = Lead::create($request->all());

            return response()->json(['lead' => $lead], 201);
        }

    // Retorna um lead específico em formato JSON
    public function show(Lead $lead)
    {
        return response()->json(['lead' => $lead]);
    }

    // Atualiza um lead no banco de dados
    public function update(Request $request, Lead $lead)
    {
        try {
            $this->validate($request, [
                'nome' => 'required|string|max:255',
                'email' => 'required|email|unique:leads,email,' . $lead->id,
            ]);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        }

        $lead->update($request->all());

        return response()->json(['lead' => $lead], 200);
    }

    // Exclui um lead do banco de dados
    public function destroy(Lead $lead)
    {
        $lead->delete();

        return response()->json([], 204);
    }
}
