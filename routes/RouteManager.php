<?php



/**
 * Diretório Pai - Routes
 * 
 * Classe reponsável por gerenciar as rotas e executá-las
 **/

 
use Libs\HttpError;

class RouteManager
{
	private $url;
	private $class;
	private $action;
	private $params;
	private	$routes;

	function __construct()
	{
		$this->url = isset($_GET['url']) ? $this->formatUrl($_GET['url']) : '';
		$this->routes = require_once "Web.php";
	}

	/**
	 * @method formatUrl
	 * @description Retira a ultima barra da rota para que não haja barras duplas no final
	 * @return string
	 */
	private function formatUrl(string $url): string
	{
		return rtrim($url,'/');
	}

	/**
	 * @method loadRoute
	 * @description Retira a ultima barra da rota para que não haja barras duplas no final
	 * @return string
	 */
	private function loadRoute(): void
	{
		if(array_key_exists($this->url,$this->routes))
		{
			$this->set($this->routes[$this->url]);
			return;
			/*PROVAVELMENTE REMOVER
			
			$controller_method = explode('@', $this->routes[$this->url][0]);

			if(!isset($controller_method[0]) || empty($controller_method[0])){
				throw new Exception('Erro no explode(): Controller não encontrado');
			}
			if(!isset($controller_method[1]) || empty($controller_method[1])){
				throw new Exception('Erro no explode(): Method não encontrado');
			}

			$this->class = $controller_method[0];
			$this->action = $controller_method[1];
			return;*/
		}	

		$this->loadRouteWithParams();

		if(!isset($this->params))
		{
			//echo "404";
			(new HttpError)->__404PageNotFound();
			exit;
		}
	}

	public function dispatch(): void
	{
		try{
			$this->loadRoute();
			//$this->getControllerFile();
			$this->getMethod($this->getClass());
		}catch(Exception $e){
			ExceptionHandler::pageHandler([
				'message' => $e->getMessage(),
				'log' => $e,
			]);
		}

	}

	/**
	 * @method getControllerFile
	 * @description Chama o arquivo do controller
	 * @throws Exception Controller Class $this->class Not Found
	 * @return void
	 */
	private function getControllerFile(): void
	{
		$controllerFile = "controller". DIRECTORY_SEPARATOR .$this->class.".php";
		if(is_file($controllerFile) && is_readable($controllerFile))
			require_once $controllerFile;
		else
			throw new Exception("Controller File [$controllerFile] not Found.");
	}

	/**
	 * @method getClass
	 * @description Verifica se a classe do Controller da rota existe e retorna uma instância dela
	 * @throws Exception Controller Class $this->class Not Found
	 * @return mixed
	 */
	private function getClass(): mixed
	{
		//Classe sem namespace
		if(class_exists($this->class))
			return new $this->class;
		//Classe com namespace
		/*else
			$namespaces = require_once "route_namespace.php";
			if(class_exists($namespaces[$this->class])){
				return new $namespaces[$this->class];
			}else{
				throw new Exception("Controller Class [$this->class] Not Found");
			}*/
		throw new Exception("Controller Class [$this->class] Not Found");
	}

	/**
	 * @method getMethod
	 * @description Verifica se o metodo do controller existe, executando no processo
	 * @param $class_object | Objeto do controller para verificar se existe e executar o metodo.
	 * @return void
	 */
	private function getMethod($class_object): void
	{
			$method = $this->action;

			if(method_exists($class_object, $method)){
				//Se houver parâmetros na rota é passado no metodo
				if(isset($this->params))
					$class_object->$method($this->params);
				else
					$class_object->$method();
			}	
			else
				throw new Exception("Method [$this->action] not found");
	}

	/**
	 * @method hasParams
	 * @description Verifica se a rota tem parâmetros
	 * Exemplo:'usuario/perfil/{usuario_id}'
	 * @return bool|int
	 */
	private static function hasParams($url): bool|int
	{
		return (preg_match_all('/{[a-zA-Z0-9_]+}/', $url, $matches));
	}

	/**
	 * @method loadRouteWithParams
	 * @description Carrega a rota que possui parâmetros
	 * Exemplo:'usuario/perfil/{usuario_id}'
	 * 
	 * @var string $trueRoute | Rota que vai ser comparada com a Rota do browser para confirmar que é a rota correta
	 * @var string $urlRoute | Rota que vem do browser
	 * @var string $keyRoute | Rota que vem do array key
	 * 
	 * @return void
	 */
	private function loadRouteWithParams(): void
	{
		$trueRoute = '';
		//$routesKeys = array_keys($this->routes);
		$routesKeys = preg_grep('/\{.*\}/', array_keys($this->routes)); //Pegando apenas rotas com parâmetro '{}'
		$request = [];
		foreach($routesKeys as $r)
		{
			//Se for uma rota que não tem parâmetros pula para a próxima do loop
			if(!self::hasParams($r))
				continue;

			$keyRoute = explode('/', $this->formatUrl($r));
			$urlRoute = explode('/', $this->url);
			
			//Se o numero se elementos da rota do loop não for o mesmo da rota do browser pula para a proxima
			if(sizeof($keyRoute) != sizeof($urlRoute))
				continue;

			//Percorre toda a URL e compara com a rota atual do foreach, se for correta vai sendo montada a rota
			for($i = 0; $i < sizeof($keyRoute); $i++){
				if($keyRoute[$i] === $urlRoute[$i]){
					$trueRoute .= $keyRoute[$i];
				}

				//Caso os elementos forem diferentes, verificar se são é um parâmetro
				else if(self::hasParams($keyRoute[$i])){
					$trueRoute .= $urlRoute[$i];
					$keyName = trim($keyRoute[$i],'{ }');
					$request[$keyName] = $this->clean($urlRoute[$i]);
				}

				//Se não for um parâmetro então as rotas da URL e do foreach atual são diferente pula para a proxima
				else
					break;
			}
			
			//Comparando se a rota montada é igual a do browser se for é a correta
			if($trueRoute === implode('', $urlRoute) ){
					$this->set($this->routes[$r], $request);
					/*PROVAVELMENTE REMOVER
					
					$controller_method = explode('@', $this->routes[$r][0]);
					$this->class = $controller_method[0];
					$this->action = $controller_method[1];
					$this->params = (object)$request;*/
			}
		}
	}

	/*private function set(string $route,array $route_params = []): void{
		$controller_method = explode('@', $route);

		if(!isset($controller_method[0]) || empty($controller_method[0])){
			throw new Exception('Erro no explode(): Controller não encontrado');
		}
		if(!isset($controller_method[1]) || empty($controller_method[1])){
			throw new Exception('Erro no explode(): Method não encontrado');
		}

		$this->class = $controller_method[0];
		$this->action = $controller_method[1];
		if(!empty($route_params)){
			$this->params = (object)$route_params;
		}
	}*/

	private function set(array $e, array $route_params = []): void{
		/*$controller_method = explode('@', $route);

		if(!isset($controller_method[0]) || empty($controller_method[0])){
			throw new Exception('Erro no explode(): Controller não encontrado');
		}
		if(!isset($controller_method[1]) || empty($controller_method[1])){
			throw new Exception('Erro no explode(): Method não encontrado');
		}*/

		$this->class = $e[0];
		$this->action = $e[1];
		if(!empty($route_params)){
			$this->params = (object)$route_params;
		}
	}
	
	private function clean(string $string): string
	{
		return addslashes(strip_tags($string));
	}
}