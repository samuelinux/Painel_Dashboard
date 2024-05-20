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
        

        $request['id_criador'] = Auth::id();
        // Obtendo o próximo número de memorando
        $request['numero_memorando'] = Memorando::obterProximoNumeroMemorando();

        dd($request->all());
        // Validação dos dados
        $validatedData = $request->validate([
            'numero_memorando' => 'required|integer',
            'setor_origem' => 'string|max:255',
            'remetente' => 'string|max:255',
            'setor_destino' => 'string|max:255',
            'destinatario' => 'string|max:255',
            'assunto' => 'string|max:255',
            'texto' => 'string',
            'id_criador' => 'required|integer',
        ]);

        

        // Criando o novo memorando
        $dados = Memorando::create($validatedData);

        dd($dados);
        
        return back();
    }
}
