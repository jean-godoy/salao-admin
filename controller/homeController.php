<?php 
// controlador da pagina inicial
class homeController extends controller{

	// verifica se usuario esta logado, caso contrario redireciona para login
	public function __construct(){
		$u = new Login();

		if(!$u->isLogged()){
			header("Location: ".BASE_URL."login");
		}

	}

	//action, metodo padrao
	public function index(){

		

		//classe anuncios
		$anuncios = new Anuncios();
		$usuario = new Usuarios();
		
		//manda todos dados para exibição no view, caso necessario
		$dados = array(
			'quantidade' => $anuncios->getQuantidade(),
			'nome' => $usuario->getNome(),
			'idade' => $usuario->getIdade()
	);

		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('home', $dados);

	}


}


 ?>