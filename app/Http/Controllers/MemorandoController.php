<?php

namespace App\Http\Controllers;

use App\Models\Memorando;
use Illuminate\Http\Request;

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
        dd($request);
    }
}
