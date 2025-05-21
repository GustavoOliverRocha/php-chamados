<?php 

namespace Controller\User;

use Controller\UserController as ControllerUserController;

class UserController
{ 
	public function home(){
		ControllerUserController::teste2();exit;
		echo "Teste namespace";
	}
}