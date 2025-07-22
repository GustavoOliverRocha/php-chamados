<?php
namespace Controller\Chamado;

use Model\Chamado;

class ListarController
{
    public function get(){
       // $data = (new Chamado)->getAll();
        $data = Chamado::getTeste();
        if($data){
            echoJson(['status' => 1, 'data' => $data]);
        }
        echoJson(['status' => 0, 'data' => []]);
    }
}