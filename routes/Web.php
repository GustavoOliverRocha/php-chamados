<?php
use Controller\UserController;

use Controller\Chamado\CadastroController as ChamadoCadastro;
use Controller\Chamado\IndexController as ChamadoIndex;
use Controller\SetorController;

return [
	'' => [UserController::class, 'teste',/*[
			DocumentoController::verificar(),
			DocumentoController::gravar()
		],*/
	],
	//'usuario' => [UserController2::class, 'home'],
	//'configuracao' => [IndexController::class, 'home'],
	'chamado/cadastro' => [ChamadoIndex::class, 'cadastro'],
	'chamado/save' => [ChamadoCadastro::class, 'save'],
	'chamado/lista' => [ChamadoIndex::class, 'listar'],
	'setor/get_for_user' => [SetorController::class, 'getAll'],
	
];

return [
    "" => ["HomeController@home"],
    "usuario/list" => ["UserController@home2"],
    "sonic/{id}" => ["UserController@home"],
];

		

