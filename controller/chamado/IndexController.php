<?php

namespace Controller\Chamado;

use Libs\View;

class IndexController
{
    public function cadastro() : void {
        View::render('sistema.chamado.cadastro.index');
    }

    public function listar() : void {
        View::render('sistema.chamado.lista.index');
    }
}