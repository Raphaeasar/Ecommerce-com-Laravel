<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request)
    {
        $data = [];

        if ($request->isMethod("POST")) {
            //Se entrar neste IF é porque o usuario clicou no botão LOGAR
            $login = $request->input("login");
            $senha = $request->input("senha");

            /*$login = preg_replace("/[^0-9]/", "", $login);*/
            
            $credential = ['login' => $login, 'password' => $senha];
            //logar
            if (Auth::attempt($credential)) {
                return redirect()->route("home");
            } else {
                $request->session()->flush("err", "Usuario / senha inválidos");
                return redirect()->route("logar");
            }
        }

        return view("logar", $data);
    }

    public function sair(Request $request){
        //deslogar o usuário
        Auth::logout();
        return redirect()->route("home");
    }
}
