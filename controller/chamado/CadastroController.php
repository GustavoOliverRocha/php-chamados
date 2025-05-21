<?php

namespace Controller\Chamado;

use Exception;
use Session;
use Libs\Request;
use Model\Chamado;

class CadastroController
{
    private static function validarCampos() : object{
        $setor = Request::post('setor','int');
        if(!($setor > 0)){
            throw new Exception('Setor inválido');
        }

        $assunto = Request::post('assunto');
        if(!$assunto){
            throw new Exception('Assunto inválido');
        }

        $prioridade = Request::post('prioridade','int');
        if(!($prioridade >= 0 && $prioridade <= 4)){
            throw new Exception('Prioridade inválida');
        }

        $data = (object)[
            'assunto' => $assunto,
            'prioridade' => $prioridade,
            //'setor_solicitante' => Session::get('setor'),
            //'usuario_solicitante' => Session::get('id'),
            'setor_solicitante' => 2,
            'usuario_solicitante' => 2,
            'setor_atendente' => $setor,
        ];

        return $data;
    }

    public function save() : void{
        try{
            $data = self::validarCampos();
            (new Chamado)->save($data);
            redirect('/chamado/lista/');
        }catch(Exception $e){
            echo $e->getMessage(); exit;
        }
    }
}