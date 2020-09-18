<?php 

class Core{

	public function run(){
		// 1 = controller // 2 = action // 3,4,5.. = parametros
		

		$params = array();

		$url = '/';
		if(isset($_GET['url'])){
			$url.=$_GET['url'];
		}

		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);

			//remove o primeiro registo q seria o nome do site
			array_shift($url);

			//chama o pagina/metodo e valida, se nao retorna para home
			if(file_exists('controller/'.$url[0].'Controller.php')){
				$currentController = $url[0].'Controller';
			}else{
				$currentController = 'homeController';
			}
			
			array_shift($url);

			//verifica se existe o action, caso nao seta o padrao, caso sim ele remove o indece tbm
			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				//chama o metodo
				$currentAction = 'index';
			}

			//se existe parametro acrecenta, caso nao ele fica null
			if(count($url) > 0){
				$params = $url;
			}

		}else{
			//seta o home padrao
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		
		//instancia o controller armazenado a instancia do obj dentro da variavel c
		$c = new $currentController();
		//agora instanciaremos a action
		//a action nada mais e q um metodo dentro da classe


		//essa funçao, o primeiro parametro pega a classe e executa o metodo=action, o segundo manda os params c tiver
		call_user_func_array(array($c, $currentAction),$params);
	}

}

 ?>