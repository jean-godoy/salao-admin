<?php 
// controlador da pagina inicial
class funcionariosController extends controller{

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
		$this->loadTemplate('funcionarios', $dados);

	}

	// esta funcao insere novo funcionario, em seguida recuoera seu Id, e cria uma conta 
	public function addSave(){

		if(!empty($_POST['nome'])){
			$nome = $_POST['nome'];
			$sexo = $_POST['sexo'];
			$data_nasc = Generic::dataIn($_POST['data_nasc']);
			$endereco = $_POST['endereco'];
			$numero = $_POST['numero'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$telefone = $_POST['telefone'];
			$rg = $_POST['rg'];
			$cpf = $_POST['cpf'];
			$profissao = $_POST['profissao'];
			$porcentagem = $_POST['porcentagem'];
			$email = $_POST['email'];

			$funcionario = new Funcionarios();
			// $contatos->delete($id);
			if($funcionario->add($nome,$sexo,$data_nasc,$endereco,$numero, $bairro, $cidade, $estado, $telefone, $rg, $cpf,$profissao,$porcentagem, $email) == true){
				$funcionario->novaConta($funcionario->lastId(), 0);
				echo "<a class='' href='".BASE_URL."'>Ok</a>";
			}else{
				header("Location: ".BASE_URL.'funcionarios/add?error=exists');			}
			
		}else{
			header("Location: ".BASE_URL.'funcionarios/add');
		}
	}


}


 ?>