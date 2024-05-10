<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemorandoController extends Controller
{
    public Function memorando(){

        
        return view('memorando', ['pagina_ativa' => 'memorando']);
    }
}
