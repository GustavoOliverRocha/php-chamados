<?php
namespace Controller\Chamado;

use Libs\Request;
use Model\Chamado;

class ListarController
{
    public function get(){
       // $data = (new Chamado)->getAll();
        $filter = self::filter();
        $data = Chamado::getTeste($filter);
        if($data){
            echoJson(['status' => 1, 'data' => $data]);
        }
        echoJson(['status' => 0, 'data' => []]);
    }

    public function filter() : string {
        $where = '';
         $status = Request::get('status','int');
        //$status = 1;
        if($status >= 1 && $status <= 3){
            $where .= "1=1 AND `status` = $status ";
        }
        $prioridade = Request::get('prioridade','int');
        //$prioridade = 1;
        if($prioridade >= 1 && $prioridade <= 4){
            $where .= " AND `prioridade` = $prioridade ";
        }

        return $where;
    }
}