<?php

namespace App\Http\Controllers;

use App\Models\Memorando;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemorandoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('memorando');
    }

    public function store(Request $request)
    {
        // Adiciona id_criador e numero_memorando na request
        $request->merge([
            'id_criador' => Auth::id(),
            'numero_memorando' => Memorando::obterProximoNumeroMemorando(),
        ]);

        // Validação dos dados
        $validatedData = $request->validate([
            'numero_memorando' => 'required|integer',
            'setor_origem' => 'nullable|string|max:255',
            'remetente' => 'nullable|string|max:255',
            'setor_destino' => 'nullable|string|max:255',
            'destinatario' => 'nullable|string|max:255',
            'assunto' => 'nullable|string|max:255',
            'texto' => 'nullable|string',
            'id_criador' => 'required|integer',
        ]);

        // Criando o novo memorando
        $memorando = Memorando::create($validatedData);

        return back()->with('success', 'Criado memorando N°: '. $memorando->numero_memorando);

    }
}
