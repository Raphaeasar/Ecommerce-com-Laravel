<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;

class ClienteService
{
    public function salvarUsuario(Usuario $user, Endereco $endereco)
    {
        try {
            //Buscando um usuario com o login que deve ser salvo
            $dbUsuario = Usuario::where("login", $user->login)->first();
            if ($dbUsuario) {
                return ['status' => 'err', 'message' => 'Login já cadastrado no sistema'];
            }

            DB::beginTransaction(); //Iniciar uma transação
            $user->save(); // salvar o usuario
            $endereco->usuario_id = $user->id; //Relacionamento das tabelas
            $endereco->save(); //Salvar o endereco
            DB::commit(); //Confirmando a transação

            return ['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!'];
        } catch (\Exception $e) {
            //Tratar o erro
            FacadesLog::error("ERRO", [
                'file' => 'ClienteService.salvarUsuario',
                'message' => $e->getMessage()
            ]);
            DB::rollback(); //Cancelar a transação
            return ['status' => 'err', 'message' => 'Não pode cadastrar usuário'];
        }
    }
}
