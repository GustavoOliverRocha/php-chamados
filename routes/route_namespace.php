<?php

use Controller\DocumentoController;
use Controller\User\UserController as UserUserController;
use Controller\UserController;
use Controller\HomeController;

/*return [
	'UserController' => UserController::class,
	'Usuario' => UserUserController::class,
	'HomeController' => HomeController::class,
];*/

return [
	'/' => [UserController::class, 'listar',/*[
			DocumentoController::verificar(),
			DocumentoController::gravar()
		],*/
	],
	'Usuario' => UserUserController::class
];
