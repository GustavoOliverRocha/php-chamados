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
        if(!($prioridade >= 1 && $prioridade <= 4)){
            throw new Exception('Prioridade inválida');
        }

        $data = (object)[
            'assunto' => $assunto,
            'prioridade' => $prioridade,
            //'setor_solicitante' => Session::get('setor'),
            //'usuario_solicitante' => Session::get('id'),
            'setor_solicitante' => 6,
            'usuario_solicitante' => 4,
            'setor_atendente' => $setor,
        ];

        $descricao = Request::post('descricao');
        if($descricao){
            $data->desc = $descricao;
        }


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

    public function remover(){
        try{
            $chamado_id = Request::post('id','int');
            if(!($chamado_id > 0)){
                echoJson(['status' => 0, 'msg' => 'ID inválido']);
            }

            $chamado_model = new Chamado;
            $chamado = $chamado_model->find($chamado_id);
            if(!$chamado){
                echoJson(['status' => 0, 'msg' => 'Chamado não encontrado']);
            }

            if($chamado->status != 1){
                echoJson(['status' => 0, 'msg' => 'Chamado ja foi aberto']);
            }

            $chamado_model->remove($chamado_id);
            echoJson(['status' => 1, 'msg' => 'Chamado removido com sucesso']);
        }catch(Exception $e){
            echoJson(['status' => -1, 'msg' => $e->getMessage()]);
        }
    }
}