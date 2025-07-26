<?php

namespace Controller\Chamado;

use Libs\View;
use Model\Chamado;

class IndexController
{
    public function cadastro() : void {
        View::render('sistema.chamado.cadastro.index');
    }

    public function listar() : void {
        View::render('sistema.chamado.lista.index');
    }

    public function visualizar($request) : void {
        abort_if(!isset($request->id) || !($request->id > 0), 'ID do chamado inválido');

        $chamado =  Chamado::getById($request->id);

        abort_if(!$chamado, 'Chamado inválido');
        $chamado->desc = (!$chamado->desc) ? 'Descrição não informada.' : $chamado->desc;
        $chamado->usuario_atendente_nome = (!$chamado->usuario_atendente_nome) ? 'Sem atendente!' : $chamado->usuario_atendente_nome;
        $data = [
            'chamado' => $chamado
        ];
        View::render('sistema.chamado.visualizar.index', $data);
    }
}