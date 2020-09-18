<?php 
// controlador da pagina inicial
class clientesController extends controller{

	// verifica se usuario esta logado, caso contrario redireciona para login
	public function __construct(){
		$u = new Login();

		if(!$u->isLogged()){
			header("Location: ".BASE_URL."login");
		}

	}

	//action, metodo padrao
	public function index(){

		
		
		// manda todos dados para exibição no view, caso necessario
		$dados = array('' =>  '');

		// inclue arquivo que esta dentro da pasta view, e envia paramentro
		$this->loadTemplate('clientes', $dados);

	}

	public function addSave(){

		$dados = array();

		if(!empty($_POST['nome'])) {

			$nome = $_POST['nome'];
			$sexo = $_POST['sexo'];
			$data_nasc = Generic::dataIn($_POST['data_nasc']);
			$endereco =  $_POST['endereco'];
			$numero =  $_POST['numero'];
			$bairro =  $_POST['bairro'];
			$cidade =  $_POST['cidade'];
			$estado = $_POST['estado'];
			$telefone =  $_POST['telefone'];
			$cpf =  $_POST['cpf'];

			//verifica se existe email
			
			$e = new Generic();
			if($e->checkEmail("clientes",$_POST['email']) == false){

				$email =  $_POST['email'];
			}else{
				$dados['teste'] =  Generic::message('alert',"e-mail ja cadastrado!");
				$this->loadTemplate('clientes', $dados);
				// die();
			}

			$clientes = new Clientes();

			if($clientes->add($nome, $sexo, $data_nasc, $endereco, $numero, $bairro, $cidade, $estado, $telefone, $cpf, $email) == true){
				header("Location: ".BASE_URL);
			}else{
				header("Location: ".BASE_URL.'clientes/add?error=exists');
			}
		}else{
			header("Location: ".BASE_URL.'clientes/add');
		}
			

		}
	


}


 ?>