<?php 

namespace Controller;
use Controller\DocumentoController;

class HomeController
{ 
	public function home(){
		echo "TO NO CONTROLLER";
		(new DocumentoController)->home(44);
	}

	public function home2(){
			echo env('DB_SERVER');
	}

	public function listar()
	{		
		(new User)->save([
			'id'  => 1,
			'name' => 'Gustavo',
			'email' => 'gustaoliver18',
		]);
		//(new InstallMigrations)->up();
		/*$teste = [
			'nome' => 'Asuka',
			'idade' => '18',
			'eva' => 'Eva 02',
		];
		$teste3 = [
			'nome' => 'Shinji',
			'idade' => '18',
			'eva' => 'Eva 02',
		];
		$teste2 = [
			['nome1' => 'Asuka',
			'idade' => '18',
			'eva' => 'Eva 02',],

			['nome1' => 'Asuka',
			'idade' => '18',
			'eva' => 'Eva 02',],

			['nome1' => 'Asuka',
			'idade' => '18',
			'eva' => 'Eva 02',]
		];
		View::render('main',[
			'teste' => $teste,
			'teste' => $teste3,
			'teste2' => $teste2
		]);*/
		/*$teste = (object)[
			'nome' => 'Asuka',
			'idade' => '18',
			'eva' => 'Eva 02',
		];
		foreach($teste as $t)
			echo $t;*/
		//$_SESSION['pokemon'] = 'sdfsdf';
		//$_SESSION['AAA'] = 'sdfsadsdf';
		//$this->dd($_SESSION);
		//$chars = ['madoka','homura','mami'];

		//View::render('main');
		//throw new Exception('Madoka');
		/*$chars = [
			'id' => 4,
			'name' => 'aasdsdasd'
		];
		echo json_encode($chars);*/
	}
	//create_function(args, code)
	public function show()
	{
		echo $_SESSION['pokemon'];exit;
		print_r(Communication::get('localhost:8080/anime/list'));
	}
	public function testeParams($pa)
	{
		$r = (new Request)->_POST("user");
		/*echo "<pre>";
		print_r($r);
		echo '<pre>';
		print_r($pa);*/
		//RouteManager::redirect('usuario/show');
		View::render('main');
	}

	public function dd($data){
		echo "<pre>";
			print_r($data);
		echo "/<pre>";
		exit;
	}
}