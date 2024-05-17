<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{


    public function auth(Request $request)
    {



        $credenciais = $request->validate(
            [
                'cpf' => 'required',
                'password' => 'required',
            ],

            [

                'cpf.required' => 'Este campo CPF é necessário!',
                'password.required' => 'Este campo SENHA é necessário!'

            ]
        );


        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->with('erro', 'cpf ou senha incorretos');
        }
    }

    public function login()
    {

        return view('login');
    }


    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('login');
    }
}
