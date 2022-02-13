<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function validar($user)
    {
        $user_db = Usuario::where('user', $user)->get();

        if ($user_db->isEmpty()) {
            $res = ["estado" => false, "user" => []];
            return response()->json($res);
        }
        $res = ["estado" => true, "user" => $user_db];
        return response()->json($res, 200);
    }

    public function save(Request $request)
    {
        try {
            if ($request->isJson())
            {
                $user = new Usuario();
                $user->user = $request->json("user");
                $user->password = $request->json("password");
                $user->tipo = "profesor";

                if ($user->save()) {
                    return response()->json([
                        "estado" => true,
                        "msg" => "Usuario creado correctamente",
                        "user" => $user
                    ]);
                }
                return response()->json([
                    "estado" => false,
                    "msg" => "No se pudo crear al usuario"
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                "estaso" => false,
                "msg" => $e->getMessage()
            ]);
        }
    }
}
