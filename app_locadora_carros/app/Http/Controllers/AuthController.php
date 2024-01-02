<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->all(['email', 'password']);

        // autenticação email e senha
        $token = auth('api')->attempt($credenciais);

        if($token) { // usuário autenticado com sucesso
            return response()->json(['token' => $token]);
        } else { // erro de usuário ou senha
            return response()->json(['erro' => 'Usuário ou senha inválido'], 403);

            // 401 = unauthorized -> não autorizado
            // 403 = forbidden -> proibido (login inválido)
        }
        return 'Login';
    }

    public function logout()
    {
        return 'Logout';
    }

    public function refresh()
    {
        return 'refresh';
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
