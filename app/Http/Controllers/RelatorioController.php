<?php
namespace App\Http\Controllers;

use App\Models\Memorando;
use Illuminate\Http\Request;  // Corrigido o namespace

class RelatorioController extends Controller
{
    public function relatorio_memorando()
    {
        // Passa um array vazio como valor padrão para 'contas'
        return view('relatorio_memorando', ['contas' => []]);
    }

    public function pesquisar(Request $request)
    {
        $contas = Memorando::orderByDesc('created_at')->get();
        
        return view('relatorio_memorando', ['contas' => $contas]);
    }
}
