<?php 

namespace Controller;

use Exception;
use Model\Setor;

class SetorController
{ 
	public function getAll() : void{
		try{
			$setores = Setor::get_for_usuario();
			if($setores){
				echoJson(['status' => 1, 'data' => $setores]);
			}else{
				echoJson(['status' => 0, 'msg' => 'Nenhum setor encontrado']);
			}
		}catch(Exception $e){
			echoJson(['status' => 0, 'msg' => $e->getMessage()]);
		}
	}	
}