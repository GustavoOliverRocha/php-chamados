<?php
use Controller\UserController;

use Controller\Chamado\CadastroController as ChamadoCadastro;
use Controller\Chamado\IndexController as ChamadoIndex;
use Controller\Chamado\ListarController as ChamadoData;
use Controller\SetorController;

return [
	'' => [UserController::class, 'teste',/*[
			DocumentoController::verificar(),
			DocumentoController::gravar()
		],*/
	],
	//'usuario' => [UserController2::class, 'home'],
	//'configuracao' => [IndexController::class, 'home'],
	'chamado/novo' => [ChamadoIndex::class, 'cadastro'],
	'chamado/save' => [ChamadoCadastro::class, 'save'],
	'chamado/lista' => [ChamadoIndex::class, 'listar'],
	'chamado/visualizar/{id}' => [ChamadoIndex::class, 'visualizar'],
	'chamado/get' => [ChamadoData::class, 'get'],
	'setor/get_for_user' => [SetorController::class, 'getAll'],
	
];

return [
    "" => ["HomeController@home"],
    "usuario/list" => ["UserController@home2"],
    "sonic/{id}" => ["UserController@home"],
];

		

